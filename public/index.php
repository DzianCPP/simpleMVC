<?php

require_once "../application/lib/dev.php";
require_once "../application/core/autoloader.php";

use application\core\Router;
use application\lib\Database;

$router = new Router();
$router->run();