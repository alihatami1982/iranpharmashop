<?php
// app/Core/Router.php

namespace App\Core;

class Router {
    protected $routes = [];

    public function add($route, $handler) {
        $this->routes[trim($route, '/')] = $handler;
    }

    public function dispatch($url) {
        $url = trim($url, '/');
        if (empty($url)) {
            $url = 'home';
        }

        if (array_key_exists($url, $this->routes)) {
            $handler = $this->routes[$url];
            
            // جدا کردن کنترلر و متد (مثلا AdminController@index)
            list($controllerName, $methodName) = explode('@', $handler);
            
            $controllerClass = "App\\Controllers\\" . $controllerName;
            
            if (class_exists($controllerClass)) {
                $controller = new $controllerClass();
                if (method_exists($controller, $methodName)) {
                    $controller->$methodName();
                    return;
                }
            }
        }
        
        echo "<h1>404 - صفحه یافت نشد</h1>";
    }
}
