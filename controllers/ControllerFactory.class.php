<?php
/**
* Controller Factory
*/
namespace MyProject;

use \MyProject\ControllerHome;
use \MyProject\ControllerSignUp;

Class ControllerFactory
{
    /**
    * Method create().
    * Create and return the appropriate
    * Controller object.
    *
    * @param string $controller The controller name.
    * @return object The desired Controller.
    */
    public static function create($controller)
    {
        switch($controller) {
            case "index.php":
                return new ControllerHome($controller);
                break;
            case "sign_up.php":
                return new ControllerSignUp($controller);
                break;
        }
    }
}
