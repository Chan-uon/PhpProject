<?php
/**
* Singleton Database Class for PDO connection
*/
class PdoDb{
    private $db;
    private static $instance = null;

    private function __construct() {
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        $this->db = new PDO('mysql:host=;dbname=','root','',$pdo_options);
    }

    public static function getInstance(){
        if(self::$instance == null){
            self::$instance = PdoDb();
        }
        return self::$instance;
    }
}
?>