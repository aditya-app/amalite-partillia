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
 * Class Router
 * Route a request, give it correct package/controller/method response
 *
 * Partillia router is segmented into <package>/<controller>/<method>/<method_args>
 */
class Router
{

    /***
     * Route a request, create controller, model, and view and runs it
     */
    function route($url)
    {
        // Ensure no trailing slash
        $url = rtrim($url, '/');
        // Separate pattern
        $urls = explode('/', $url);

        global $config;

        // Collect information and defaults
        $packageName = $urls[0] ?: $config['router']['default_package'];
        $controllerName = isset($urls[1]) ?: $config['router']['default_controller'];
        $methodName = isset($urls[2]) ?: $config['router']['default_method'];
        $methodArgs = array_slice($urls, 3);

        // If controller exists
        if (file_exists($ctrlPath = SF_CONTROLLERS . DS . $packageName . DS . $controllerName . ".php")) {
            require_once($ctrlPath);
            $ctrl = new $controllerName();
            if (method_exists($ctrl, $methodName)) {
                $ctrl->{$methodName}($methodArgs);
            } else {
                die("Method not found");
            }
        } else {
            die("Controller not found");
        }
    }

}