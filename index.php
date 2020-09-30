<?php 

require_once "autoload.php";
use Core\Request;
use Core\Session;


$session = new Session;
$session->set("success", "this created successfully");

print_r($_SESSION);
echo "<br>";

echo $session->flash("success");
echo "<br>";

print_r($_SESSION);