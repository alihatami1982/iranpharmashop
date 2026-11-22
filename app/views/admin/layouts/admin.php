<!-- app/Views/admin/layouts/admin.php -->
<?php
// لود کردن هدر ادمین
include __DIR__ . '/admin_header.php';

// نمایش محتوای اصلی (مثلاً جدول دسته‌بندی‌ها)
echo $content;

// لود کردن فوتر ادمین
include __DIR__ . '/admin_footer.php';

