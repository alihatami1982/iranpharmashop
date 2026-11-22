<?php
// app/Controllers/AdminController.php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Product;

class AdminController extends Controller {

    // نمایش لیست محصولات در پنل ادمین
    public function index() {
        $productModel = new Product();
        $products = $productModel->getAll();

        // اضافه کردن پارامتر سوم برای فراخوانی هدر و فوتر ادمین
        $this->render('admin/products/index', [
            'title' => 'مدیریت محصولات - پنل ادمین',
            'products' => $products
        ], 'admin/layouts/admin'); // <--- این بخش را اضافه کنید
    }


    // نمایش فرم افزودن محصول
    public function create() {
        $data = ['title' => 'افزودن محصول'];
        // می‌گوییم از لایوت admin استفاده کن
        $this->render('admin/products/create', $data, 'admin/layouts/admin');
    }
    
    // ذخیره محصول ارسالی از فرم
    public function store() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'name' => $_POST['name'] ?? '',
                'description' => $_POST['description'] ?? '',
                'price' => $_POST['price'] ?? 0,
                'category' => $_POST['category'] ?? '',
                'image' => 'default.jpg' // موقتاً عکس پیش‌فرض
            ];

            $productModel = new Product();
            $productModel->create($data);

            // بعد از ذخیره، برگرد به لیست محصولات ادمین
            header('Location: ' . BASE_URL . '/admin/products');
            exit;
        }
    }
}
