<!-- اسلایدر -->
<section class="container mt-4">
    <div id="heroSlider" class="carousel slide hero-slider" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#heroSlider" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#heroSlider" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#heroSlider" data-bs-slide-to="2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="hero-slide hero-one">
                    <div class="hero-content">
                        <span class="eyebrow">تجربه‌ای تازه از زیبایی</span>
                        <h1>زیبایی از انتخاب درست شروع می‌شود</h1>
                        <p>محصولات مراقبت پوست و مو با پیشنهادهای ویژه</p>
                        <a href="products.php" class="btn btn-green">مشاهده محصولات <i class="bi bi-arrow-left"></i></a>
                    </div>
                    <div class="hero-image"><img src="https://cdn.sheypoor.com/imgs/2026/10/19/468408589/1500x936_Sw/468408589_2ab688717adcc295562ea66d892011eb.webp" alt="محصولات مراقبت پوست"></div>
                </div>
            </div>
            <div class="carousel-item"><div class="hero-slide hero-two"><div class="hero-content"><span class="eyebrow">روتین مراقبتی تو</span><h2>برای پوستت بهترین‌ها را انتخاب کن</h2><p>محصولات منتخب برای مراقبت روزانه پوست</p><a href="category.php?slug=skin" class="btn btn-green">خرید محصولات <i class="bi bi-arrow-left"></i></a></div><div class="hero-image"><img src="https://cdn.sheypoor.com/imgs/2026/10/19/468408589/1500x936_Sw/468408589_2ab688717adcc295562ea66d892011eb.webp" alt="محصولات پوستی"></div></div></div>
            <div class="carousel-item"><div class="hero-slide hero-three"><div class="hero-content"><span class="eyebrow">پیشنهادهای سبزکالا</span><h2>زیبایی بیشتر، هزینه کمتر</h2><p>تخفیف‌های جذاب برای محصولات محبوب</p><a href="offers.php" class="btn btn-green">دیدن تخفیف‌ها <i class="bi bi-arrow-left"></i></a></div><div class="hero-image"><img src="https://mojrian.net/wp-content/uploads/2022/09/32ec4b7a4ce75b11998e2436e859cc4f59b7a03b-1189x800.webp" alt="محصولات آرایشی"></div></div></div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#heroSlider" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroSlider" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
</section>
<section class="container benefits py-4"><div class="row g-3"><?php foreach([['shield-check','ضمانت اصالت کالا','خرید با اطمینان'],['truck','ارسال سریع','تحویل در سراسر کشور'],['headset','پشتیبانی مشتریان','همراه شما در خرید'],['stars','انتخاب هوشمندانه','محصولات منتخب']] as $b): ?><div class="col-6 col-lg-3"><div class="benefit"><i class="bi bi-<?= $b[0] ?>"></i><div><strong><?= $b[1] ?></strong><small><?= $b[2] ?></small></div></div></div><?php endforeach; ?></div></section>
<!-- دسته‌بندی محصولات -->
<section class="container section-space"><div class="section-heading"><div><h2>دسته‌بندی محصولات</h2><p>محصول مورد نظرت را راحت‌تر پیدا کن</p></div><a href="products.php">مشاهده همه <i class="bi bi-arrow-left"></i></a></div><div class="row row-cols-4 row-cols-md-4 row-cols-lg-8 g-3">
    <?php foreach($categories as $cat): ?>
        <div class="col">
            <a href="<?= BASE_URL ?>/category/<?= $cat['slug'] ?>" class="category-item">
            <span>💄</span>
            <strong><?= $cat['name'] ?></strong>
        </a>
        </div>
    <?php endforeach; ?></div></section>
<!-- دو بنر تبلیغاتی -->
<section class="container section-space">
    <div class="row g-3">
        <div class="col-lg-6"><a href="offers.php" class="promo promo-dark"><div><span>فرصت خرید ویژه</span><h3>تا ۵۰٪ تخفیف</h3><b>خرید با تخفیف <i class="bi bi-arrow-left"></i></b></div><img src="https://cdn.modiseh.com/unsafe/medium/nb5224/nb5224_1_.jpg" alt="مراقبت پوست"></a></div>
        <div class="col-lg-6"><a href="category.php?slug=hair" class="promo promo-light"><div><span>روتین مراقبت مو</span><h3>با بهترین محصولات</h3><b>مشاهده محصولات <i class="bi bi-arrow-left"></i></b></div><img src="https://ghasedak.beauty/wp-content/uploads/2024/11/3.jpg" alt="مراقبت مو"></a></div>
    </div>
</section>

<!-- پرفروش‌ترین محصولات -->
<section class="container section-space">
    <div class="section-heading"><div><h2>پرفروش‌ترین محصولات</h2><p>انتخاب‌های محبوب مشتریان سبزکالا</p></div><a href="products.php">مشاهده همه <i class="bi bi-arrow-left"></i></a></div>
    <div class="row row-cols-2 row-cols-md-4 g-3 g-lg-4">
    <?php if (!empty($products)): ?>
                <?php foreach ($products as $product): ?>
                        <div class="col">
                            <article class="product-card h-100">
                                <div class="product-image">
                                <span class="discount-badge">18٪</span>
                                    <a class="favorite-btn " href="wishlist.php?action=toggle&id=1" aria-label="علاقه‌مندی"><i class="bi bi-heart"></i></a>
                                    <a href="product.php?id=1">
                                        <img src="https://ghasedak.beauty/wp-content/uploads/2024/11/3.jpg" alt="<?= $product['name'] ?>" loading="lazy"></a>
                                </div>
                                <div class="product-info">
                                <small>درماتیپیک</small>
                                <h3><a href="product.php?id=1"><?= $product['name'] ?></a></h3>
                                <div class="rating"><i class="bi bi-star-fill"></i> ۴.۸</div>
                                <div class="price-row"><div><strong><?= number_format($product['price']) ?> تومان</strong><del>520,000 تومان</del></div></div>
                                <a class="btn btn-add" href="cart.php?action=add&id=1"><i class="bi bi-bag-plus"></i> افزودن به سبد خرید</a>
                                </div>
                            </article>
                        </div>
                    <?php endforeach; ?></div>
            <?php else: ?>
                <div class="col-12">
                    <div class="alert alert-info">هنوز محصولی ثبت نشده است.</div>
                </div>
            <?php endif; ?>
    </div></section>

<section class="container section-space"><div class="section-heading"><div><h2>پرفروش‌ترین محصولات</h2><p>انتخاب‌های محبوب مشتریان سبزکالا</p></div><a href="products.php">مشاهده همه <i class="bi bi-arrow-left"></i></a></div><div class="row row-cols-2 row-cols-md-4 g-3 g-lg-4"></div></section>
<section class="container section-space"><div class="brand-strip"><strong>برندهای محبوب</strong><span>L'ORÉAL</span><span>NIVEA</span><span>Neutrogena</span><span>GARNIER</span><span>The Ordinary</span><span>BIODERMA</span></div></section>

<!-- <section class="container section-space"><div class="section-heading"><div><h2>مجله و مقالات زیبایی</h2><p>نکته‌ها و راهنماهای کاربردی برای مراقبت بهتر</p></div><a href="blog.php">همه مقالات</a></div><div class="row g-3"><?php foreach($articles as $a): ?><div class="col-md-4"><a class="article-card" href="article.php?id=<?= $a['id'] ?>"><img src="<?= e($a['image']) ?>" alt=""><div><small><?= e($a['category']) ?></small><h3><?= e($a['title']) ?></h3><span>مطالعه مقاله <i class="bi bi-arrow-left"></i></span></div></a></div><?php endforeach; ?></div></section> -->