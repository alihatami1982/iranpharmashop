<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary text-white text-center py-3">
                    <h4 class="mb-0">تماس با ما</h4>
                </div>
                <div class="card-body p-4">
                    
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

                    <form action="<?= BASE_URL ?>/contact/send" method="POST">
                        <!-- فیلد مخفی CSRF Token -->
                        <input type="hidden" name="csrf_token" value="<?= $csrf_token ?>">

                        <div class="mb-3">
                            <label class="form-label">نام و نام خانوادگی <span class="text-danger">*</span></label>
                            <input type="text" name="name" class="form-control" placeholder="مثلا: علی علوی" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">شماره تماس <span class="text-danger">*</span></label>
                            <input type="text" name="phone" class="form-control" placeholder="09123456789" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">ایمیل (اختیاری)</label>
                            <input type="email" name="email" class="form-control" placeholder="example@mail.com">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">متن پیام <span class="text-danger">*</span></label>
                            <textarea name="message" class="form-control" rows="4" placeholder="پیام خود را اینجا بنویسید..." required></textarea>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg">ارسال پیام</button>
                        </div>
