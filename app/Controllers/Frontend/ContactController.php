<?php
namespace App\Controllers\Frontend;

use App\Core\Controller;
use App\Core\Database;

class ContactController extends Controller {
    
    public function index() {
        // تولید توکن CSRF برای امنیت فرم
        if (empty($_SESSION['csrf_token'])) {
            $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
        }

        $data = [
            'title' => 'تماس با ما',
            'csrf_token' => $_SESSION['csrf_token'],
            'layout' => 'frontend/layouts/main'
        ];
        $this->render('frontend/contact/index', $data);
    }

    public function send() {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            header('Location: ' . BASE_URL . '/contact');
            exit;
        }

        // ۱. بررسی توکن CSRF برای جلوگیری از حملات Cross-Site Request Forgery
        if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== ($_SESSION['csrf_token'] ?? '')) {
            $_SESSION['error'] = "خطای امنیتی: درخواست نامعتبر است.";
            header('Location: ' . BASE_URL . '/contact');
            exit;
        }

        // ۲. دریافت و پاکسازی داده‌ها
        $name    = strip_tags(trim($_POST['name'] ?? ''));
        $phone   = strip_tags(trim($_POST['phone'] ?? ''));
        $email   = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
        $message = strip_tags(trim($_POST['message'] ?? ''));

        // ۳. اعتبارسنجی (Validation)
        $errors = [];
        if (empty($name)) $errors[] = "نام الزامی است.";
        if (empty($phone)) $errors[] = "شماره تماس الزامی است.";
        if (empty($message)) $errors[] = "متن پیام الزامی است.";
        if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "ایمیل وارد شده معتبر نیست.";
        }

        if (!empty($errors)) {
            $_SESSION['error'] = implode(' ', $errors);
            header('Location: ' . BASE_URL . '/contact');
            exit;
        }

        // ۴. ذخیره در دیتابیس
        try {
            $db = Database::getInstance()->getConnection();
            $stmt = $db->prepare("INSERT INTO messages (name, phone, email, message) VALUES (?, ?, ?, ?)");
            $stmt->execute([$name, $phone, $email, $message]);

            $_SESSION['success'] = "پیام شما با موفقیت ثبت شد.";
        } catch (\PDOException $e) {
            // در محیط واقعی این خطا را لاگ کنید و به کاربر پیام عمومی بدهید
            $_SESSION['error'] = "خطایی در ذخیره اطلاعات رخ داد.";
        }

        header('Location: ' . BASE_URL . '/contact');
        exit;
    }
}
