<div class="page-heading">
    <div>
        <h1>تماس با فروشگاه ایران</h1>
        <p>برای پرسش، پیشنهاد یا پیگیری سفارش با ما در ارتباط باش.</p>
    </div>
</div>
    <div class="row g-4">
        <div class="col-lg-5">
        <div class="content-panel">
        <h3>راه‌های ارتباطی</h3>
        <p><i class="bi bi-telephone text-green"></i> ۰۲۱-۱۲۳۴۵۶۷۸</p>
        <p><i class="bi bi-envelope text-green"></i> info@sabzkala.ir</p>
        <p><i class="bi bi-clock text-green"></i> شنبه تا پنجشنبه، ۹ تا ۱۷</p>
        <p><i class="bi bi-geo-alt text-green"></i> تهران، نشانی فروشگاه (نمونه)</p>
        </div>
    </div>
    <div class="col-lg-7">
        <?php if (isset($_SESSION['error'])): ?>
            <div class="alert alert-danger border-0 shadow-sm">
                <?= $_SESSION['error']; unset($_SESSION['error']); ?>
            </div>
        <?php endif; ?>

        <?php if (isset($_SESSION['success'])): ?>
            <div class="alert alert-success border-0 shadow-sm">
                <?= $_SESSION['success']; unset($_SESSION['success']); ?>
            </div>
        <?php endif; ?>

        <form  class="content-panel" action="<?= BASE_URL ?>/contact/send" method="POST">
            <!-- فیلد مخفی CSRF Token -->
            <input type="hidden" name="csrf_token" value="<?= $csrf_token ?>">
            <h3>ارسال پیام</h3>
            <div class="row g-3">
                <div class="col-md-6">
                <label class="form-label">نام</label>
                <input type="text" name="name" class="form-control" placeholder="مثلا: علی علوی" required>
            </div>
            <div class="col-md-6">
                <label class="form-label">شماره تماس</label>
                <input type="text" name="phone" class="form-control" placeholder="09123456789" required>
            </div>
            <div class="col-12">
                <label class="form-label">ایمیل</label>                
                <input type="email" name="email" class="form-control" placeholder="example@mail.com">
            </div>
            <div class="col-12">
                <label class="form-label">موضوع و پیام</label>
                <label class="form-label">متن پیام <span class="text-danger">*</span></label>
                <textarea name="message" class="form-control" rows="4" placeholder="پیام خود را اینجا بنویسید..." required></textarea>
            </div>
            <div class="col-12">
                <button type="submmit" class="btn btn-green">ارسال پیام</button>
            </div>
            </div>
        </form>
    </div>
</div>                        