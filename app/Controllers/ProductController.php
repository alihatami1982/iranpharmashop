<?php

class ProductController extends Controller {

    public function index() {
        // ۱. اتصال به دیتابیس (فرض بر این است که در مدل یا کلاس پایه دارید)
        // در اینجا یک کوئری ساده برای گرفتن همه محصولات می‌زنیم
        $db = Database::connect(); // فرض بر اینکه کلاسی برای اتصال دارید
        $stmt = $db->prepare("SELECT * FROM products ORDER BY id DESC");
        $stmt->execute();
        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // ۲. آماده‌سازی داده‌ها برای ویو
        $data = [
            'title' => 'لیست محصولات',
            'products' => $products
        ];

        // ۳. رندر کردن ویو با لایوت ادمین
        // پارامتر اول: مسیر ویو، پارامتر دوم: داده‌ها، پارامتر سوم: لایوت ادمین
        // حتماً باید این پارامتر سوم را اضافه کنید تا هدر و فوتر لود شوند
        $this->render('admin/products/index', $data, 'admin/layouts/admin');
    }
}
