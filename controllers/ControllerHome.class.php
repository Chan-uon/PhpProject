<?php
/**
* Controller for homepage
*/
namespace MyProject;

class ControllerHome extends Controller {

    public static function show($view_name){
        self::view($view_name);
    }
}
?>