<?php
namespace App\Controllers\Admin;

use App\Core\Database; // این خط بسیار مهم است
use App\Core\Controller;
use App\Models\Product; // یا مدل مربوطه
use PDO; // این خط را اضافه کنید


class ProductController extends Controller {

    // لیست محصولات
    public function index() {
        $db = Database::getInstance()->getConnection();
        $stmt = $db->prepare("SELECT * FROM products ORDER BY id DESC");
        $stmt->execute();
        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $data = [
            'title' => 'لیست محصولات',
            'products' => $products
        ];

        $this->render('admin/products/index', $data, 'admin/layouts/admin');
    }

    // --- متد جدید برای نمایش فرم ساخت محصول ---
    public function create() {
        $data = [
            'title' => 'افزودن محصول جدید'
        ];

        // نمایش ویوی فرم (مسیر فایل ویو را چک کنید که درست باشد)
        // فرض بر این است که فایل ویو شما در admin/products/create.php قرار دارد
        $this->render('admin/products/create', $data, 'admin/layouts/admin');
    }

    // متد برای ذخیره سازی (که در روت‌ها تعریف کردیم)
    public function store() {
        // بعداً اینجا کد ذخیره در دیتابیس را می‌نویسیم
    }

    // متد برای حذف
    public function delete($id) {
        // بعداً اینجا کد حذف را می‌نویسیم
    }
}

