<?php

spl_autoload_register("getClassFile");

function getClassFile($className) {
    $file_path = lcfirst(str_replace("\\", DIRECTORY_SEPARATOR, $className)) . ".php";

    if(file_exists($file_path)) {
        require_once $file_path;
    }
}