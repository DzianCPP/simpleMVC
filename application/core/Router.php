<?php

namespace application\core;

class Router
{
    protected array $routes = [];
    protected array $params = [];

    public function __construct() {

    }

    public function loadRoutes(): void {
        $this->routes = require_once $_SERVER['DOCUMENT_ROOT'] . '/' . 'application/config/routes.php';
    }

    public function addRegExp($route, $params): void {
        $route = '#^' . $route . '$#';
        $this->routes[$route] = $params;
    }

    public function match(): bool {
        echo 'Match started<br>';
        if ($_SERVER['REQUEST_URI']) {
            $urlToCheck = trim($_SERVER['REQUEST_URI'], '/');
        } else {
            $urlToCheck = '/';
        }
        foreach ($this->routes as $route => $params) {
            if (preg_match($route, $urlToCheck, $matches)) {
                $this->params = $params;
                return true;
            }
        }
        echo 'Match ended<br>';
        return false;
    }

    public function run(): void {
        $this->loadRoutes();
        foreach ($this->routes as $key => $value)
        {
            $this->addRegExp($key, $value);
        }

        if ($this->match()) {
            echo "Route is found";
        } else {
            echo "Route is not found";
        }
    }
}