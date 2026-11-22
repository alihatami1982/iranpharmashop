
</main>
    </div>
    <div class="modal-backdrop" id="productModal" onclick="backdropClose(event,'productModal')">
        <div class="modal">
            <div class="panel-head">
                <h3>افزودن محصول جدید</h3><button class="mobile-close" onclick="closeModal('productModal')">✕</button>
            </div>
            <div class="form-grid">
                <div class="form-group"><label>نام محصول</label><input class="field" placeholder="مثلاً کرم آبرسان">
                </div>
                <div class="form-group"><label>برند</label><input class="field" placeholder="نام برند"></div>
                <div class="form-group"><label>دسته‌بندی</label><select class="field">
                        <option>مراقبت پوست</option>
                        <option>آرایش صورت</option>
                        <option>مراقبت مو</option>
                        <option>بهداشت فردی</option>
                    </select></div>
                <div class="form-group"><label>قیمت (تومان)</label><input class="field" placeholder="۰"></div>
                <div class="form-group"><label>موجودی</label><input class="field" placeholder="۰"></div>
                <div class="form-group"><label>کد کالا</label><input class="field" placeholder="SKU"></div>
            </div><button class="btn" style="margin-top:15px"
                onclick="alert('این فرم نمایشی است؛ برای ثبت واقعی محصول باید به بک‌اند متصل شود.');closeModal('productModal')">ثبت
                محصول</button>
        </div>
    </div>
    <div class="modal-backdrop" id="discountModal" onclick="backdropClose(event,'discountModal')">
        <div class="modal">
            <div class="panel-head">
                <h3>ایجاد کد تخفیف</h3><button class="mobile-close" onclick="closeModal('discountModal')">✕</button>
            </div>
            <div class="form-grid">
                <div class="form-group"><label>عنوان تخفیف</label><input class="field" placeholder="عنوان کمپین"></div>
                <div class="form-group"><label>کد تخفیف</label><input class="field" placeholder="مثلاً BEAUTY20"></div>
                <div class="form-group"><label>نوع تخفیف</label><select class="field">
                        <option>درصدی</option>
                        <option>مبلغ ثابت</option>
                        <option>ارسال رایگان</option>
                    </select></div>
                <div class="form-group"><label>مقدار</label><input class="field" placeholder="۲۰"></div>
            </div><button class="btn" style="margin-top:15px"
                onclick="alert('این فرم نمایشی است؛ برای ثبت واقعی باید به بک‌اند متصل شود.');closeModal('discountModal')">ایجاد
                تخفیف</button>
        </div>
    </div>
    <style>
        .modal-backdrop {
            display: none;
            position: fixed;
            inset: 0;
            background: #10271c80;
            z-index: 100;
            align-items: center;
            justify-content: center;
            padding: 15px
        }

        .modal-backdrop.show {
            display: flex
        }

        .modal {
            background: #fff;
            border-radius: 16px;
            padding: 20px;
            width: min(520px, 100%);
            max-height: 90dvh;
            overflow: auto;
            box-shadow: 0 20px 60px #0002
        }

        .modal .mobile-close {
            display: block
        }
    </style>
    <script>
        const titles = { dashboard: ['داشبورد', 'نمای کلی فروشگاه شما'], products: ['مدیریت محصولات', 'افزودن، ویرایش و بررسی موجودی کالاها'], categories: ['دسته‌بندی‌ها', 'مدیریت گروه‌های محصولات فروشگاه'], orders: ['سفارش‌ها', 'پیگیری و پردازش سفارش‌های مشتریان'], customers: ['مشتریان', 'مدیریت اطلاعات و سوابق خرید'], inventory: ['مدیریت انبار', 'کنترل موجودی و هشدار کمبود کالا'], discounts: ['تخفیف‌ها', 'مدیریت کدهای تخفیف و جشنواره‌ها'], reports: ['گزارش‌ها', 'تحلیل فروش و عملکرد فروشگاه'], brands: ['مدیریت برندها', 'برندهای محصولات آرایشی و بهداشتی'], suppliers: ['تأمین‌کنندگان', 'مدیریت تأمین کالا و سفارش‌های خرید'], reviews: ['نظرات و امتیازها', 'بررسی بازخورد مشتریان'], returns: ['مرجوعی‌ها', 'پیگیری درخواست‌های بازگشت کالا'], shipping: ['روش‌های ارسال', 'مدیریت سرویس‌های حمل و هزینه ارسال'], payments: ['درگاه‌های پرداخت', 'روش‌های پرداخت و تراکنش‌ها'], content: ['محتوای سایت', 'مدیریت بنرها و صفحات فروشگاه'], staff: ['کاربران و دسترسی‌ها', 'مدیریت اعضای تیم و نقش‌های پنل'], settings: ['تنظیمات فروشگاه', 'مدیریت اطلاعات و تنظیمات پایه'], support: ['پشتیبانی', 'راهنما و ارتباط با پشتیبانی'] };
        function go(page) { if (!titles[page]) return; document.querySelectorAll('.page').forEach(p => p.classList.remove('active')); document.getElementById('page-' + page).classList.add('active'); document.querySelectorAll('a[data-page]').forEach(a => a.classList.toggle('active', a.dataset.page === page)); document.getElementById('topTitle').textContent = titles[page][0]; document.getElementById('topSubtitle').textContent = titles[page][1]; history.replaceState(null, '', '#' + page); closeMenu(); window.scrollTo({ top: 0, behavior: 'instant' }); }
        document.querySelectorAll('a[data-page]').forEach(a => a.addEventListener('click', e => { e.preventDefault(); go(a.dataset.page) })); function toggleMenu() { document.getElementById('sidebar').classList.toggle('open'); document.getElementById('overlay').classList.toggle('show'); document.body.style.overflow = document.getElementById('sidebar').classList.contains('open') ? 'hidden' : '' } function closeMenu() { document.getElementById('sidebar').classList.remove('open'); document.getElementById('overlay').classList.remove('show'); document.body.style.overflow = '' } function openModal(id) { document.getElementById(id).classList.add('show'); document.body.style.overflow = 'hidden' } function closeModal(id) { document.getElementById(id).classList.remove('show'); document.body.style.overflow = '' } function backdropClose(e, id) { if (e.target.id === id) closeModal(id) } function filterRows(id, q) { const query = q.trim().toLocaleLowerCase('fa'); document.querySelectorAll('#' + id + ' tbody tr').forEach(tr => tr.style.display = tr.innerText.toLocaleLowerCase('fa').includes(query) ? '' : 'none') }
        const initial = location.hash.replace('#', ''); if (titles[initial]) go(initial); window.addEventListener('resize', () => { if (innerWidth > 760) closeMenu() }); document.addEventListener('keydown', e => { if (e.key === 'Escape') { closeMenu(); document.querySelectorAll('.modal-backdrop').forEach(m => m.classList.remove('show')); document.body.style.overflow = '' } });
    </script>
</body>

</html>