<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Aditya
 * Date: 25/07/13
 * Time: 14:15
 * To change this template use File | Settings | File Templates.
 */

/***
 * The base class for all controller on this framework
 */
class Controller
{

    private $_variables = array();

    public $load;

    /***
     * Initialize a new instance of Controller
     */
    function __construct()
    {
        $this->load = new Loader($this);
    }

    function __get($name)
    {
        return $this->_variables[$name];
    }

    function __set($name, $value)
    {
        $this->_variables[$name] = $value;
    }

}

