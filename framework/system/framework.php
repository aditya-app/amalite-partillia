<?php
/**
 * Created under Fireline Technologies of ION
 * User: Aditya Purwa
 * Date: 7/20/13
 * Time: 3:32 PM
 *
 * COPYRIGHT 2013 (C) FT-ION/II/I, All rights reserved.
 */

/***
 * Class Framework
 * Process request, and give response
 */
class Framework
{

    function __construct()
    {

    }

    /***
     * Run the framework
     */
    function run()
    {
        $router = new Router();
        $router->route(isset($_GET['url']) ?: "");
    }
}