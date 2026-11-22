<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'فروشگاه ایران' ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css">
</head>
<body>

<!-- هدر سایت -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="<?= BASE_URL ?>">فروشگاه ایران</a>
        <div class="navbar-nav ms-auto">
            <a class="nav-link" href="<?= BASE_URL ?>">خانه</a>
            <a class="nav-link" href="<?= BASE_URL ?>/products">محصولات</a>
        </div>
    </div>
</nav>

<!-- محتوای اصلی صفحه (که از ویو تزریق می‌شود) -->
<main class="container my-4">
    <?= $content ?? '' ?>
</main>

<!-- فوتر سایت -->
<footer class="bg-dark text-white text-center py-4 mt-5">
    <p>تمامی حقوق محفوظ است &copy; <?= date('Y') ?></p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
