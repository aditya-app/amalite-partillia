<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Aditya
 * Date: 25/07/13
 * Time: 14:19
 * To change this template use File | Settings | File Templates.
 */

/***
 * Used to load library, views, and additional content
 */
class Loader
{

    private $_controller;

    /***
     * Initialize a new instance of loader
     * It automatically called by controller, no need to call it manually
     * @param $controller
     */
    function __construct($controller)
    {
        $this->_controller = $controller;
    }

    /***
     * Load a view to current page
     * @param $url : The location of the view
     */
    function view($url)
    {
        require_once SF_VIEWS . DS . $url . ".php";
    }

    /***
     * Load a library and assign it to current controller
     * @param $url : The url to the library
     * @param $name : The class name of the library
     */
    function library($url, $name)
    {
        require_once SF_LIBRARIES . DS . $url . ".php";
        $library = new $name();
        $this->_controller->{$name} = $library;
    }

    /***
     * Load a generator and run it
     * @param $url : The url to the generator
     * @param $name : The name of the generator
     * @param null parameters : Optional parameter for the generator
     */
    function generator($url, $name,$parameters=null){
        require_once(SF_GENERATORS.DS.$url.".php");
        $generator = new $name();
        $generator->run($parameters);
    }

}