<!doctype html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta name="theme-color" content="#075c3b">
    <title>پنل مدیریت فروشگاه | سبزپنل</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <?php

define('BASE_URL', 'http://localhost/iran/public');

// require_once '../../../../config/config.php'; // حتما مسیر درست فایل کانفیگ را بدهید


?>
    

    <link rel="stylesheet" href="<?= BASE_URL; ?>/assets/css/admin_style.css">

</head>

<body>


    
<div class="layout">
        <aside class="sidebar" id="sidebar">
            <div class="brand">
                <div class="brand-mark">س</div>
                <div><b>سبزپنل</b><small>مدیریت فروشگاه زیبایی</small></div><button class="mobile-close"
                    onclick="closeMenu()" aria-label="بستن منو">✕</button>
            </div>
            <div class="nav-label">مدیریت فروشگاه</div>
            <nav class="nav" id="nav">
                <a href="#dashboard" data-page="dashboard" class="active"><span class="ico">▦</span>داشبورد</a><a
                    href="#products" data-page="products"><span class="ico">▣</span>محصولات <span
                        class="count">۱۲۸</span></a><a href="#categories" data-page="categories"><span
                        class="ico">▤</span>دسته‌بندی‌ها</a><a href="#orders" data-page="orders"><span
                        class="ico">🛍</span>سفارش‌ها <span class="count">۱۲</span></a><a href="#customers"
                    data-page="customers"><span class="ico">♙</span>مشتریان</a><a href="#inventory"
                    data-page="inventory"><span class="ico">▥</span>مدیریت انبار</a><a href="#discounts"
                    data-page="discounts"><span class="ico">٪</span>تخفیف‌ها</a><a href="#reports"
                    data-page="reports"><span class="ico">▧</span>گزارش‌ها</a>
            </nav>
            <div class="nav-label">امور تکمیلی</div>
            <nav class="nav">
                <a href="#brands" data-page="brands"><span class="ico">✦</span>مدیریت برندها</a>
                <a href="#suppliers" data-page="suppliers"><span class="ico">♧</span>تأمین‌کنندگان</a>
                <a href="#reviews" data-page="reviews"><span class="ico">☆</span>نظرات و امتیازها <span
                        class="count">۷</span></a>
                <a href="#returns" data-page="returns"><span class="ico">↩</span>مرجوعی‌ها</a>
                <a href="#shipping" data-page="shipping"><span class="ico">🚚</span>روش‌های ارسال</a>
                <a href="#payments" data-page="payments"><span class="ico">▤</span>درگاه‌های پرداخت</a>
                <a href="#content" data-page="content"><span class="ico">▧</span>محتوای سایت</a>
                <a href="#staff" data-page="staff"><span class="ico">♙</span>کاربران و دسترسی‌ها</a>
            </nav>
            <div class="nav-label">سایر</div>
            <nav class="nav"><a href="#settings" data-page="settings"><span class="ico">⚙</span>تنظیمات فروشگاه</a><a
                    href="#support" data-page="support"><span class="ico">ⓘ</span>پشتیبانی</a></nav>
            <div class="side-bottom">
                <div class="profile">
                    <div class="avatar">م</div>
                    <div><b>مدیر فروشگاه</b><small>دسترسی مدیر کل</small></div>
                </div>
            </div>
        </aside>
        <div class="overlay" id="overlay" onclick="closeMenu()"></div>
        <main class="main">