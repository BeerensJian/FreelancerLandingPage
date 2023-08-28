<?php

class Router
{
    private array $routes;

    public function add(string $uri, string $controller, string $method)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => strtoupper($method)
        ];
    }

    public function get(string $uri, string $controller)
    {
        $this->add($uri, $controller, 'GET');
    }

    public function post(string $uri, string $controller)
    {
        $this->add($uri, $controller, 'POST');
    }

    public function delete(string $uri, string $controller)
    {
        $this->add($uri, $controller, 'DELETE');
    }

    public function patch(string $uri, string $controller)
    {
        $this->add($uri, $controller, 'PATCH');
    }

    public function put(string $uri, string $controller)
    {
        $this->add($uri, $controller, 'PUT');
    }

    // route to controller
    public function route(string $uri, string $method)
    {
        foreach ($this->routes as $route) {
            if ($route['uri'] == $uri && $route['method'] == strtoupper($method)) {
                return $route['controller'];
            }
        }
    }
}
