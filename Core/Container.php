<?php

namespace Core;

use Exception;

class Container {
    // associative array that holds instances of our classes
    private array $bindings = [];

    public function bind(string $key, callable $resolver): void
    {
        $this->bindings[$key] = $resolver;
    }

    /**
     * @throws Exception
     */
    public function resolve(string $key): object
    {
        if (!array_key_exists($key, $this->bindings)){
            throw new Exception("Binding does not exist in container");
        }

        $resolver = $this->bindings[$key];
        return call_user_func($resolver);
    }

}