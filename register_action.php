<?php
session_start();
ob_start();

include("theme-header.php");

// اتصال به دیتابیس
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "perfumezahra"; // یا هر نام دیتابیسی که ساختی

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("خطا در اتصال به پایگاه داده: " . mysqli_connect_error());
}

// ست کردن UTF-8
mysqli_query($conn, "SET NAMES utf8");

// گرفتن داده‌ها از فرم
$name = trim($_POST["name"]);
$family = trim($_POST["family"]);
$username = trim($_POST["username"]);
$password = trim($_POST["password"]);

// بررسی خالی نبودن فیلدها
if (empty($name) || empty($family) || empty($username) || empty($password)) {
    die("لطفاً همه فیلدها را پر کنید.");
}

// بررسی تکراری نبودن username
$check_sql = "SELECT id FROM user1 WHERE username = ?";
$check_stmt = mysqli_prepare($conn, $check_sql);
mysqli_stmt_bind_param($check_stmt, "s", $username);
mysqli_stmt_execute($check_stmt);
mysqli_stmt_store_result($check_stmt);

if (mysqli_stmt_num_rows($check_stmt) > 0) {
    echo "نام کاربری قبلاً استفاده شده است. لطفاً نام کاربری دیگری وارد کنید.";
    mysqli_close($conn);
    exit();
}
mysqli_stmt_close($check_stmt);

// افزودن کاربر جدید
$insert_sql = "INSERT INTO user1 (name, family, username, password) VALUES (?, ?, ?, ?)";
$insert_stmt = mysqli_prepare($conn, $insert_sql);
if (!$insert_stmt) {
    die("خطا در آماده‌سازی کوئری: " . mysqli_error($conn));
}

// بایند و اجرا
mysqli_stmt_bind_param($insert_stmt, "ssss", $name, $family, $username, $password);
if (mysqli_stmt_execute($insert_stmt)) {
    echo "ثبت‌نام با موفقیت انجام شد.";
    header("Location: login.php"); // تغییر مسیر در صورت موفقیت
    exit();
} else {
    echo "خطا در ثبت‌نام: " . mysqli_error($conn);
}

mysqli_stmt_close($insert_stmt);
mysqli_close($conn);
ob_end_flush();

include("theme-footer.html");

?>
