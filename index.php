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
    ['name' => 'کرم ضد آفتاب SPF 50', 'brand' => 'مراقبت پوست', 'price' => 429000, 'old_price' => 520000, 'discount' => 18, 'rating' => '۴.۸', 'image' => 'https://images.unsplash.com/photo-1556229010-6c3f2c9ca5f8?auto=format&fit=crop&w=700&q=85'],
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
    <title>سبزکالا | فروشگاه آرایشی و بهداشتی</title>
    <meta name="description" content="خرید محصولات آرایشی، بهداشتی و مراقبت پوست و مو از سبزکالا">
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
                    <span class="brand-mark"><i class="bi bi-leaf-fill"></i></span>
                    <span><strong>سبزکالا</strong><small>زیبایی، حق شماست</small></span>
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
            <h5 class="offcanvas-title text-green fw-bold">سبزکالا</h5>
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
        <section class="container hero-wrap mt-4">
            <div id="heroSlider" class="carousel slide hero-slider" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#heroSlider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="اسلاید اول"></button>
                    <button type="button" data-bs-target="#heroSlider" data-bs-slide-to="1" aria-label="اسلاید دوم"></button>
                    <button type="button" data-bs-target="#heroSlider" data-bs-slide-to="2" aria-label="اسلاید سوم"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="hero-slide hero-one">
                            <div class="hero-content">
                                <span class="eyebrow">تجربه‌ای تازه از زیبایی</span>
                                <h1>زیبایی از انتخاب درست شروع می‌شود</h1>
                                <p>محصولات مراقبت پوست و مو با پیشنهادهای ویژه</p>
                                <a href="#products" class="btn btn-green">مشاهده محصولات <i class="bi bi-arrow-left"></i></a>
                            </div>
                            <div class="hero-image">
                                <img src="https://images.unsplash.com/photo-1608248543803-ba4f8c70ae0b?auto=format&fit=crop&w=1000&q=90" alt="محصولات مراقبت پوست">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="hero-slide hero-two">
                            <div class="hero-content">
                                <span class="eyebrow">روتین مراقبتی تو</span>
                                <h2>برای پوستت بهترین‌ها را انتخاب کن</h2>
                                <p>محصولات منتخب برای مراقبت روزانه پوست</p>
                                <a href="#products" class="btn btn-green">خرید محصولات <i class="bi bi-arrow-left"></i></a>
                            </div>
                            <div class="hero-image">
                                <img src="https://images.unsplash.com/photo-1556229010-6c3f2c9ca5f8?auto=format&fit=crop&w=1000&q=90" alt="محصولات پوستی">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="hero-slide hero-three">
                            <div class="hero-content">
                                <span class="eyebrow">پیشنهادهای سبزکالا</span>
                                <h2>زیبایی بیشتر، هزینه کمتر</h2>
                                <p>تخفیف‌های جذاب برای محصولات محبوب</p>
                                <a href="#offers" class="btn btn-green">دیدن تخفیف‌ها <i class="bi bi-arrow-left"></i></a>
                            </div>
                            <div class="hero-image">
                                <img src="https://images.unsplash.com/photo-1596462502278-27bfdc403348?auto=format&fit=crop&w=1000&q=90" alt="محصولات آرایشی">
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#heroSlider" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span><span class="visually-hidden">قبلی</span></button>
                <button class="carousel-control-next" type="button" data-bs-target="#heroSlider" data-bs-slide="next"><span class="carousel-control-next-icon"></span><span class="visually-hidden">بعدی</span></button>
            </div>
        </section>

        <section class="container benefits py-4">
            <div class="row g-3">
                <div class="col-6 col-lg-3"><div class="benefit"><i class="bi bi-shield-check"></i><div><strong>ضمانت اصالت کالا</strong><small>خرید با اطمینان</small></div></div></div>
                <div class="col-6 col-lg-3"><div class="benefit"><i class="bi bi-truck"></i><div><strong>ارسال سریع</strong><small>تحویل در سراسر کشور</small></div></div></div>
                <div class="col-6 col-lg-3"><div class="benefit"><i class="bi bi-headset"></i><div><strong>پشتیبانی مشتریان</strong><small>همراه شما در خرید</small></div></div></div>
                <div class="col-6 col-lg-3"><div class="benefit"><i class="bi bi-stars"></i><div><strong>انتخاب هوشمندانه</strong><small>محصولات منتخب</small></div></div></div>
            </div>
        </section>

        <section class="container section-space" id="categories">
            <div class="section-heading"><div><h2>دسته‌بندی محصولات</h2><p>محصول مورد نظرت را راحت‌تر پیدا کن</p></div><a href="#">مشاهده همه <i class="bi bi-arrow-left"></i></a></div>
            <div class="row row-cols-4 row-cols-md-4 row-cols-lg-8 g-3 category-grid">
                <?php foreach ($categories as $category): ?>
                    <div class="col"><a href="#" class="category-item"><span><?= $category['icon'] ?></span><strong><?= htmlspecialchars($category['name']) ?></strong></a></div>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="container section-space" id="offers">
            <div class="row g-3">
                <div class="col-lg-6">
                    <a href="#products" class="promo promo-dark">
                        <div><span>فرصت خرید ویژه</span><h3>تا ۵۰٪ تخفیف</h3><b>خرید با تخفیف <i class="bi bi-arrow-left"></i></b></div>
                        <img src="https://images.unsplash.com/photo-1616394584738-fc6e612e71b9?auto=format&fit=crop&w=600&q=85" alt="مراقبت پوست">
                    </a>
                </div>
                <div class="col-lg-6">
                    <a href="#products" class="promo promo-light">
                        <div><span>روتین مراقبت مو</span><h3>با بهترین محصولات</h3><b>مشاهده محصولات <i class="bi bi-arrow-left"></i></b></div>
                        <img src="https://images.unsplash.com/photo-1527799820374-dcf8d9d4a388?auto=format&fit=crop&w=600&q=85" alt="مراقبت مو">
                    </a>
                </div>
            </div>
        </section>

        <section class="container section-space" id="products">
            <div class="section-heading"><div><h2>پرفروش‌ترین محصولات</h2><p>انتخاب‌های محبوب مشتریان سبزکالا</p></div><a href="#">مشاهده همه <i class="bi bi-arrow-left"></i></a></div>
            <div class="row row-cols-2 row-cols-md-4 g-3 g-lg-4">
                <?php foreach ($products as $index => $product): ?>
                    <div class="col">
                        <article class="product-card h-100">
                            <div class="product-image">
                                <span class="discount-badge"><?= (int)$product['discount'] ?>٪</span>
                                <button class="favorite-btn" type="button" aria-label="افزودن به علاقه‌مندی"><i class="bi bi-heart"></i></button>
                                <img src="<?= htmlspecialchars($product['image']) ?>" alt="<?= htmlspecialchars($product['name']) ?>" loading="lazy">
                            </div>
                            <div class="product-info">
                                <small><?= htmlspecialchars($product['brand']) ?></small>
                                <h3><?= htmlspecialchars($product['name']) ?></h3>
                                <div class="rating"><i class="bi bi-star-fill"></i> <?= $product['rating'] ?></div>
                                <div class="price-row"><div><strong><?= toman($product['price']) ?></strong><del><?= toman($product['old_price']) ?></del></div></div>
                                <button class="btn btn-add add-to-cart" type="button"><i class="bi bi-bag-plus"></i> افزودن به سبد خرید</button>
                            </div>
                        </article>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="container section-space">
            <div class="brand-strip">
                <strong>برندهای محبوب</strong>
                <span>L'ORÉAL</span><span>NIVEA</span><span>Neutrogena</span><span>GARNIER</span><span>The Ordinary</span><span>BIODERMA</span>
            </div>
        </section>

        <section class="container section-space">
            <div class="section-heading"><div><h2>مجله و مقالات زیبایی</h2><p>نکته‌ها و راهنماهای کاربردی برای مراقبت بهتر</p></div><a href="#">همه مقالات <i class="bi bi-arrow-left"></i></a></div>
            <div class="row g-3">
                <div class="col-md-4"><a class="article-card" href="#"><img src="https://images.unsplash.com/photo-1556228720-195a672e8a03?auto=format&fit=crop&w=700&q=85" alt="مراقبت پوست"><div><small>مراقبت پوست</small><h3>چطور روتین مراقبت پوست مناسب خودمان را انتخاب کنیم؟</h3><span>مطالعه مقاله <i class="bi bi-arrow-left"></i></span></div></a></div>
                <div class="col-md-4"><a class="article-card" href="#"><img src="https://images.unsplash.com/photo-1527799820374-dcf8d9d4a388?auto=format&fit=crop&w=700&q=85" alt="مراقبت مو"><div><small>مراقبت مو</small><h3>راز موهای سالم و درخشان چیست؟</h3><span>مطالعه مقاله <i class="bi bi-arrow-left"></i></span></div></a></div>
                <div class="col-md-4"><a class="article-card" href="#"><img src="https://images.unsplash.com/photo-1598440947619-2c35fc9aa908?auto=format&fit=crop&w=700&q=85" alt="زیبایی"><div><small>راهنمای خرید</small><h3>۱۰ نکته مهم برای خرید محصولات آرایشی</h3><span>مطالعه مقاله <i class="bi bi-arrow-left"></i></span></div></a></div>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="container">
            <div class="row g-4 py-5">
                <div class="col-lg-4">
                    <a class="footer-brand" href="#"><i class="bi bi-leaf-fill"></i> سبزکالا</a>
                    <p class="footer-about">همراه شما برای انتخاب بهترین محصولات آرایشی، بهداشتی و مراقبتی؛ با تجربه خریدی آسان و مطمئن.</p>
                    <div class="social-links"><a href="#"><i class="bi bi-instagram"></i></a><a href="#"><i class="bi bi-telegram"></i></a><a href="#"><i class="bi bi-whatsapp"></i></a></div>
                </div>
                <div class="col-6 col-lg-2"><h4>دسترسی سریع</h4><a href="#products">فروشگاه</a><a href="#offers">پیشنهادهای ویژه</a><a href="#">درباره ما</a><a href="#">تماس با ما</a></div>
                <div class="col-6 col-lg-2"><h4>خدمات مشتریان</h4><a href="#">راهنمای خرید</a><a href="#">رویه ارسال سفارش</a><a href="#">شرایط بازگشت کالا</a><a href="#">سوالات متداول</a></div>
                <div class="col-lg-4"><h4>عضویت در خبرنامه</h4><p class="footer-about">از جدیدترین تخفیف‌ها و محصولات باخبر شو.</p><form class="newsletter"><input type="email" placeholder="آدرس ایمیل شما"><button type="submit" aria-label="عضویت"><i class="bi bi-send"></i></button></form></div>
            </div>
            <div class="footer-bottom">تمامی حقوق این وب‌سایت برای سبزکالا محفوظ است.</div>
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
