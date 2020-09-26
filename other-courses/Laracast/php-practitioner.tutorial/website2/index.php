<?php
// BOOT UP SERVER
// php -S localhost:8888

// Error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// end error reporting


require 'core/bootstrap.php';

//die(var_dump($app));
//die(var_dump($_SERVER));

//var_dump(Request::uri());


$router = new Router;
// $router->define($routes);
var_dump($router->routes);
require $router->direct(Request::uri());
// require Router::load('routes.php')->direct(Request::uri());




// $router = new Router;
// Router::load('routes.php');
// $router->direct(Request::uri());
