<?php
// public/index.php

// ۱. فعال‌سازی Autoloading برای کلاس‌های ما
spl_autoload_register(function ($class) {
    $prefix = 'App\\';
    $base_dir = __DIR__ . '/../app/';
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) return;
    $relative_class = substr($class, $len);
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';
    if (file_exists($file)) require $file;
});

use App\Core\Router;

// ۲. شروع روتینگ
$router = new Router();

// ۳. تعریف مسیرها
$router->add('home', \App\Controllers\HomeController::class, 'index');

// ۴. استخراج خودکار و تمیز URI بدون وابستگی به نام پوشه
$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$scriptName = dirname($_SERVER['SCRIPT_NAME']); // مسیر پوشه public را خودکار می‌گیرد

// حذف مسیر پایه از اواسط URI
$requestUri = str_replace($scriptName, '', $requestUri);

// اجرای روتینگ
$router->dispatch($requestUri);
