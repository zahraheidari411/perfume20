
<?php
include("theme-header.php");
?>
<!-- buy_confirm.php -->
<?php
$name = $_POST['name'];
$email = $_POST['email'];
$product = $_POST['product'];
$address = $_POST['address'];
$phone = $_POST['phone'];

// در اینجا می‌توان اطلاعات را در پایگاه داده ذخیره کرد یا ایمیل فرستاد

echo "<h2>سفارش با موفقیت ثبت شد!</h2>";
echo "<p>از خرید شما متشکریم، $name.</p>";
echo "<p>محصول: $product</p>";
echo "<p>ارسال به: $address</p>";
?>
<br>
<br>
<br>
<br><br>
<br><br>
<br><br>
<br>
<?php
include("theme-footer.html");
?>