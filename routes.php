<?php
use \MyProject\Route;
use \MyProject\ControllerHome;
use \MyProject\ControllerSignUp;

//Add the routes.
Route::add("index.php", function (){
    ControllerHome::show("index.php");
});

Route::add("sign_up.php", function (){
    ControllerSignUp::show("sign_up.php");
});

//Get the route and invokes its function
Route::get();
?>