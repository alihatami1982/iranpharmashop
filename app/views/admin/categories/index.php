<!-- بخشی از فایل app/Views/admin/categories/index.php -->
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>نام</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($categories)): ?>
            <?php foreach ($categories as $cat): ?>
                <tr>
                    <td><?= $cat['id']; ?></td>
                    <td><?= $cat['name']; ?></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="2">هیچ دسته‌ای وجود ندارد.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
