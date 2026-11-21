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
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
