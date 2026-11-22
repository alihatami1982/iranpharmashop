<?php
namespace App\Core;

class Router {
    private $routes = [];

    // ثبت روت‌های GET
    public function get($uri, $handler) {
        $this->routes['GET'][$uri] = $handler;
    }

    // ثبت روت‌های POST
    public function post($uri, $handler) {
        $this->routes['POST'][$uri] = $handler;
    }

    public function dispatch($method, $uri) {
        // پاکسازی URI (حذف Query String مثل ?id=1)
        $uri = parse_url($uri, PHP_URL_PATH);
        
        // اگر کاربر در مسیر اصلی بود، به home هدایت شود
        if ($uri === '/public' || $uri === '/') {
            $uri = '/';
        }

        // حذف پیشوند مسیر پروژه از URI (مثلاً اگر پروژه در پوشه iran است)
        // این بخش را بر اساس تنظیمات خودتان در config.php تنظیم کنید
        $basePath = '/iran/public'; 
        if (strpos($uri, $basePath) === 0) {
            $uri = substr($uri, strlen($basePath));
        }

        // پیدا کردن روت مطابقت داده شده
        if (isset($this->routes[$method][$uri])) {
            $this->executeHandler($this->routes[$method][$uri]);
        } else {
            http_response_code(404);
            echo "404 - Page Not Found";
        }
    }

    private function executeHandler($handler) {
        // ساختار هندلر به این صورت است: 'App\Controllers\Admin\CategoryController@index'
        list($controllerName, $method) = explode('@', $handler);

        if (class_exists($controllerName)) {
            $controller = new $controllerName();
            if (method_exists($controller, $method)) {
                // اجرای متد کنترلر
                $controller->$method();
            } else {
                die("Method $method not found in $controllerName");
            }
        } else {
            die("Controller $controllerName not found");
        }
    }
}
