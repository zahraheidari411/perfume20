<?php
include("theme-header.php");
?>
<!-- buy_process.php -->
<?php
$name = $_POST['name'];
$email = $_POST['email'];
$product = $_POST['product'];
?>

<h2>تأیید خرید</h2>
<p>نام: <?= htmlspecialchars($name) ?></p>
<p>ایمیل: <?= htmlspecialchars($email) ?></p>
<p>عطر انتخابی: <?= htmlspecialchars($product) ?></p>

<form action="buy_confirm.php" method="post">
  <input type="hidden" name="name" value="<?= htmlspecialchars($name) ?>">
  <input type="hidden" name="email" value="<?= htmlspecialchars($email) ?>">
  <input type="hidden" name="product" value="<?= htmlspecialchars($product) ?>">

  <label>آدرس:</label>
  <input type="text" name="address" required><br>

  <label>تلفن:</label>
  <input type="text" name="phone" required><br>

  <button type="submit">تأیید و ثبت سفارش</button>
</form>


<?php
include("theme-footer.html");
?>