<?php
include("theme-header.php");
?>

<div class="row justify-content-center">
    <div class="col-md-8 col-lg-6">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0"><i class="fas fa-user-plus me-2"></i>فرم ثبت نام</h4>
            </div>
            <div class="card-body">
                <form action="register_action.php" method="post" class="needs-validation" novalidate>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="name" class="form-label">نام</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                            <div class="invalid-feedback">
                                لطفاً نام خود را وارد کنید
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="family" class="form-label">نام خانوادگی</label>
                            <input type="text" class="form-control" id="family" name="family" required>
                            <div class="invalid-feedback">
                                لطفاً نام خانوادگی خود را وارد کنید
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="username" class="form-label">نام کاربری</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                        <div class="invalid-feedback">
                            لطفاً نام کاربری خود را وارد کنید
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="password" class="form-label">رمز عبور</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                        <div class="invalid-feedback">
                            لطفاً رمز عبور خود را وارد کنید
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="repassword" class="form-label">تکرار رمز عبور</label>
                        <input type="password" class="form-control" id="repassword" name="repassword" required>
                        <div class="invalid-feedback">
                            لطفاً رمز عبور را مجدداً وارد کنید
                        </div>
                    </div>
                    
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-user-plus me-2"></i>ثبت نام
                        </button>
                    </div>
                </form>
            </div>
            <div class="card-footer text-center">
                <p class="mb-0">قبلاً ثبت نام کرده‌اید؟ <a href="login.php">وارد شوید</a></p>
            </div>
        </div>
    </div>
</div>

<script>
// اعتبارسنجی فرم
(function () {
  'use strict'

  // فرم‌هایی که نیاز به اعتبارسنجی دارند را انتخاب کنید
  var forms = document.querySelectorAll('.needs-validation')

  // روی آن‌ها حلقه بزنید و از ارسال جلوگیری کنید
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
</script>

<?php
include("theme-footer.html");
?>