<?php
include("connect.php");

include("theme-header.php");
require_once("connect.php");

$dblink = mysqli_connect("localhost", "root", "", "perfumezahra");

$username = mysqli_real_escape_string($dblink, $_POST["username"]);
$password = mysqli_real_escape_string($dblink, $_POST["password"]);

// اگر مدیر بود
if ($username === "admin@y" && $password === "9090") {
    $_SESSION["admin"] = true;
    $_SESSION["user_type"] = "admin";
    $_SESSION["name"] = "مدیر سایت";

    echo "<p style='color:green;'><b>مدیر گرامی خوش آمدید</b></p>";
    echo "<script>location.replace('management.php');</script>";
    exit;
}

// بررسی در جدول user
$result = mysqli_query($dblink, "SELECT * FROM `user1` WHERE `username`='$username' AND `password`='$password'");
$row = mysqli_fetch_array($result);

// اگر در دیتابیس بود
if ($row) {
    $_SESSION["admin"] = false;
    $_SESSION["user_type"] = "public";
    $_SESSION["name"] = $row['name'];
    echo "<p style='color:green;'><b>{$row['name']} خوش آمدید</b></p>";
    echo "<script>location.replace('gallery.php');</script>";

} 
mysqli_close($dblink);
include("theme-footer.html");

?>
