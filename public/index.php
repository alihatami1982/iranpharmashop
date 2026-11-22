<?php
// جلوگیری از دسترسی مستقیم به فایل‌ها
define('ROOT_PATH', dirname(__DIR__));
define('VIEW_PATH', ROOT_PATH . '/app/Views');

// لود کردن Autoloader تولید شده توسط Composer
require_once ROOT_PATH . '/vendor/autoload.php';

// لود کردن تنظیمات (ثابت‌ها مثل BASE_URL)
require_once ROOT_PATH . '/config/config.php';

use App\Core\Router;

// شروع عملیات مسیریابی
$router = new Router();

// در اینجا روت‌ها را فراخوانی می‌کنیم (در مراحل بعد این بخش را از فایل جدا می‌کنیم)
require_once ROOT_PATH . '/routes/web.php'; 

// اجرای روتر بر اساس درخواست کاربر
$router->dispatch($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);
