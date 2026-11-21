<?php
// شروع سشن برای ذخیره جواب کپچا
session_start();

// اگر کپچا تنظیم نشده یا فرم تازه لود شده است، دو عدد تصادفی بین ۱ تا ۹ بساز
if (!isset($_SESSION['captcha_num1']) || !isset($_SESSION['captcha_num2'])) {
    $_SESSION['captcha_num1'] = rand(1, 9);
    $_SESSION['captcha_num2'] = rand(1, 9);
}

$num1 = $_SESSION['captcha_num1'];
$num2 = $_SESSION['captcha_num2'];
$captcha_question = "$num1 + $num2";

// بررسی ارسال فرم (اختیاری: اگر پردازش فرم در همین صفحه انجام شود یا به process-login.php برود)
$error_message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_captcha = trim($_POST['captcha'] ?? '');
    $correct_answer = $num1 + $num2;

    if (empty($user_captcha) || intval($user_captcha) !== $correct_answer) {
        $error_message = 'حاصل جمع کپچا اشتباه است. لطفاً دوباره تلاش کنید.';
        // ساخت مجدد اعداد برای امنیت بیشتر پس از خطای کاربر
        $_SESSION['captcha_num1'] = rand(1, 9);
        $_SESSION['captcha_num2'] = rand(1, 9);
    } else {
        // کپچا درست است، حالا می‌توانید اطلاعات موبایل و رمز عبور را بررسی یا به process-login.php ارسال کنید
        // هدایت یا پردازش اصلی...
    }
}
?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ورود به فروشگاه ایران</title>
    <!-- Bootstrap 5 RTL CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Tahoma, sans-serif;
        }
        .login-card {
            max-width: 420px;
            margin: 60px auto;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            border: none;
        }
        .btn-success-custom {
            background-color: #198754;
            border-color: #198754;
        }
        .btn-success-custom:hover {
            background-color: #157347;
            border-color: #146c43;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="card login-card p-4 bg-white">
        <div class="text-center mb-4">
            <h3 class="fw-bold text-success">فروشگاه ایران</h3>
            <p class="text-muted small">لطفاً برای ورود شماره موبایل و رمز عبور خود را وارد کنید.</p>
        </div>

        <?php if (!empty($error_message)): ?>
            <div class="alert alert-danger py-2 small" role="alert">
                <i class="bi bi-exclamation-triangle-fill me-1"></i> <?= $error_message ?>
            </div>
        <?php endif; ?>

        <!-- فرم ورود -->
        <form action="process-login.php" method="POST">
            
            <!-- شماره موبایل -->
            <div class="mb-3">
                <label for="mobile" class="form-label small fw-bold">شماره موبایل</label>
                <div class="input-group">
                    <span class="input-group-text bg-light"><i class="bi bi-phone"></i></span>
                    <input type="text" class="form-control" id="mobile" name="mobile" placeholder="09123456789" pattern="09[0-9]{9}" maxlength="11" required>
                </div>
            </div>

            <!-- رمز عبور -->
            <div class="mb-3">
                <label for="password" class="form-label small fw-bold">رمز عبور</label>
                <div class="input-group">
                    <span class="input-group-text bg-light"><i class="bi bi-lock"></i></span>
                    <input type="password" class="form-control" id="password" name="password" placeholder="••••••••" required>
                    <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                        <i class="bi bi-eye"></i>
                    </button>
                </div>
            </div>

            <!-- بخش کپچای ریاضی -->
            <div class="mb-4">
                <label for="captcha" class="form-label small fw-bold">کد امنیتی: حاصل جمع <span class="text-danger fw-bold dir-ltr" style="display:inline-block;"><?= $captcha_question ?></span> چقدر می‌شود؟</label>
                <div class="input-group">
                    <span class="input-group-text bg-light"><i class="bi bi-shield-check text-success"></i></span>
                    <input type="number" class="form-control" id="captcha" name="captcha" placeholder="جواب را وارد کنید" required>
                </div>
            </div>

            <!-- دکمه ورود -->
            <button type="submit" class="btn btn-success-custom w-100 text-white py-2 fw-bold">ورود به حساب کاربری</button>
        </form>
    </div>
</div>

<!-- اسکریپت نمایش/مخفی کردن رمز عبور -->
<script>
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#password');

    togglePassword.addEventListener('click', function () {
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        this.querySelector('i').classList.toggle('bi-eye');
        this.querySelector('i').classList.toggle('bi-eye-speciale'); // یا bi-eye-slash
        this.querySelector('i').classList.toggle('bi-eye-slash');
    });
</script>

</body>
</html>
