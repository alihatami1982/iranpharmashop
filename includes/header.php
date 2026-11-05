<?php
// تعریف آدرس پایه سایت
define('SITE_URL', 'http://localhost/iran/');
?>

<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title : 'فروشگاه اینترنتی'; ?></title>
    <!-- Bootstrap 5 RTL CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom Style -->
    <link rel="stylesheet" href="<?= SITE_URL; ?>assets/css/style.css">

</head>
<body class="bg-light">

    <!-- Top Bar -->
    <div class="bg-dark text-white text-center py-2 small">
        <span>ارسال رایگان برای خریدهای بالای ۵۰۰ هزار تومان</span>
    </div>

<!-- Main Header -->
<header class="bg-white shadow-sm sticky-top">
        <div class="container py-3">
            <div class="row align-items-center">
                <!-- Logo -->
                <div class="col-md-3 text-center text-md-start mb-2 mb-md-0">
                    <a href="#" class="text-decoration-title fs-3 fw-bold text-danger">ایران</a>
                </div>
                <!-- Search Bar -->
                <div class="col-md-6 mb-2 mb-md-0">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="جستجو در محصولات آرایشی، بهداشتی...">
                        <button class="btn btn-danger px-4" type="button"><i class="fa fa-search"></i></button>
                    </div>
                </div>
                <!-- User Actions -->
                <div class="col-md-3 text-center text-md-end">
                    <a href="#" class="btn btn-outline-secondary btn-sm me-2"><i class="fa fa-user me-1"></i> ورود / ثبت‌نام</a>
                    <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-shopping-cart me-1"></i> سبد خرید</a>
                </div>
            </div>
        </div>
        <!-- Navigation Menu -->
        <nav class="border-top py-2 d-none d-md-block">
            <div class="container">
                <ul class="nav justify-content-start gap-4 fw-medium text-secondary">
                    <li class="nav-item"><a class="nav-link text-dark" href="#">پیشنهاد شگفت‌انگیز</a></li>
                    <li class="nav-item"><a class="nav-link text-dark" href="#">مراقبت پوست</a></li>
                    <li class="nav-item"><a class="nav-link text-dark" href="#">مراقبت مو</a></li>
                    <li class="nav-item"><a class="nav-link text-dark" href="#">آرایش لب و صورت</a></li>
                    <li class="nav-item"><a class="nav-link text-dark" href="#">عطر و ادکلن</a></li>
                    <li class="nav-item"><a class="nav-link text-dark" href="#">مکمل‌های ورزشی</a></li>
                </ul>
            </div>
        </nav>
    </header>
