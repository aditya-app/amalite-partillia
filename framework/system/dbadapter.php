<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Aditya
 * Date: 25/07/13
 * Time: 14:40
 * To change this template use File | Settings | File Templates.
 */

/***
 * Adapter for database
 */
class DbAdapter extends PDO
{

    /***
     * Initialize the adapter
     * Use below parameter to overrides default value from configuration
     * @param null $dbtype : The type of the driver
     * @param null $dbhost : The host of the database
     * @param null $dbname : The name of the database
     * @param null $dbuser : The username used to login onto the database host
     * @param null $dbpassword : The password used to login onto the databse host
     */
    function __construct($dbtype = null, $dbhost = null, $dbname = null, $dbuser = null, $dbpassword = null)
    {
        global $config;
        //If user force not to use the configuration
        if (!$dbtype) {
            $dbtype = $config['database']['type'];
            $dbhost = $config['database']['host'];
            $dbname = $config['database']['name'];
            $dbuser = $config['database']['username'];
            $dbpassword = $config['database']['password'];
        }
        // PDO give database credentials on error, be sure to catch it
        try {
            parent::__construct($dbtype . ":host=" . $dbhost . ";database=" . $dbname, $dbuser, $dbpassword);
        } catch (PDOException $ex) {
            die("Error on database!");
        }
    }

}