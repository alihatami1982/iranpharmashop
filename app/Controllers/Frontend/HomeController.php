<?php
namespace App\Controllers\Frontend;

use App\Core\Controller;
use App\Core\Database;

class HomeController extends Controller {

    public function index() {
        $db = Database::getInstance()->getConnection();
        
        // گرفتن دسته‌بندی‌ها برای منوی کناری یا بالا
        $catStmt = $db->query("SELECT * FROM categories");
        $categories = $catStmt->fetchAll(\PDO::FETCH_ASSOC);

        // گرفتن آخرین محصولات برای نمایش در صفحه اصلی
        $prodStmt = $db->query("SELECT * FROM products ORDER BY id DESC LIMIT 8");
        $products = $prodStmt->fetchAll(\PDO::FETCH_ASSOC);

        $data = [
            'title' => 'صفحه اصلی | فروشگاه ایران',
            'categories' => $categories,
            'products' => $products
        ];

        // رندر کردن با لایوت فرانت‌اند
        // $this->render('frontend/home/index', $data, 'frontend/layouts/header', 'frontend/layouts/footer');
        $this->render('frontend/home/index', $data, 'frontend/layouts/main');

    }
}
