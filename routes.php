<?php
use \MyProject\Route;
use \MyProject\ControllerHome;

Route::get("index.php", function (){
    return ControllerHome::show();
});

?>