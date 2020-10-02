<?php

use Core\Request;
use Core\Route;

require_once "../vendor/autoload.php";

$route = new Route;
$route->get("posts/index", "PostController@index");
$route->get("posts/create", "PostController@create");
$route->post("posts/store", "PostController@store");

echo '<pre>';
print_r($route->routes);
echo '</pre>';

// $request = new Request;
// echo $request->server('QUERY_STRING');