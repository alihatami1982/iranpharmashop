<div class="container mt-4">
    <div class="row">
        <div class="col-md-6">
            <h2 class="mb-4"><?= $title ?></h2>
            <div class="card shadow-sm">
                <div class="card-body">
                    <form action="<?= BASE_URL ?>/admin/categories/store" method="POST">
                        <div class="mb-3">
                            <label class="form-label">نام دسته‌بندی</label>
                            <input type="text" name="name" class="form-control" placeholder="مثلاً: لوازم آرایشی" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">دسته بندی والد (اگر زیرمجموعه است)</label>
                            <select name="parent_id" class="form-select">
                                <option value="0">بدون والد (دسته‌بندی اصلی)</option>
                                
                                <?php if (!empty($categories)): ?>
                                    <?php foreach ($categories as $cat): ?>
                                        <option value="<?= $cat['id'] ?>">
                                            <?= $cat['name'] ?>
                                        </option>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                                
                            </select>
                            <small class="text-muted">اگر این گزینه را انتخاب کنید، این دسته زیرمجموعه دسته انتخاب شده قرار می‌گیرد.</small>
                        </div>

                        <div class="d-grid gap-2 d-md-block">
                            <button type="submit" class="btn btn-success">ذخیره دسته‌بندی</button>
                            <a href="<?= BASE_URL ?>/admin/categories" class="btn btn-secondary">انصراف</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
