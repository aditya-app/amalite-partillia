<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Aditya
 * Date: 25/07/13
 * Time: 14:26
 * To change this template use File | Settings | File Templates.
 */

class Index extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->load->generator("examplegenerator", "ExampleGenerator",
            [
                "title"=>"Mozilla"
            ]);
    }
}