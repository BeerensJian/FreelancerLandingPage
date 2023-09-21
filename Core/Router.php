<?php

namespace Core;


use Exception;

enum AuthorizationRoles: string
{
    case ADMIN = "admin";
    case USER = "user";
}

class Router
{
    private array $routes;

    public function add(string $uri, string $controller, string $method)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => strtoupper($method),
            'middleware' => []
        ];
        return $this;
    }

    public function get(string $uri, string $controller) : self
    {
        return $this->add($uri, $controller, 'GET');
    }

    public function post(string $uri, string $controller): self
    {
        return $this->add($uri, $controller, 'POST');
    }

    public function delete(string $uri, string $controller): self
    {
        return $this->add($uri, $controller, 'DELETE');
    }

    public function patch(string $uri, string $controller): self
    {
        return $this->add($uri, $controller, 'PATCH');
    }

    public function put(string $uri, string $controller): self
    {
        return $this->add($uri, $controller, 'PUT');
    }

    public function only(AuthorizationRoles $role): self {
        $this->routes[count($this->routes) - 1]["middleware"]["authorization"] = $role->value;
        return $this;
    }



    // route to controller
    public function route(string $uri, string $method)
    {
        // todo implement check for middleware
        foreach ($this->routes as $route) {
            if ($route['uri'] == $uri && $route['method'] == strtoupper($method)) {
                return $route['controller'];
            }
        }

        throw new Exception('Route not found');
    }
}
