<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Aditya
 * Date: 25/07/13
 * Time: 15:02
 * To change this template use File | Settings | File Templates.
 */

/***
 * Example generator that generate basic http header
 */
class ExampleGenerator extends Generator{
    /**
     * Run this example generator that generate basic http header
     * @param null $parameters
     */
    function run($parameters=null){
        echo "<!DOCTYPE HTML>";
        echo "<html>";
        echo "<head><title>{$parameters['title']}</title></head>";
    }
}