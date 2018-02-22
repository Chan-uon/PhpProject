<?php
use \MyProject\Route;
use \MyProject\ControllerFactory;
//Add the routes.
Route::add("index.php", function (){
    $controller = ControllerFactory::create("index.php");
    $controller->show("index.php");
});

Route::add("sign_up.php", function (){
    $controller = ControllerFactory::create("sign_up.php");
    $controller->show("sign_up.php");
});

//Get the route and invokes its function
Route::get();
?>