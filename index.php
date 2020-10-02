<?php

// require_once "autoload.php";

require_once "vendor/autoload.php";

use Core\Validation\Validator;

$req = [
    [
        'name' => 'name',
        'value' => '',
        'rules' => 'required|str'
    ], 

    [
        'name' => 'age',
        'value' => "hello",
        'rules' => 'required|numeric'
    ], 
];

$errors = Validator::make($req);

echo '<pre>';
print_r($errors);
echo '</pre>';