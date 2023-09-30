<?php

namespace Core;

use Exception;

class App {
    private static Container $container;

    public static function registerContainer(Container $container)
    {
        static::$container = $container;
    }

    public static function container()
    {
        return static::$container;
    }

    /**
     * @throws Exception
     */
    public static function resolve($key)
    {
        return static::Container()->resolve($key);
    }

    public static function bind(string $key, $resolver)
    {
        static::$container->bind($key, $resolver);
    }
}