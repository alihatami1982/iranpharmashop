<?php
namespace App\Models;

use App\Core\Database;
use PDO;

class Category {
    private $db;

    public function __construct() {
        // دریافت اتصال PDO از طریق کلاس Database
        $this->db = Database::connect();
    }

    public function getAll() {
        $stmt = $this->db->prepare("SELECT * FROM categories ORDER BY id DESC");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function create($name, $slug) {
        $stmt = $this->db->prepare("INSERT INTO categories (name, slug) VALUES (?, ?)");
        return $stmt->execute([$name, $slug]);
    }

    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM categories WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
