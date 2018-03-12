<?php
/**
* Base Controller Class.
*/
namespace MyProject;

class Controller
{
    protected $view_name;

   /**
    * Class Constructor.
    */
    public function __construct($view)
    {
        $this->view_name = $view;
    }

    /**
    * Method getView($view, $data = []).
    * Include the view using the $view.
    *
    * @param string $view The name of the view.
    * @param array $data The data being passed to the view.
    * @return void
    */
    public function getView($view, $data = [])
    {
        require_once("./views/{$view}");
    }
}
