<?php
/**
* Base Controller Class.
*/
namespace MyProject;

class Controller{

    /**
    * Class Constructor.
    */
    public function __construct() {
    }

    /**
    * Method view($view_name, $data = []).
    * Include the view using the $view_name.
    *
    * @param string $view_name The name of the view.
    * @param array $data The data being passed to the view.
    * @return void
    */
    public function view($view_name, $data = []) {
        require_once("./views/{$view_name}");
    }
}
?>