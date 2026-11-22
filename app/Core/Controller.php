<?php
namespace App\Core;

class Controller {
    /**
     * رندر کردن ویوها
     * @param string $view مسیر ویو (مثلاً 'admin/categories/index')
     * @param array $data داده‌هایی که به ویو پاس داده می‌شوند
     * @param string $layout لایه اصلی (مثلاً 'admin/layouts/admin')
     */
    protected function render(string $view, array $data = [], string $layout = 'frontend/layouts/main') {
        // استخراج داده‌ها به صورت متغیر در ویو (مثل $categories)
        extract($data);

        // مسیر کامل فایل ویو
        $viewFile = VIEW_PATH . '/' . $view . '.php';
        $layoutFile = VIEW_PATH . '/' . $layout . '.php';

        if (!file_exists($viewFile)) {
            die("View file not found: $viewFile");
        }

        // شروع با لایه اصلی (Layout)
        ob_start();
        include $viewFile;
        $content = ob_get_clean();

        include $layoutFile;
    }
}
