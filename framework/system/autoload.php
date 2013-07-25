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
 * Declare magic function __autoload that act as a classpath
 */

function __autoload($className)
{
    // Amalite use lower case format for file name
    // Class path only apply to controller, model, and system classes
    $fileName = strtolower($className) . ".php";
    if (file_exists($path = SF_CONTROLLERS . DS . $fileName)) {
        require_once($path);
    } else if (file_exists($path = SF_MODELS . DS . $fileName)) {
        require_once($path);
    } else if (file_exists($path = SF_SYSTEM . DS . $fileName)) {
        require_once($path);
    }
}