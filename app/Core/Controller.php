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

    // protected function render($view, $data = []) {
    //     extract($data);
    //     $viewPath = __DIR__ . '/../../views/' . $view . '.php';
    
    //     if (file_exists($viewPath)) {
    //         require_once $viewPath;
    //     } else {
    //         // این خط را موقتاً برای تست فعال کنید تا ببینید مسیر کجاست
    //         die("فایل پیدا نشد! مسیر جستجو شده: " . realpath(__DIR__ . '/../../') . '/views/' . $view . '.php');
    //     }
    // }


    // protected function render($view, $data = [], $layout = null) {
    //     // ۱. استخراج داده‌ها
    //     extract($data);
        
    //     // ۲. تعیین مسیر فایل ویو
    //     $viewPath = __DIR__ . '/../../views/' . $view . '.php';
    
    //     // اگر فایل ویو وجود نداشت، خطا بده
    //     if (!file_exists($viewPath)) {
    //         die("خطا: فایل ویو پیدا نشد: " . $viewPath);
    //     }
    
    //     // ۳. مدیریت لایوت (Header & Footer)
    //     if ($layout) {
    //         // اگر کاربر دستی لایوت را فرستاده (مثل حالت شما)
    //         $headerPath = __DIR__ . '/../../views/' . $layout . '_header.php';
    //         $footerPath = __DIR__ . '/../../views/' . $layout . '_footer.php';
    
    //         if (file_exists($headerPath)) {
    //             require_once $headerPath;
    //         } else {
    //             // اگر لایوت فرستاده شده ولی فایل هدر وجود ندارد، فقط هشدار بده
    //             error_log("Warning: Header layout not found: $headerPath");
    //         }
    
    //         // لود کردن خودِ صفحه اصلی
    //         require_once $viewPath;
    
    //         if (file_exists($footerPath)) {
    //             require_once $footerPath;
    //         }
    //     } else {
    //         // اگر لایوتی فرستاده نشده بود، فقط خود فایل را لود کن
    //         require_once $viewPath;
    //     }
    // }

    protected function render($view, $data = [], $layout = null) {
        // ۱. استخراج داده‌ها برای استفاده در View
        extract($data);
    
        // ۲. ساخت مسیر کامل فایل ویو
        // فرض می‌کنیم فایل‌های ویو در پوشه views هستند
        $viewPath = __DIR__ . '/../../views/' . $view . '.php';
    
        // اگر فایل ویو وجود نداشت، خطا بده
        if (!file_exists($viewPath)) {
            die("خطا: فایل ویو پیدا نشد: " . $viewPath);
        }
    
        // ۳. شروع عملیات نمایش
        if ($layout) {
            // اگر لایوت مشخص شده بود (مثلاً 'admin/layouts/admin')
            // ما باید هدر و فوتر را بر اساس آن بسازیم
            $headerPath = __DIR__ . '/../../views/' . $layout . '_header.php';
            $footerPath = __DIR__ . '/../../views/' . $layout . '_footer.php';
    
            // نمایش هدر
            if (file_exists($headerPath)) {
                require_once $headerPath;
            } else {
                // اگر هدر پیدا نشد، یک متن ساده برای تست نمایش بده
                echo "<!-- Error: Header not found at: $headerPath -->";
            }
    
            // نمایش محتوای اصلی صفحه
            require_once $viewPath;
    
            // نمایش فوتر
            if (file_exists($footerPath)) {
                require_once $footerPath;
            } else {
                echo "<!-- Error: Footer not found at: $footerPath -->";
            }
    
        } else {
            // اگر هیچ لایوتی داده نشده بود، فقط خود فایل ویو را لود کن
            require_once $viewPath;
        }
    }
    

    
}
