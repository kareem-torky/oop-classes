<?php

spl_autoload_register("getClassFile");

function getClassFile($className) {
    $classNameToArr = explode("\\", $className);
    $className = end($classNameToArr);
    require_once "core/$className.php";
}