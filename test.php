<?php 

require_once "vendor/autoload.php";
$pattern = "/^posts\/show\/([\d]+)\/comments\/([\d]+)\/edit$/";
$str = "posts/show/1/comments/2/edit";

preg_match($pattern, $str, $matches);

$params = array_slice($matches, 1);
print_r($params);
