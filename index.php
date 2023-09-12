<?php
declare(strict_types=1);

use Core\Router;

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require 'functions.php';

spl_autoload_register(function ($class) {
    require  $class . '.php';
});

$config = require 'config.php';
$router = new Router();
require 'Core/routes.php';;

$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];
require $router->route($uri, $method);
