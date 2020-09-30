<?php 

require_once "autoload.php";
use Core\Request;
use Core\Session;
use Core\Db;


// $session = new Session;
// $session->set("success", "this created successfully");

// print_r($_SESSION);
// echo "<br>";

// echo $session->flash("success");
// echo "<br>";

// print_r($_SESSION);

$db = Db::getInstance();

echo '<pre>';
print_r( 
    $db->table("posts")
    ->select("id, title")
    ->where("id", "=", 5)
    ->getOne() 
);
echo '</pre>';

// $db2 = Db::getInstance();
// $db3 = Db::getInstance();
// $db4 = Db::getInstance();
// $db5 = Db::getInstance();

// oop 
// class 
// object

// private __construct 

// اعمل فانكشن ,وسيطة  خليها هى اللى تكريت الاوبجكت