<?php
// app/Core/Controller.php

namespace App\Core;

class Controller {
    // متدی برای فراخوانی فایل‌های ویو (View)
    // protected function render($view, $data = []) {
    //     // استخراج آرایه دیتا برای اینکه در فایل HTML مستقیم استفاده کنی
    //     extract($data);
        
    //     // مسیر ویو را مشخص می‌کنیم
    //     $viewPath = __DIR__ . '/../../views/' . $view . '.php';

    //     if (file_exists($viewPath)) {
    //         require_once $viewPath;
    //     } else {
    //         die("خطا: فایل ویو یافت نشد: " . $view);
    //     }
    // }

    protected function render($view, $data = []) {
        extract($data);
        $viewPath = __DIR__ . '/../../views/' . $view . '.php';
    
        if (file_exists($viewPath)) {
            require_once $viewPath;
        } else {
            // این خط را موقتاً برای تست فعال کنید تا ببینید مسیر کجاست
            die("فایل پیدا نشد! مسیر جستجو شده: " . realpath(__DIR__ . '/../../') . '/views/' . $view . '.php');
        }
    }
    
}
