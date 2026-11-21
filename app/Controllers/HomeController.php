<?php
// app/Controllers/HomeController.php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Product; // اضافه کردن مدل محصول

class HomeController extends Controller {
    
    public function index() {
        $productModel = new Product();
        $products = $productModel->getAll(); // گرفتن لیست محصولات از دیتابیس

        $data = [
            'title' => 'خوش آمدید به فروشگاه ایران',
            'description' => 'بهترین محصولات آرایشی و زیبایی را از ما تهیه کنید.',
            'products' => $products // فرستادن محصولات به ویو
        ];

        $this->render('frontend/home', $data);
    }
}
