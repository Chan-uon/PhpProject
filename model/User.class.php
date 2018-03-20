<?php
/**
* User Model Class.
*/
namespace MyProject;

use \Exception;
use \PDO;

class User extends Model
{
    /**
    * Class attribute $data.
    * Stores column name and its respective data.
    *
    * @var array $data
    */
    private $data = array();//id, name, password

    /**
    * Class static attribute $table.
    * Stores table name.
    *
    * @var string $table
    */
    private static $table = 'users';

    /**
    * Class static attribute $col_names.
    * Stores column's names.
    *
    * @var string $col_names
    */
    private static $col_names = null;

   /**
    * Class Constructor.
    * Access database and instantiate $data with 
    * table's column names.
    */
    public function __construct()
    {
        $this->getColumns();
    }

    /**
    * Magic method __get
    * Accessor for attributes.
    *
    * @param string $varName The name of the attribute.
    * @return string|int|null The value of a specific attribute.
    */
    public function __get($var_name)
    {
        try {
            if (array_key_exists($var_name, $this->data)) {
                return $this->data[$var_name];
            }
            else {
                 throw new Exception('Error __get: ' . __CLASS__ .
                        ' class does not have attribute {' . $var_name . '}');
            }
        } catch (Exception $e) {
            echo  "<br />" . $e;
        }
    }

    /**
    * Magic method __set
    * Mutator for attributes.
    *
    * @return void
    */
    public function __set($var_name,$value)
    {
        try {
            if (array_key_exists($var_name, $this->data)) {
                $this->data[$var_name] = $value;
            }
            else {
                throw new Exception('Error __set: ' . __CLASS__ .
                        ' class does not have attribute {' . $var_name . '}');
            }
        } catch (Exception $e) {
            echo  "<br />" . $e;
        }
      
    }

    /**
    * Method getColumns()
    * Access database in order to retrieve all column names
    * add them to $data.
    *
    * @return void
    */
    private function getColumns()
    {
        //get column names and place it into $data
        $pdo = PdoDb::getInstance();

        $sql  = "SELECT * ";
        $sql .= "FROM " . self::$table . " ";
        $sql .= "LIMIT 0";

        $stmt = $pdo->prepare($sql);
        $stmt->execute();

        for ($i = 0; $i < $stmt->columnCount() ; $i++) {
           $column = $stmt->getColumnMeta($i);
           $this->data[$column['name']] = null;
        }
        //unset any data column that are inserted/updated automatically
        unset($this->data['created_at']);
        unset($this->data['modified_at']);

        //store column names only
        self::$col_names = array_keys($this->data);
    }

    /**
    * Method static read($user_id)
    * Access database and return all the data
    * for the user whose id is equal to $user_id
    *
    * @param int $user_id The user's id.
    * @return array The user's information.
    */
    public static function read($user_id)
    {
        $pdo = PdoDb::getInstance();

        $sql  = "SELECT * ";
        $sql .= "FROM " . self::$table . " ";
        $sql .= "WHERE " . self::$col_names[0] . " = ?";

        $stmt = $pdo->prepare($sql);
        $stmt->execute(array($user_id));
        return $stmt->fetch(PDO::FETCH_ASSOC);

    }
}