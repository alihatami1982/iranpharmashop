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

    <main>
    <section class="section-space">
        
           
        
        <div class="container contact-container">
            <div class="row g-4">
                <!-- ستون سمت راست: اطلاعات تماس -->
                <div class="col-lg-4">
                    <div class="card p-4 h-100">
                        <h3 class="mb-4">اطلاعات تماس</h3>
                        <p class="text-muted mb-5">ما آماده پاسخگویی به سوالات شما هستیم.</p>

                        <div class="info-item">
                            <div class="contact-info-icon"><i class="bi bi-telephone"></i></div>
                            <div>
                                <small class="text-muted d-block">تلفن تماس</small>
                                <strong>۰۲۱-۱۲۳۴۵۶۷۸</strong>
                            </div>
                        </div>

                        <div class="info-item">
                            <div class="contact-info-icon"><i class="bi bi-whatsapp"></i></div>
                            <div>
                                <small class="text-muted d-block">واتس‌اپ</small>
                                <strong>۰۹۱۲۳۴۵۶۷۸۹</strong>
                            </div>
                        </div>

                        <div class="info-item">
                            <div class="contact-info-icon"><i class="bi bi-envelope"></i></div>
                            <div>
                                <small class="text-muted d-block">ایمیل</small>
                                <strong>info@iran.ir</strong>
                            </div>
                        </div>

                        <div class="info-item">
                            <div class="contact-info-icon"><i class="bi bi-geo-alt"></i></div>
                            <div>
                                <small class="text-muted d-block">آدرس</small>
                                <strong>تهران، خیابان اصلی، پلاک ۱</strong>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ستون سمت چپ: فرم تماس -->
                <div class="col-lg-8">
                    <div class="card p-4">
                        <h3 class="mb-4">ارسال پیام مستقیم</h3>

                        <!-- نمایش پیام‌های سیستم -->
                        <?php if(isset($_GET['status'])): ?>
                            <?php if($_GET['status'] == 'success'): ?>
                                <div class="alert alert-success d-flex align-items-center" role="alert">
                                    <i class="bi bi-check-circle-fill me-2"></i>
                                    <div>پیام شما با موفقیت ارسال شد.</div>
                                </div>
                            <?php elseif($_GET['status'] == 'error'): ?>
                                <div class="alert alert-danger d-flex align-items-center" role="alert">
                                    <i class="bi bi-exclamation-triangle-fill me-2"></i>
                                    <div>خطایی رخ داده است. لطفا اطلاعات را درست وارد کنید.</div>
                                </div>
                            <?php endif; ?>
                        <?php endif; ?>

                        <form action="process-contact.php" method="POST">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">نام و نام خانوادگی</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-person"></i></span>
                                        <input type="text" class="form-control" name="name" required>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">ایمیل</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                        <input type="email" class="form-control" name="email" required>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">موضوع</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-chat-left-text"></i></span>
                                    <input type="text" class="form-control" name="subject" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">متن پیام</label>
                                <textarea class="form-control" name="message" rows="5" required></textarea>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-send">
                                    <i class="bi bi-send-fill me-2"></i> ارسال پیام
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
            <div class="col-12 pt-4">
                    <!-- بخش نقشه -->
                    <div class="card p-2">
                        <div class="ratio ratio-21x9"> 
                            <!-- کلاس ratio در بوت‌استرپ باعث می‌شود نقشه ریسپانسیو (واکنش‌گرا) باشد -->
                            <iframe 
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.461043134434!2d51.38902767632416!3d35.70125337272545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b0cbf19d2e11417%3A0x3636f80f8d51333!2sTehran%2C%20Iran!5e0!3m2!1sen!2s!4v1690000000000!5m2!1sen!2s" 
                                style="border:0;" 
                                allowfullscreen="" 
                                loading="lazy" 
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

       
    </main>

    <footer class="site-footer">
        <div class="container">
            <div class="row g-4 py-5">
                <div class="col-lg-4">
                    <a class="footer-brand" href="#"><i class="bi bi-leaf-fill"></i> ایران</a>
                    <p class="footer-about">همراه شما برای انتخاب بهترین محصولات آرایشی، بهداشتی و مراقبتی؛ با تجربه خریدی آسان و مطمئن.</p>
                    <div class="social-links"><a href="#"><i class="bi bi-instagram"></i></a><a href="#"><i class="bi bi-telegram"></i></a><a href="#"><i class="bi bi-whatsapp"></i></a></div>
                </div>
                <div class="col-6 col-lg-2"><h4>دسترسی سریع</h4><a href="#products">فروشگاه</a><a href="#offers">پیشنهادهای ویژه</a><a href="#">درباره ما</a><a href="#">تماس با ما</a></div>
                <div class="col-6 col-lg-2"><h4>خدمات مشتریان</h4><a href="#">راهنمای خرید</a><a href="#">رویه ارسال سفارش</a><a href="#">شرایط بازگشت کالا</a><a href="#">سوالات متداول</a></div>
                <div class="col-lg-4"><h4>عضویت در خبرنامه</h4><p class="footer-about">از جدیدترین تخفیف‌ها و محصولات باخبر شو.</p><form class="newsletter"><input type="email" placeholder="آدرس ایمیل شما"><button type="submit" aria-label="عضویت"><i class="bi bi-send"></i></button></form></div>
            </div>
            <div class="footer-bottom">تمامی حقوق این وب‌سایت برای ایران محفوظ است.</div>
        </div>
    </footer>

    <button id="backToTop" class="back-to-top" aria-label="بازگشت به بالا"><i class="bi bi-arrow-up"></i></button>
    <div class="toast-container position-fixed bottom-0 start-0 p-3">
        <div id="cartToast" class="toast text-bg-success border-0" role="alert">
            <div class="d-flex"><div class="toast-body">محصول به سبد خرید اضافه شد.</div><button type="button" class="btn-close btn-close-white ms-2 m-auto" data-bs-dismiss="toast"></button></div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>
</html>
