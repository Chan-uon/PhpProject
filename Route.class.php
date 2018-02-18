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
    * Method add($url, $call_back).
    * Add an url and a callback function to $routes.
    *
    * @param string $url The string url.
    * @param function $call_back The callback function.
    * @return void
    */
    public static function add($url, $call_back){
        self::$routes[$url] = $call_back;
    }

    /**
    * Method get().
    * Check if the url exists in $routes.
    * Invoke the callback for the specified url
    *
    * @return void
    */
    public static function get(){
        $url = $_GET['url'];
        if(array_key_exists($url, self::$routes)){
                self::$routes[$url]->__invoke();
            }
        else {
            echo "Route does not exist"; //temporary
        }
    }
}
?>