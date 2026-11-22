<?php
namespace App\Controllers\Admin;

use App\Core\Database;
use App\Core\Controller;
use App\Models\Category; // اگر مدل ساخته‌اید

class CategoryController extends Controller {

    public function index() {
        $db = Database::getInstance()->getConnection();
        $stmt = $db->query("SELECT * FROM categories ORDER BY id DESC");
        $categories = $stmt->fetchAll(\PDO::FETCH_ASSOC);

        $data = ['title' => 'لیست دسته‌بندی‌ها', 'categories' => $categories];
        $this->render('admin/categories/index', $data, 'admin/layouts/admin');
    }

    // نمایش فرم ایجاد دسته جدید
    public function create() {
        // ۱. گرفتن تمام دسته‌ها برای پر کردن لیست "دسته والد"
        $db = Database::getInstance()->getConnection();
        $stmt = $db->query("SELECT id, name FROM categories ORDER BY name ASC");
        $all_categories = $stmt->fetchAll(\PDO::FETCH_ASSOC);

        $data = [
            'title' => 'افزودن دسته‌بندی جدید',
            'categories' => $all_categories // ارسال لیست به ویو
        ];
        $this->render('admin/categories/create', $data, 'admin/layouts/admin');
    }

    // ذخیره داده‌ها در دیتابیس
    public function store() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = trim($_POST['name']);
            $parent_id = !empty($_POST['parent_id']) ? $_POST['parent_id'] : 0;
    
            // اصلاح تولید اسلاگ:
            // ابتدا سعی می‌کنیم اسلاگ لاتین بسازیم
            $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $name)));
    
            // اگر اسلاگ خالی بود یا فقط شامل علامت بود (به دلیل فارسی بودن نام)، 
            // از خود نام استفاده می‌کنیم تا تداخل ایجاد نشود
            if (empty($slug) || $slug === '-') {
                $slug = $name; 
            }
    
            $db = Database::getInstance()->getConnection();
            
            try {
                $stmt = $db->prepare("INSERT INTO categories (name, slug, parent_id) VALUES (?, ?, ?)");
                $stmt->execute([$name, $slug, $parent_id]);
    
                header("Location: " . BASE_URL . "/admin/categories");
                exit;
            } catch (\PDOException $e) {
                // اگر باز هم اسلاگ تکراری بود (مثلاً دو دسته با نام دقیق یکسان)
                if ($e->getCode() == 23000) {
                    die("خطا: این نام یا اسلاگ قبلاً ثبت شده است.");
                } else {
                    die("خطای دیتابیس: " . $e->getMessage());
                }
            }
        }
    }
    
}
