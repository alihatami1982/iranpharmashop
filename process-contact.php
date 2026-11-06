<?php
/**
 * فایل: process-contact.php
 * وظیفه: پردازش امن فرم تماس با استفاده از PDO و رعایت تمامی ملاحظات امنیتی
 */

// ۱. تنظیمات اتصال به دیتابیس (با استفاده از PDO برای امنیت بالا)
$host    = 'localhost';
$db      = 'iran_db'; // نام دیتابیس پروژه ایران
$user    = 'root';
$pass    = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // فعال‌سازی گزارش خطاها
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // حالت دریافت داده‌ها
    PDO::ATTR_EMULATE_PREPARES   => false,                  // غیرفعال کردن شبیه‌سازی برای جلوگیری از SQL Injection
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    // در حالت عملیاتی، خطا را در فایل Log ذخیره کنید و به کاربر نمایش ندهید
    error_log($e->getMessage());
    header("Location: contact-us.php?status=error");
    exit;
}

// ۲. بررسی اینکه آیا درخواست از نوع POST است
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // ۳. دریافت داده‌ها و پاکسازی اولیه (Sanitization)
    // استفاده از trim برای حذف فاصله‌های اضافی از ابتدا و انتها
    $name    = isset($_POST['name']) ? trim($_POST['name']) : '';
    $email   = isset($_POST['email']) ? trim($_POST['email']) : '';
    $subject = isset($_POST['subject']) ? trim($_POST['subject']) : '';
    $message = isset($_POST['message']) ? trim($_POST['message']) : '';

    // ۴. اعتبارسنجی داده‌ها (Validation)
    $errors = [];

    if (empty($name) || mb_strlen($name) < 3) {
        $errors[] = "نام باید حداقل ۳ کاراکتر باشد.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "ایمیل وارد شده معتبر نیست.";
    }

    if (empty($subject)) {
        $errors[] = "موضوع نمی‌تواند خالی باشد.";
    }

    if (empty($message) || mb_strlen($message) < 10) {
        $errors[] = "متن پیام باید حداقل ۱۰ کاراکتر باشد.";
    }

    // اگر خطایی وجود داشت، کاربر را برگردان
    if (!empty($errors)) {
        header("Location: contact-us.php?status=error");
        exit;
    }

    // ۵. پاکسازی نهایی برای جلوگیری از XSS (Cross-Site Scripting)
    // این کار باعث می‌شود اگر کسی کد جاوااسکریپت در فرم نوشت، به صورت متن ساده ذخیره شود
    $name    = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
    $email   = filter_var($email, FILTER_SANITIZE_EMAIL);
    $subject = htmlspecialchars($subject, ENT_QUOTES, 'UTF-8');
    $message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');

    try {
        // ۶. ذخیره در دیتابیس با استفاده از Prepared Statements (جلوگیری قطعی از SQL Injection)
        $sql = "INSERT INTO contact_messages (name, email, subject, message) VALUES (:name, :email, :subject, :message)";
        $stmt = $pdo->prepare($sql);
        
        $stmt->execute([
            ':name'    => $name,
            ':email'   => $email,
            ':subject' => $subject,
            ':message' => $message
        ]);

        // ۷. (اختیاری) ارسال ایمیل به مدیر سایت
        // برای امنیت بیشتر، بهتر است از کتابخانه PHPMailer استفاده کنید.
        // در اینجا فقط ساختار کلی را می‌گوییم.
        
        /*
        $to = "admin@iran.ir";
        $email_subject = "پیام جدید از سایت ایران: " . $subject;
        $email_body = "نام: $name\nایمیل: $email\n\nپیام:\n$message";
        $headers = "From: webmaster@iran.ir";
        mail($to, $email_subject, $email_body, $headers);
        */

        // ۸. هدایت کاربر به صفحه موفقیت
        header("Location: contact-us.php?status=success");
        exit;

    } catch (\PDOException $e) {
        // ثبت خطا در سیستم برای بررسی بعداً
        error_log("Database Error: " . $e->getMessage());
        header("Location: contact-us.php?status=error");
        exit;
    }

} else {
    // اگر کسی مستقیماً فایل را باز کند
    header("Location: contact-us.php");
    exit;
}
