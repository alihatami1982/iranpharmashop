<!-- ... بخش‌های قبلی کد ... -->
<thead class="table-light">
    <tr>
        <th>#</th>
        <th>نام</th>
        <th>شماره تماس</th> <!-- ستون جدید -->
        <th>ایمیل</th>
        <th>پیام</th>
        <th>تاریخ</th>
    </tr>
</thead>
<tbody>
    <?php foreach ($messages as $msg): ?>
        <tr>
            <td><?= $msg['id'] ?></td>
            <td><?= htmlspecialchars($msg['name']) ?></td>
            <td><?= htmlspecialchars($msg['phone']) ?></td> <!-- نمایش شماره -->
            <td><?= htmlspecialchars($msg['email'] ?? '---') ?></td>
            <td><small><?= nl2br(htmlspecialchars($msg['message'])) ?></small></td>
            <td><small><?= $msg['created_at'] ?></small></td>
        </tr>
    <?php endforeach; ?>
</tbody>
<!-- ... بقیه کد ... -->
