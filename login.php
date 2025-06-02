<?php



include("theme-header.php");







// متغیرهایی برای نمایش پیام خطا
$error = "";


if(isset($_SESSION["admin"]) && $_SESSION["admin"]===true){
    ?>
    <script type="text/javascript">
       
        location.replace("index.php");
        
        </script>
        <?php
}



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // دریافت نام کاربری و رمز عبور از فرم
    $username = $_POST["username"];
    $password = $_POST['password'];

    // چک کردن نام کاربری و رمز عبور
    if ($username == 'admin' && $password == 'adminpass') {  // ورود ادمین
        $_SESSION["user_role"] = "admin";  // نقش ادمین
        $_SESSION["username"] = $username;  // نام کاربری را در سشن ذخیره می‌کنیم
        $_SESSION["is_logged_in"] = true;?>  // وضعیت ورود را به true تنظیم می‌کنیم
        <script>location.replace("management.php") ;</script>
        <?php  // هدایت به صفحه اصلی بعد از ورود موفق
        exit();
    } elseif ($username == 'user' && $password == 'userpassword') {  // ورود کاربر عادی
        $_SESSION["user_role"] = "user";  // نقش کاربر
        $_SESSION["username"] = $username;  // نام کاربری را در سشن ذخیره می‌کنیم
        $_SESSION["is_logged_in"] = true;  // وضعیت ورود را به true تنظیم می‌کنیم
        header("Location: index.php");  // هدایت به صفحه اصلی
        exit();
    } else {
        $error = "نام کاربری یا رمز عبور اشتباه است!";
    }
}
?>

<div class="row justify-content-center">
    <div class="col-md-6 col-lg-4">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">ورود به سیستم</h4>
                <br>
                لطفا نام کاربری و رمز عبور خود را وارد کنید.
            </div>
            <div class="card-body">
                <!-- نمایش پیام خطا در صورت وجود -->
                <?php if (!empty($error)): ?>
                    <div class="alert alert-danger">
                        <?php echo $error; ?>
                    </div>
                <?php endif; ?>
                
                <form action="login_action.php" method="post">
                    <div class="mb-3">
                        <label for="username" class="form-label">نام کاربری</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="نام کاربری" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">رمز عبور</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="رمز عبور" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">ورود</button>
                </form>
            </div>
        </div>
    </div>
</div>


<?php
include("theme-footer.html");
?>