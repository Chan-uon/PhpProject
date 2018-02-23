<?php
/**
* Controller for homepage
*/
namespace MyProject;

class ControllerHome extends Controller {
   /**
    * Class Constructor.
    */
    public function __construct($view) {
        parent::__construct($view);
    }

    /**
    * Method show().
    * Invoke the method getView.
    * May perform logical operations and pass
    * data to method getView before invoking it.
    *
    * @return function getView($view_name, $data)
    *   The method to be invoked.
    */
    public function show(){
        $this->getView($this->view_name);
    }
}
?>