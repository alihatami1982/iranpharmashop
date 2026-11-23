<div class="row">
    <!-- بخش دسته‌بندی‌ها در کنار محصولات -->
    <div class="col-md-3">
        <div class="list-group shadow-sm">
            <a href="<?= BASE_URL ?>" class="list-group-item list-group-item-action active">همه دسته‌ها</a>
            <?php foreach ($categories as $cat): ?>
                <a href="<?= BASE_URL ?>/category/<?= $cat['slug'] ?>" class="list-group-item list-group-item-action">
                    <?= $cat['name'] ?>
                </a>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- بخش محصولات -->
    <div class="col-md-9">
        <h3 class="mb-4">جدیدترین محصولات</h3>
        <div class="row">
            <?php if (!empty($products)): ?>
                <?php foreach ($products as $product): ?>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow-sm">
                            <img src="https://via.placeholder.com/300x200?text=Product" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <h5 class="card-title"><?= $product['name'] ?></h5>
                                <p class="card-text text-danger fw-bold"><?= number_format($product['price']) ?> تومان</p>
                                <a href="#" class="btn btn-outline-primary btn-sm">مشاهده محصول</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-12">
                    <div class="alert alert-info">هنوز محصولی ثبت نشده است.</div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>


