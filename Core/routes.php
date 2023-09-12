<?php

$router->get('/', 'controllers/index.php');
$router->post('/', 'controllers/store.php'); // form submit

$router->get('/adminlogin', 'controllers/admin/login.php');
$router->post('/adminlogin', 'controllers/admin/session.php');
