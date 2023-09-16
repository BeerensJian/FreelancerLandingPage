<?php

// Validate the password
use Core\Session;
use Core\Validator;

$validator = new Validator();
$validator->string($_POST['password'], "Password:",8, 255);


if (!empty($validator->errors())) {
    Session::flash("errors", $validator->errors());
    header('Location: /adminlogin');
    exit();
}

// check if the password is equal to the password that is set
// if it is we will sign the admin in with a session
// redirect to dashboard