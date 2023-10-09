<?php

use Core\App;

$path_to_css = "../../public/css/dashboard.css";
$db = App::resolve("db");

//statistics
["dayTotal" => $day] = $db->query("SELECT count(*) as dayTotal FROM userdata WHERE createdAt > now() - INTERVAL 1 DAY")->fetch();
["weekTotal" => $week] = $db->query("SELECT count(*) as weekTotal FROM userdata WHERE createdAt > now() - INTERVAL 1 WEEK")->fetch();
["monthTotal" => $month] = $db->query("SELECT count(*) as monthTotal FROM userdata WHERE createdAt > now() - INTERVAL 1 MONTH")->fetch();
["totalItems" => $totalItems] = $db->query("SELECT count(*) as totalItems FROM userdata;")->fetch();

$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$itemsPerPage = 10;
$maxPages = (int) ceil($totalItems / $itemsPerPage);
$offset = ($page - 1) * $itemsPerPage;


$userSubmits = $db->query("SELECT * FROM elec_consul.userdata ORDER BY createdAt DESC LIMIT $offset, $itemsPerPage;")->fetchAll();

require 'views/dashboard.view.php';