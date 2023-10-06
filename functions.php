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

function previousPage(int $pageNumber) : int
{
    $previousPage = $pageNumber - 1;
    if ($previousPage < 1) $previousPage = 1;

    return $previousPage;
}

function nextPage(int $pageNumber, int $max) : int
{
    $nextPage = $pageNumber + 1;
    if ($nextPage > $max) $nextPage = $max;

    return $nextPage;
}
