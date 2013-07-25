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
 * Bootstraper for framework, load the framework and starts it
 */

//Used to load the framework
define("ROOT", dirname(dirname(__FILE__)));
define("DS", DIRECTORY_SEPARATOR);

//Load the framework
require_once ROOT . DS . "framework" . DS . "system" . DS . "core.php";
//Run the framework
$framework = new Framework();
$framework->run();