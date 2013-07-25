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
 * The core of this framework, load all configurations, manage classpath
 */

//Store special folder path
require_once(ROOT . DS . "framework" . DS . "configurations" . DS . "paths.php");
//Load configurations (do not modify the order, any other configurations depend on framework.php)
require_once(SF_CONFIGURATIONS . DS . "framework.php");
require_once(SF_CONFIGURATIONS . DS . "database.php");
require_once(SF_CONFIGURATIONS . DS . "router.php");
//Load core files
require_once(SF_SYSTEM . DS . "functions.php");
require_once(SF_SYSTEM . DS . "autoload.php");