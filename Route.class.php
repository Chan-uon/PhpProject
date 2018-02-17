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
    * Method add($uri, $call_back).
    * Add an uri and a callback function to $routes.
    *
    * @param string $uri
    * @param function $call_back The callback function.
    * @return void
    */
    public static function add($uri, $call_back){
        self::$routes[$uri] = $call_back;
    }
}
?>
