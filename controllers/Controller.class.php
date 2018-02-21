<?php
/**
* Base Controller Class.
*/
namespace MyProject;

class Controller{

    /**
    * Class Constructor.
    */
    private function __construct() {
    }

    public function view($view_name, $data = []) {
        require_once("./views/{$view_name}");
    }
}
?>