<?php

use Core\Database;

$config = require 'config.php';
$db = new Database($config['database']);

// TODO: validation

$db->query("INSERT INTO userdata (name, email, mobile, extra_info) VALUES (?, ?, ?, ?);", [
    $_POST['name'],
    $_POST['email'],
    $_POST['mobile'],
    $_POST['extrainfo']
]);

dd('form submitted');