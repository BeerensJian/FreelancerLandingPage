<?php

use Core\App;
use Core\Container;
use Core\Database;
use Core\SMTPMailer;

$container = new Container();

$container->bind('db', function (){
    $config = require 'config.php';
    return new Database($config['database']);
});

$container->bind('SMTPMailer', function (){
    return new SMTPMailer($_ENV['SMTP_LOGIN']);
});

App::registerContainer($container);