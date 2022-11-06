<?php

require_once "../application/lib/dev.php";
require_once "../application/core/autoloader.php";

use application\core\Router;
use application\lib\Database;

session_start();

$router = new Router();
$router->run();