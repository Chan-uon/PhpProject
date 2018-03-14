<?php
/**
* User Model Class.
*/
namespace MyProject;

use Exception;

class User extends Model
{
    private $data;//id, name, password
    private $table = 'users';

   /**
    * Class Constructor.
    * Access database and instantiate $data with 
    * table's column names.
    */
    public function __construct()
    {
        $db = PdoDb::getInstance();
        //only get column names
        $result = $db->prepare('SELECT * FROM ' . $this->table . ' LIMIT 0');
        $result->execute();
        //do not include timestamp
        for ($i = 0; $i < $result->columnCount() - 1; $i++) {
            $col = $result->getColumnMeta($i);
            $this->data[$col['name']] = null;
        }
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
}
