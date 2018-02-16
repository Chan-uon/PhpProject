<?php
/**
* Singleton Database Class for PDO connection
*/
class PdoDb{

    /**
    * Class attribute instance
    * @var null
    */
    private static $instance = null;

    /**
    * Class Constructor
    * @return void
    */
    private function __construct() {
    }

    /**
    * Method getInstance()
    * returns a singleton instance for PDO database connection
    *
    * @return obj $instance PDO instance
    */
    public static function getInstance(){
        if(self::$instance == null){
            $db = parse_ini_file('db.ini');
            $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            self::$instance = new PDO('mysql:host='.$db['host'].';dbname='.$db["database"],
                                    $db['username'], $db['password'], $pdo_options);
        }
        return self::$instance;
    }
}
?>