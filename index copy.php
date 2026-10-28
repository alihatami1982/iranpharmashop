<?php
$page_title = "صفحه اصلی - فروشگاه لوازم آرایشی";
include 'includes/header.php';
include 'components/product-card.php';

// نمونه داده تستی (بعداً از دیتابیس MySQL/PDO می‌خوانی)
$sample_products = [
    [
        'id' => 1,
        'brand' => 'راکوتن',
        'title' => 'کرم آبرسان مناسب پوست چرب',
        'price' => 358380,
        'old_price' => 597300,
        'discount' => 40,
        'image' => 'https://via.placeholder.com/200x200.png?text=Cream'
    ],
    [
        'id' => 2,
        'brand' => 'رویوال',
        'title' => 'فلوئید ضد آفتاب بی‌رنگ SPF50',
        'price' => 699600,
        'old_price' => 1166000,
        'discount' => 40,
        'image' => 'https://via.placeholder.com/200x200.png?text=Sunscreen'
    ]
];
?>

<!-- بخش محصولات ویژه -->
<main class="container my-5">
    <h3 class="fw-bold mb-4"><i class="fa fa-bolt text-danger me-2"></i> پیشنهادات ویژه</h3>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
        <?php 
        foreach ($sample_products as $prod) {
            renderProductCard($prod);
        }
        ?>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
