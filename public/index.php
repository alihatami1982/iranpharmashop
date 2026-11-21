<?php
// public/index.php

// ۱. فعال‌سازی Autoloading برای کلاس‌های ما
spl_autoload_register(function ($class) {
    $prefix = 'App\\';
    $base_dir = __DIR__ . '/../app/';
    
    // بررسی اینکه آیا کلاس با پیشوند App شروع می‌شود یا خیر
    if (strpos($class, $prefix) !== 0) {
        return;
    }

    $relative_class = substr($class, strlen($prefix));
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';
    
    if (file_exists($file)) {
        require $file;
    }
});

use App\Core\Router;

// ۲. شروع روتینگ
$router = new Router();

// ۳. تعریف مسیرها
$router->add('home', 'HomeController@index');
$router->add('admin/products', 'AdminController@index');
$router->add('admin/products/create', 'AdminController@create');
$router->add('admin/products/store', 'AdminController@store');

// ۴. استخراج خودکار و تمیز URI
// ۴. استخراج خودکار و تمیز URI
// اولویت اول: اگر پارامتر url در آدرس بود (مثلاً ?url=admin/products/create)
// اولویت دوم: استفاده از مسیر فیزیکی فایل (URI)
if (isset($_GET['url'])) {
    $requestUri = $_GET['url'];
} else {
    $requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $scriptName = dirname($_SERVER['SCRIPT_NAME']); 
    $requestUri = str_replace($scriptName, '', $requestUri);
}

// پاکسازی اسلش‌های اضافی از ابتدا و انتها
$requestUri = trim($requestUri, '/');

// اگر مسیر خالی بود، به home برود
if (empty($requestUri)) {
    $requestUri = 'home';
}


// // --- بخش عیب‌یابی (Debug Section) ---
// echo "<h3 style='color:blue;'>Debug Info:</h3>";
// echo "<b style='color:red;'>Current Request URI:</b> " . htmlspecialchars($requestUri) . "<br><br>";

// // استفاده از Reflection برای دسترسی به متغیر protected routes
// try {
//     $reflection = new ReflectionClass($router);
//     $property = $reflection->getProperty('routes');
//     $property->setAccessible(true);
//     $routes = $property->getValue($router);

//     echo "<b style='color:green;'>Registered Routes in Router:</b><pre>";
//     print_r($routes);
//     echo "</pre>";
// } catch (Exception $e) {
//     echo "Error accessing routes: " . $e->getMessage();
// }

// die("<br><hr><b>DEBUG MODE ACTIVE - Check the output above.</b>");
// ------------------------------------

// اجرای روتینگ (در حالت دیباگ اجرا نمی‌شود)
$router->dispatch($requestUri);
