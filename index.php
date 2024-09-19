<?php


// to get the path without the query string
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$segments = explode('/', $path);

require_once "src/Router.php";
$router = new Router;
$router->add("/home/index", ['controller' => 'home', 'action' => 'index']);
$router->add("/products", ['controller' => 'products', 'action' => 'index']);
$router->add("/", ['controller' => 'home', 'action' => 'index']);

$params = $router->match($path);

if ($params === false) {
    exit("404 Not Found");
}
// getting the controller based the path
$action = $params["action"];
$controller = $params["controller"];

/*
 * require the controller value
 * depending on the controller that is coming from the get method above
 */
require "src/controllers/$controller.php";

// and create controller object
$controller_obj = new $controller();

// return the action depending on the action that come from the get variable
$controller_obj->$action();