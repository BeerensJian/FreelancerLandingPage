<?php

use Core\App;

$submissionId = $_POST['id'] ?? null;

$db = App::resolve('db');
$db->query("UPDATE userdata SET completed = NOT completed where id = :id", ["id" => $submissionId]); // set the value of completed to the opposite


redirect('/admin/dashboard');



