<?php
// app/Models/Product.php

namespace App\Models;

use App\Core\Database;

class Product {
    private $db;

    public function __construct() {
        // اتصال به دیتابیس از طریق کلاس Database که قبلاً ساختیم
        $this->db = Database::getInstance();
    }

    // متدی برای گرفتن همه محصولات
    public function getAll() {
        $stmt = $this->db->prepare("SELECT * FROM products");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    // متدی برای درج محصول جدید در دیتابیس
    public function create($data) {
        $stmt = $this->db->prepare("INSERT INTO products (name, description, price, image, category) VALUES (:name, :description, :price, :image, :category)");
        return $stmt->execute([
            'name' => $data['name'],
            'description' => $data['description'],
            'price' => $data['price'],
            'image' => $data['image'] ?? 'default.jpg', // اگر عکسی نبود پیش‌فرض بگذارد
            'category' => $data['category']
        ]);
    }
    
}
