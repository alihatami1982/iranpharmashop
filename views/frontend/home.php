<!-- views/frontend/home.php -->
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <!-- استفاده از CDN بوت‌استرپ برای سرعت در شروع کار -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css">
    <style>
        body { font-family: Tahoma, Arial, sans-serif; background-color: #f8f9fa; }
        .hero-section { padding: 60px 0; background: #fff; border-bottom: 1px solid #eee; }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">فروشگاه ایران</a>
  </div>
</nav>

<div class="hero-section text-center">
    <div class="container">
        <h1 class="display-4"><?php echo $title; ?></h1>
        <p class="lead"><?php echo $description; ?></p>
        <a href="#" class="btn btn-primary btn-lg">مشاهده محصولات</a>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body text-center">
                    <h5>محصول جدید</h5>
                    <p>توضیحات کوتاه محصول...</p>
                </div>
            </div>
        </div>
        <!-- محصولات دیگر اینجا اضافه می‌شوند -->
        <!-- در فایل views/frontend/home.php، بخش محصولات را پیدا کن و این را جایگزین کن -->
            <div class="container mt-5">
                <h2 class="mb-4 text-center">محصولات ما</h2>
                <div class="row">
                    <?php if (!empty($products)): ?>
                        <?php foreach ($products as $product): ?>
                            <div class="col-md-4 mb-4">
                                <div class="card h-100 shadow-sm">
                                    <div class="card-body text-center">
                                        <h5 class="card-title"><?php echo $product['name']; ?></h5>
                                        <p class="card-text text-muted"><?php echo $product['description']; ?></p>
                                        <p class="fw-bold text-primary"><?php echo number_format($product['price']); ?> تومان</p>
                                        <span class="badge bg-secondary"><?php echo $product['category']; ?></span>
                                    </div>
                                    <div class="card-footer bg-transparent border-0">
                                        <button class="btn btn-outline-primary w-100">افزودن به سبد خرید</button>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p class="text-center">محصولی یافت نشد.</p>
                    <?php endif; ?>
                </div>
            </div>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
