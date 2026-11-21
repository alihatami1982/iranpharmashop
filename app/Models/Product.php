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
}
