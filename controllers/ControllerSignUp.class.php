<?php
/**
* Controller for sign up
*/
namespace MyProject;

class ControllerSignUp extends Controller {

    /**
    * Method show($view_name).
    * Invoke the method view.
    * May perform logical operations and pass
    * data to method view before invoking it.
    *
    * @param string $view_name The name of the view.
    * @return function view($view_name, $data)
    *   The method to be invoked.
    */
    public static function show($view_name){
        self::view($view_name);
    }
}
?>