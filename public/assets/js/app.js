document.addEventListener("DOMContentLoaded", function () {
  let cartCount = 0;
  const count = document.getElementById("cartCount");
  const toastElement = document.getElementById("cartToast");

  document.querySelectorAll(".add-to-cart").forEach(function (button) {
    button.addEventListener("click", function () {
      cartCount++;
      count.textContent = cartCount;
      bootstrap.Toast.getOrCreateInstance(toastElement).show();
    });
  });

  document.querySelectorAll(".favorite-btn").forEach(function (button) {
    button.addEventListener("click", function () {
      const icon = button.querySelector("i");
      icon.classList.toggle("bi-heart");
      icon.classList.toggle("bi-heart-fill");
      button.classList.toggle("text-danger");
    });
  });

  const backToTop = document.getElementById("backToTop");
  window.addEventListener("scroll", function () {
    backToTop.style.display = window.scrollY > 450 ? "grid" : "none";
  });
  backToTop.addEventListener("click", function () {
    window.scrollTo({ top: 0, behavior: "smooth" });
  });

  document.querySelector(".newsletter")?.addEventListener("submit", function (event) {
    event.preventDefault();
    alert("فرم خبرنامه در نسخه نمایشی است؛ برای استفاده واقعی آن را به بک‌اند متصل کنید.");
  });
});
