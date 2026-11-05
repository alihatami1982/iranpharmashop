<?php
include "includes/header.php";
?>
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
                            <span class="eyebrow">پیشنهادهای ایران</span>
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
                    <img src="uploads/banner/banner1.jpg" alt="مراقبت پوست">
                </a>
            </div>
            <div class="col-lg-6">
                <a href="#products" class="promo promo-light">
                    <div><span>روتین مراقبت مو</span><h3>با بهترین محصولات</h3><b>مشاهده محصولات <i class="bi bi-arrow-left"></i></b></div>
                    <img src="uploads/banner/banner1.jpg" alt="مراقبت مو">
                </a>
            </div>
        </div>
    </section>

    <section class="container section-space" id="products">
        <div class="section-heading"><div><h2>پرفروش‌ترین محصولات</h2><p>انتخاب‌های محبوب مشتریان ایران</p></div><a href="#">مشاهده همه <i class="bi bi-arrow-left"></i></a></div>
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
<?php
include "includes/footer.php";
?>
