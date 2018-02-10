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
            $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            self::$instance = new PDO('mysql:host=localhost;dbname=test','root','',$pdo_options);
        }
        return self::$instance;
    }
}
?>