<?php
namespace App\Core;

use PDO;
use PDOException;

class Database {
    private static $instance = null;
    private $connection;

    // کانفیگ دیتابیس (اگر در فایل config.php تعریف کردید، از آنجا بخوانید)
    private $host = 'localhost';
    private $dbname = 'iran';
    private $username = 'root';
    private $password = '';

    // سازنده باید private باشد تا از بیرون ساخته نشود
    private function __construct() {
        try {
            $this->connection = new PDO(
                "mysql:host={$this->host};dbname={$this->dbname};charset=utf8mb4",
                $this->username,
                $this->password
            );
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Connection Error: " . $e->getMessage());
        }
    }

    // این همان متدی است که در کنترلر صدا زدید
    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    // متدی برای گرفتن شیء PDO
    public function getConnection() {
        return $this->connection;
    }

    // جلوگیری از کپی شدن شیء
    public function __clone() {}
    public function __wakeup() {}
}
