<?php

use Core\Session;

$path_to_css = "../../public/css/admin.css";
$errors = Session::get("errors");
//dd($errors)


require 'views/adminlogin.view.php';
