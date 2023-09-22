<?php

use Core\Middleware\AuthorizationRoles;

$router->get('/', 'controllers/index.php');
$router->post('/', 'controllers/store.php'); // form submit

$router->get('/admin/login', 'controllers/admin/login.php');
$router->post('/admin/login', 'controllers/admin/session.php');

$router->get('/admin/dashboard', 'controllers/admin/dashboard.php')->only(AuthorizationRoles::ADMIN);