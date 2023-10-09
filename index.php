<?php
declare(strict_types=1);
session_start();

use Core\Router;
use Core\Session;

require 'functions.php';
require "vendor/autoload.php";

$dotenv = \Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();

require 'bootstrap.php'; // create a container containing instances, easy to get instances quickly

$router = new Router();
require 'Core/routes.php';;
$uri = explode("?", $_SERVER['REQUEST_URI'])[0];
$method = $_SERVER['REQUEST_METHOD'];
require $router->route($uri, $method);

Session::unflash();
