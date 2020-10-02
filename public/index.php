<?php

use Core\Request;
use Core\App;

require_once "../vendor/autoload.php";
require_once "../routes/web.php";

$app = new App($route);