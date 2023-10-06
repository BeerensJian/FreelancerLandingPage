<?php
declare(strict_types=1);
session_start();

use Core\Router;
use Core\Session;

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require 'functions.php';
require "vendor/autoload.php";

require 'bootstrap.php'; // create a container containing instances, easy to get instances quickly
$router = new Router();
require 'Core/routes.php';;

$uri = explode("?", $_SERVER['REQUEST_URI'])[0];
$method = $_SERVER['REQUEST_METHOD'];
require $router->route($uri, $method);

Session::unflash();
