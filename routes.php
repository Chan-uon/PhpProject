<?php
use \MyProject\Route;
use \MyProject\ControllerHome;

//Add the routes.
Route::add("index.php", function (){
    return ControllerHome::show();
});

//Get the route and invokes its function
Route::get();
?>