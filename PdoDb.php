<?php
/**
* Singleton Database Class for PDO connection
*/
class PdoDb{
    private static $instance = null;

    private function __construct() {
    }

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