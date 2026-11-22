<?php
namespace App\Controllers\Admin;

use App\Core\Controller;
use App\Models\Category;

class CategoryController extends Controller {
    
    public function index() {
        $categoryModel = new Category();
        $categories = $categoryModel->getAll();

        // ارسال داده‌ها به ویو با استفاده از متد رندر کلاس پایه
        $this->render('admin/categories/index', [
            'title' => 'مدیریت دسته‌بندی‌ها',
            'categories' => $categories
        ], 'admin/layouts/admin');
    }
}
