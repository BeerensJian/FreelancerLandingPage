<?php

use Core\Database;
use Core\Validator;
use Core\Session;

$config = require 'config.php';
$db = new Database($config['database']);

// TODO: validation
$validator = new Validator();
$validator->string($_POST['name'], 'Naam', 1, 255);
$validator->email($_POST['email']);
$validator->string($_POST['mobile'], 'Mobiel Nummer', 1, 255);
$validator->string($_POST['extrainfo'], "Extra Informatie", 0, 5000);

if (!empty($validator->errors())){
    Session::flash("errors", $validator->errors());
    header('Location: /');
    exit();
}

// TODO: mail form to email
// TODO: handle errors in view
// TODO: refractor error handling so its easier to seperate errors per field / look cleaner
$db->query("INSERT INTO userdata (name, email, mobile, extrainfo) VALUES (?, ?, ?, ?);", [
    $_POST['name'],
    $_POST['email'],
    $_POST['mobile'],
    $_POST['extrainfo']
]);

redirect("/");