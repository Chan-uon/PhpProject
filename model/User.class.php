<?php
/**
* User Model Class.
*/
namespace MyProject;

use \Exception;
use \PDO;

class User extends Model
{
    /**
    * Class Constructor.
    * Calls parent's constructor to access the database and
    * instantiate the class's attributes. It is assumed that
    * database table's name is the class name with an 's'
    * appended to it (all lower case).
    */
    public function __construct()
    {   //get the table's name using basename and class name (include namespace)
        parent::__construct(basename(strtolower(__CLASS__ . "s")));
    }
}
