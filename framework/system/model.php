<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Aditya
 * Date: 25/07/13
 * Time: 14:50
 * To change this template use File | Settings | File Templates.
 */

/***
 * Model used to represent used data at certain section
 */
class Model
{

    /***
     * @var The adapter used to interact with databases
     */
    public $db;

    /***
     * Initialize the model
     * @param $adapterUrl : The url to this model adapter
     * @param $name : The name of the adapter
     * Use below parameter to overrides default value from configurations
     * @param null $dbtype : The type of the driver
     * @param null $dbhost : The host of the database
     * @param null $dbname : The name of the database
     * @param null $dbuser : The username used to login onto the database host
     * @param null $dbpassword : The password used to login onto the databse host
     */
    function __construct($adapterUrl, $name, $dbtype = null, $dbhost = null, $dbname = null, $dbuser = null, $dbpassword = null)
    {
        require_once SF_ADAPTERS . DS . $adapterUrl . ".php";
        $this->db= new $name($dbtype, $dbhost, $dbname, $dbuser, $dbpassword);
    }

}