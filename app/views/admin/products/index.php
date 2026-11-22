<div class="container-fluid mt-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>مدیریت محصولات</h2>
        <a href="<?= BASE_URL; ?>/admin/products/create" class="btn btn-primary">افزودن محصول جدید</a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <table class="table table-hover">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>تصویر</th>
                        <th>نام محصول</th>
                        <th>قیمت (تومان)</th>
                        <th>عملیات</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($products)): ?>
                        <?php foreach ($products as $product): ?>
                            <tr>
                                <td><?= $product['id']; ?></td>
                                <td>
                                    <img src="<?= BASE_URL; ?>/uploads/<?= $product['image']; ?>" 
                                         alt="<?= $product['name']; ?>" 
                                         style="width: 50px; height: 50px; object-fit: cover;" 
                                         class="rounded">
                                </td>
                                <td><?= $product['name']; ?></td>
                                <td><?= number_format($product['price']); ?></td>
                                <td>
                                    <a href="<?= BASE_URL; ?>/admin/products/edit/<?= $product['id']; ?>" class="btn btn-sm btn-warning">ویرایش</a>
                                    <a href="<?= BASE_URL; ?>/admin/products/delete/<?= $product['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('آیا مطمئن هستید؟')">حذف</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="5" class="text-center">محصولی یافت نشد.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
