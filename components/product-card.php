<?php
// ورودی‌های تابع یا متغیرهای کارت محصول
function renderProductCard($product) {
    ?>
    <div class="col">
        <div class="card h-100 border-0 shadow-sm rounded-3 product-card position-relative">
            <?php if (!empty($product['discount'])): ?>
                <span class="badge bg-danger position-absolute top-0 start-0 m-2"><?php echo $product['discount']; ?>٪</span>
            <?php endif; ?>
            <img src="<?php echo $product['image']; ?>" class="card-img-top p-3" alt="<?php echo $product['title']; ?>">
            <div class="card-body d-flex flex-column">
                <span class="text-muted small mb-1"><?php echo $product['brand']; ?></span>
                <h6 class="card-title fw-bold text-dark"><?php echo $product['title']; ?></h6>
                <div class="mt-auto">
                    <?php if (!empty($product['old_price'])): ?>
                        <div class="text-muted text-decoration-line-through small"><?php echo number_format($product['old_price']); ?> تومان</div>
                    <?php endif; ?>
                    <div class="text-danger fw-bold fs-5"><?php echo number_format($product['price']); ?> تومان</div>
                    <a href="product-detail.php?id=<?php echo $product['id']; ?>" class="btn btn-outline-danger btn-sm w-100 mt-2">مشاهده و خرید</a>
                </div>
            </div>
        </div>
    </div>
    <?php
}
?>
