<?php
header('Content-Type: text/html; charset=utf-8');

include("theme-header.php");
// اعتبارسنجی داده‌های ورودی

$name=htmlspecialchars($_POST["name"]);
$desciption=htmlspecialchars($_POST["desciption"]);
$price=htmlspecialchars( $_POST["price"]);
$image=$_FILES["image"];

$source=$_FILES["image"]["tmp_name"];
$target="images/".$_FILES["image"]["name"];
move_uploaded_file($source,$target);

// اتصال به پایگاه داده
include("connect.php");
$conn=mysqli_connect("localhost","root","","perfumezahra");
mysqli_query($conn,"SET ChARACTER SET utf8");




$result=mysqli_query($conn,"INSERT INTO `perfume23`( `name`, `desciption`, `price`, `image`) VALUES ('$name','$desciption',$price,'$target')");
mysqli_close($conn);

if($result==true){
    echo(" اضافه شد");
}else{
    echo(" اضافه نشد");
}
?>

<!-- استفاده از prepared statements برای امنیت بیشتر

//$stmt = mysqli_prepare($dblink, "INSERT INTO `perfume23` (`name`, `desciption`, `price`,`image`) VALUES (?, ?, ?,?)");
//mysqli_stmt_bind_param($stmt,"sst",$name);
//$result = mysqli_stmt_execute($stmt);

//if($result) {
  //  echo '<div class="alert alert-success text-center">
    ///        <i class="fas fa-check-circle me-2"></i> اطلاعات با موفقیت ذخیره شد
       //     <meta http-equiv="refresh" content="2; url=management.php">
         // </div>';
//} else {
  //  echo '<div class="alert alert-danger text-center">
    //        <i class="fas fa-exclamation-circle me-2"></i> خطا در ذخیره اطلاعات
      //      <a href="web_add.php" class="btn btn-sm btn-outline-primary mt-2">بازگشت به فرم</a>
        //  </div>';
//}
-->
<?php
include("theme-footer.html");
?>