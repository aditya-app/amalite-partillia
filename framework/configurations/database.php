<?php
/**
 * Created under Fireline Technologies of ION
 * User: Aditya Purwa
 * Date: 7/20/13
 * Time: 3:32 PM
 *
 * COPYRIGHT 2013 (C) FT-ION/II/I, All rights reserved.
 */

/**
 * Database configurations
 * Note that you can still use multiple database, this configurations is used to specify
 * default database if no database specified during database adapter creation
 */
global $config;
$config['database'] =
    [
        "name" => "amalite_test_db",
        "username" => "root",
        "password" => "amalite",
        "host" => "localhost",
        "type" => "mysql"
    ];