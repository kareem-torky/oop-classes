<?php 

use Core\Route;

$route = new Route;
$num = "([\d]+)";
$str = "([\w-]+)";

$route->get('', "HomeController@index");
$route->get("posts/index", "PostController@index");
$route->get("posts/show/$num", "PostController@show");
$route->get("posts/edit/$num", "PostController@edit");
$route->get("posts/create", "PostController@create");
$route->post("posts/store", "PostController@store");