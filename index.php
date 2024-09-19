<?php


// to get the path without the query string
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$segments = explode('/', $path);



// getting the controller based on the segment url instead of the get
$action = $segments[2];
$controller = $segments[1];

/*
 * require the controller value
 * depending on the controller that is coming from the get method above
 */
require "src/controllers/$controller.php";

// and create controller object
$controller_obj = new $controller();

// return the action depending on the action that come from the get variable
$controller_obj->$action();