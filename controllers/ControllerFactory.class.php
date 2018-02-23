<?php
namespace MyProject;
use \MyProject\ControllerHome;
use \MyProject\ControllerSignUp;

Class ControllerFactory {

    public static function create($controller) {
        switch($controller){
            case "index.php":
                return new ControllerHome($controller);
                break;
            case "sign_up.php":
                return new ControllerSignUp($controller);
                break;
        }
    }
}
?>