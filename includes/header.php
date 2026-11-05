<?php
// داده‌های نمونه؛ در نسخه نهایی می‌توان آن‌ها را از دیتابیس دریافت کرد.
$categories = [
    ['name' => 'آرایشی', 'icon' => '💄'],
    ['name' => 'مراقبت پوست', 'icon' => '🧴'],
    ['name' => 'مراقبت مو', 'icon' => '🧖'],
    ['name' => 'عطر و ادکلن', 'icon' => '🌸'],
    ['name' => 'بهداشت شخصی', 'icon' => '🫧'],
    ['name' => 'آقایان', 'icon' => '🧔'],
    ['name' => 'مادر و کودک', 'icon' => '🧸'],
    ['name' => 'لوازم برقی', 'icon' => '⚡'],
];

$products = [
    ['name' => 'کرم ضد آفتاب SPF 50', 'brand' => 'مراقبت پوست', 'price' => 429000, 'old_price' => 520000, 'discount' => 18, 'rating' => '۴.۸', 'image' => 'uploads/products/1.webp'],
    ['name' => 'شامپو تقویت‌کننده مو', 'brand' => 'مراقبت مو', 'price' => 285000, 'old_price' => 360000, 'discount' => 21, 'rating' => '۴.۷', 'image' => 'https://images.unsplash.com/photo-1608248543803-ba4f8c70ae0b?auto=format&fit=crop&w=700&q=85'],
    ['name' => 'کرم مرطوب‌کننده صورت', 'brand' => 'آبرسان و مرطوب‌کننده', 'price' => 335000, 'old_price' => 410000, 'discount' => 18, 'rating' => '۴.۹', 'image' => 'https://images.unsplash.com/photo-1608248543803-ba4f8c70ae0b?auto=format&fit=crop&w=700&q=85'],
    ['name' => 'رژ لب با ماندگاری بالا', 'brand' => 'آرایش لب', 'price' => 299000, 'old_price' => 390000, 'discount' => 23, 'rating' => '۴.۶', 'image' => 'https://images.unsplash.com/photo-1586495777744-4413f21062fa?auto=format&fit=crop&w=700&q=85'],
];

function toman($price) {
    return number_format($price, 0, '.', ',') . ' تومان';
}
?>
<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ایران | فروشگاه آرایشی و بهداشتی</title>
    <meta name="description" content="خرید محصولات آرایشی، بهداشتی و مراقبت پوست و مو از ایران">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
    <div class="topbar">
        <div class="container d-flex justify-content-center justify-content-lg-between align-items-center flex-wrap gap-2">
            <span><i class="bi bi-truck"></i> ارسال رایگان سفارش‌های بالای یک میلیون تومان</span>
            <span class="d-none d-lg-inline"><i class="bi bi-shield-check"></i> ضمانت اصالت کالا</span>
            <span class="d-none d-lg-inline"><i class="bi bi-arrow-repeat"></i> ۷ روز ضمانت بازگشت کالا</span>
        </div>
    </div>

    <header class="site-header sticky-top">
        <div class="container">
            <div class="header-main d-flex align-items-center gap-3">
                <button class="btn mobile-menu-btn d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu" aria-label="بازکردن منو">
                    <i class="bi bi-list fs-3"></i>
                </button>

                <a class="brand" href="#">
                    <!-- <span class="brand-mark"><i class="bi bi-journal-arrow-down"></i></span> -->
                    <img src="assets/img/logo.png" style="width: 50px" alt="">
                    <span><strong>ایران</strong><small>زیبایی، حق شماست</small></span>
                </a>

                <form class="search-box d-none d-md-flex flex-grow-1" action="#" method="get">
                    <i class="bi bi-search"></i>
                    <input type="search" name="q" class="form-control" placeholder="نام محصول، برند یا دسته‌بندی مورد نظر را جستجو کنید...">
                    <button type="submit" aria-label="جستجو"><i class="bi bi-arrow-left"></i></button>
                </form>

                <div class="header-actions ms-auto ms-lg-0 d-flex align-items-center gap-3">
                    <a href="#" class="header-action"><i class="bi bi-person"></i><span class="d-none d-xl-inline">ورود | ثبت‌نام</span></a>
                    <a href="#" class="header-action"><i class="bi bi-heart"></i><span class="d-none d-xl-inline">علاقه‌مندی</span></a>
                    <a href="#" class="header-action cart-link"><i class="bi bi-bag"></i><span class="d-none d-xl-inline">سبد خرید</span><b id="cartCount">0</b></a>
                </div>
            </div>

            <form class="search-box mobile-search d-md-none mb-3" action="#" method="get">
                <i class="bi bi-search"></i>
                <input type="search" name="q" class="form-control" placeholder="جستجوی محصولات...">
                <button type="submit" aria-label="جستجو"><i class="bi bi-arrow-left"></i></button>
            </form>

            <nav class="main-nav d-none d-lg-flex align-items-center">
                <a href="#" class="nav-all"><i class="bi bi-list"></i> دسته‌بندی کالاها</a>
                <?php foreach ($categories as $category): ?>
                    <a href="#categories"><?= htmlspecialchars($category['name']) ?></a>
                <?php endforeach; ?>
                <a href="#offers" class="nav-sale"><i class="bi bi-fire"></i> پیشنهادهای ویژه</a>
            </nav>
        </div>
    </header>

    <!-- منوی موبایل -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="mobileMenu">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title text-green fw-bold">ایران</h5>
            <button type="button" class="btn-close ms-0" data-bs-dismiss="offcanvas" aria-label="بستن"></button>
        </div>
        <div class="offcanvas-body d-flex flex-column gap-3">
            <?php foreach ($categories as $category): ?>
                <a href="#categories" class="mobile-nav-link"><?= $category['icon'] ?> <?= htmlspecialchars($category['name']) ?></a>
            <?php endforeach; ?>
            <a href="#offers" class="mobile-nav-link text-danger">🔥 پیشنهادهای ویژه</a>
        </div>
    </div>
