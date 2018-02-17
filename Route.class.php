<?php
/**
* URL Routing Class.
*/
namespace MyProject;

class Route{
    /**
    * Class attribute $routes.
    * @var array
    */
    private static $routes = [];

    /**
    * Class Constructor.
    */
    private function __construct() {
    }

    /**
    * Method get($url, $call_back).
    * Add an url and a callback function to $routes.
    * Invoke the callback for the specified uri
    *
    * @param string $url
    * @param function $call_back The callback function.
    * @return void
    */
    public static function get($url, $call_back){
        self::$routes[$url] = $call_back;
        if($_GET['url'] == $url){
                self::$routes[$url]->__invoke();
            }
    }
}
?>