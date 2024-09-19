<?php


$action = $_GET['action'];
$controller = $_GET['controller'];

/*
 * require the controller value
 * depending on the controller that is coming from the get method above
 */
require "src/controllers/$controller.php";

// and create controller object
$controller_obj = new $controller();

// return the action depending on the action that come from the get variable
$controller_obj->$action();