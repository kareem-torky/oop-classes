<?php 

use Core\Route;

$route = new Route;
$route->get("posts/index", "PostController@index");
$route->get("posts/create", "PostController@create");
$route->post("posts/store", "PostController@store");
$route->get("comments/index", "CommentController@index");