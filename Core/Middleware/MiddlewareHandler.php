<?php

// class is responsible for executing all the middleware of a route
namespace Core\Middleware;
class MiddlewareHandler {

    // resolves all middleware added on the route,
    public function resolve(array $middlewares): void {
        if (empty($middlewares)) return;

        foreach ($middlewares as $middleware) {
            call_user_func($middleware);
        }
    }
}