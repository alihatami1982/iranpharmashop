session_start();
if (!isset($_POST['captcha']) || intval($_POST['captcha']) !== ($_SESSION['captcha_num1'] + $_SESSION['captcha_num2'])) {
    // خطا: کپچا اشتباه است
    header('Location: login.php?error=invalid_captcha');
    exit;
}
// بعد از تایید موفق، برای جلوگیری از استفاده مجدد از یک کپچا، آن را پاک کنید:
unset($_SESSION['captcha_num1']);
unset($_SESSION['captcha_num2']);
