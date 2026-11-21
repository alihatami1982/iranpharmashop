<?php
// app/Controllers/HomeController.php

namespace App\Controllers;

use App\Core\Controller;

class HomeController extends Controller {
    
    public function index() {
        // داده‌هایی که می‌خواهیم به ویو بفرستیم
        $data = [
            'title' => 'خوش آمدید به فروشگاه ایران',
            'description' => 'بهترین محصولات آرایشی و زیبایی را از ما تهیه کنید.'
        ];

        // فراخوانی فایل ویو با نام home
        $this->render('frontend/home', $data);
    }
}
