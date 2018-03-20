<?php
/**
* User Model Class.
*/
namespace MyProject;

use Exception;

class User extends Model
{
    /**
    * Class attribute $data.
    * Stores column name and its respective data.
    *
    * @var array
    */
    private $data = array();//id, name, password

    /**
    * Class attribute $table.
    * Stores table name.
    *
    * @var string
    */
    private $table = 'users';

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
    public function __get($varName)
    {
        try {
            if (!array_key_exists($varName, $this->data)) {
                throw new Exception('Error: $user->' . $varName.' does not exist');
            }
            else {
                return $this->data[$varName];
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
    public function __set($varName,$value)
    {
        try {
            if (!array_key_exists($varName, $this->data)) {
                throw new Exception('Error: $user->' . $varName.' does not exist');
            }
            else {
                $this->data[$varName] = $value;
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
        $sql .= "FROM " . $this->table . " ";
        $sql .= "LIMIT 0;";

        $stmt = $pdo->prepare($sql);
        $stmt->execute();

        for ($i = 0; $i < $stmt->columnCount() ; $i++) {
           $column = $stmt->getColumnMeta($i);
           $this->data[$column['name']] = null;
        }
        //unset any data column that are inserted/updated automatically
        unset($this->data['created_at']);
        unset($this->data['modified_at']);
    }
}
