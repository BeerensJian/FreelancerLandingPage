<?php

function dd($var) : void {
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
    die;
}

function redirect(string $url): void
{
    header("Location: $url");
    exit();
}

function abort($code = 404) : void
{
    http_response_code($code);
    require "views/$code.php";
    exit();
}