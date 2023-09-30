<?php


use Core\Database;

$path_to_css = "../../public/css/dashboard.css";
// get the last 10 rows from the database
$config = require 'config.php';
$db = new Database($config);

$userSubmits = $db->query("SELECT * FROM elec_consul.userdata ORDER BY createdAt DESC LIMIT 10;")->fetchAll();


require 'views/dashboard.view.php';