<?php

use Core\App;
use Core\Database;
use Core\Validator;
use Core\Session;

/** @var Database $db */
$db = App::resolve("db");


$validator = new Validator();
$validator->string($_POST['name'], 'Naam', 1, 255);
$validator->email($_POST['email']);
$validator->string($_POST['mobile'], 'Mobiel Nummer', 1, 255);
$validator->string($_POST['extrainfo'], "Extra Informatie", 0, 5000);

// Todo: error handling in view
// Todo: maybe refractor validator so we can save to which field and error belongs
if (!empty($validator->errors())){
    Session::flash("errors", $validator->errors());
    header('Location: /');
    exit();
}

$db->query("INSERT INTO userdata (name, email, mobile, extrainfo) VALUES (?, ?, ?, ?);", [
    $_POST['name'],
    $_POST['email'],
    $_POST['mobile'],
    $_POST['extrainfo']
]);

$mailer = new \Core\SMTPMailer($_ENV['SMTP_LOGIN']);
if ($mailer->sendUserInfo($_POST, "soundcloudhits@gmail.com")){
    Session::flash("message", "Bedankt voor het vertrouwen, ik neem zo snel mogelijk contact met je op voor jou situatie verder te bespreken.");
} else {
    Session::flash("error", "Er ging iets mis, probeer later opnieuw");
}

redirect("/");