<!-- views/admin/products/create.php -->


<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">افزودن محصول جدید</h4>
                </div>
                <div class="card-body">
                    <form action="/admin/products/store" method="POST">
                        <div class="mb-3">
                            <label for="name" class="form-label">نام محصول</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label">دسته‌بندی</label>
                            <input type="text" class="form-control" id="category" name="category">
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">قیمت (تومان)</label>
                            <input type="number" class="form-control" id="price" name="price" required>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">توضیحات</label>
                            <textarea class="form-control" id="description" name="description" rows="4"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success w-100">ذخیره محصول</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


