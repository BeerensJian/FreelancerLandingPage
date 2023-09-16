<?php

namespace Core;

class Session
{
    static function put(string $key, mixed $value)
    {
        $_SESSION[$key] = $value;
    }

    static function get(string $key) : mixed
    {
        if (isset($_SESSION['_flash'][$key])) {
            return $_SESSION['_flash'][$key];
        }

        return $_SESSION[$key] ?? null;
    }

    static function flash(string $key, mixed $value) : void
    {
        $_SESSION['_flash'][$key] = $value;
    }

    static function unflash() : void
    {
        $_SESSION['_flash'] = [];
    }

    static function destroy(): void
    {
        $_SESSION = [];
        session_destroy();

        $params = session_get_cookie_params();
        setcookie('PHPSESSID', '', time() - 3600, $params['path'], $params['domain'], $params['secure'], $params['httponly']);
    }
}