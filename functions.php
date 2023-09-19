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