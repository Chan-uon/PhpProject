<?php
/**
* Controller for homepage
*/
namespace MyProject;

class ControllerHome extends Controller {

    public function __construct() {
        parent::__construct();
    }

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
    public function show($view_name){
        $this->view($view_name);
    }
}
?>