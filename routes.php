<?php

$router->get('/', 'controllers/index.php');

$router->get('/adminlogin', 'controllers/admin/login.php');
$router->post('/adminlogin', 'controllers/admin/session.php');
