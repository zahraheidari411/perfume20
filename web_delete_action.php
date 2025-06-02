<?php
include("theme-header.php");

$id = intval($_GET["id"]);

include("connect.php");
$conn=mysqli_connect("localhost","root","","perfumezahra");

mysqli_query($conn,"SET ChARACTER SET utf8");

$result = mysqli_query($conn, "DELETE FROM `perfume23` WHERE id=$id");

if($result) {
    echo '<div class="alert alert-success text-center">
            <i class="fas fa-check-circle me-2"></i> رکورد با موفقیت حذف شد
            <meta http-equiv="refresh" content="2; url=management.php">
          </div>';
} else {
    echo '<div class="alert alert-danger text-center">
            <i class="fas fa-exclamation-circle me-2"></i> خطا در حذف رکورد
            <a href="management.php" class="btn btn-sm btn-outline-primary mt-2">بازگشت به مدیریت</a>
          </div>';
}

mysqli_close($conn);
include("theme-footer.html");
?>