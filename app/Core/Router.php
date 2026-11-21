<?php
// app/Core/Router.php

namespace App\Core;

class Router {
    protected $routes = [];

    public function add($route, $controller, $method) {
        $this->routes[$route] = [
            'controller' => $controller,
            'method' => $method
        ];
    }

    public function dispatch($url) {
        $url = trim($url, '/');
        if (empty($url)) $url = 'home';

        if (array_key_exists($url, $this->routes)) {
            $controllerName = $this->routes[$url]['controller'];
            $methodName = $this->routes[$url]['method'];

            // ساختن نمونه از کنترلر
            $controller = new $controllerName();
            $controller->$methodName();
        } else {
            echo "<h1>404 - صفحه یافت نشد</h1>";
        }
    }
}
