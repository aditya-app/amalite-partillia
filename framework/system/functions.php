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
 * Declare global functions needed by the framework
 */

/**
 * Describe an object in human readable format
 * @param $object : The object to describe
 */
function describe($object)
{
    echo "<pre>";
    print_r($object);
    echo "</pre>";
}