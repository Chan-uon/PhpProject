<?php
namespace MyProject;
use \MyProject\ControllerHome;
use \MyProject\ControllerSignUp;

Class ControllerFactory {

    public static function create($controller_name) {
        switch($controller_name){
            case "index.php":
                return new ControllerHome();
                break;
            case "sign_up.php":
                return new ControllerSignUp();
                break;
        }
    }
}
?>