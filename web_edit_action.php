<?php
include("theme-header.php");

//$id=$_POST["id"];
$name=htmlspecialchars($_POST["name"]);
$desciption=htmlspecialchars($_POST["desciption"]);
$price=htmlspecialchars( $_POST["price"]);
$image=$_FILES["image"];






$source=$_FILES["image"]["tmp_name"];
$target="images/".$_FILES["image"]["name"];
move_uploaded_file($source,$target);



include("connect.php");
$conn=mysqli_connect("localhost","root","","perfumezahra");
mysqli_query($conn,"SET ChARACTER SET utf8");
$name = mysqli_real_escape_string($conn, $name);
$desciption = mysqli_real_escape_string($conn, $desciption);
$price = mysqli_real_escape_string($conn, $price);
$target = mysqli_real_escape_string($conn, $target);
//$id = mysqli_real_escape_string($dblink, $id);

$result=mysqli_query($conn,"UPDATE `perfume23` SET `name`='$name',`desciption`='$desciption',`price`='$price',`image`='$target' WHERE 1");
mysqli_close($conn);

if($result==true){
    echo("ویرایش شد");
}else{
    echo("ویرایش نشد");
}
?>



















<!--
$stmt = mysqli_prepare($dblink, "UPDATE `perfume` SET `name`=?, `desciption`=?, `price`=? , `image`=?    WHERE id=?");
mysqli_stmt_bind_param($stmt, "ssii", $name, $desciption, $price, $id,$target);
$result = mysqli_stmt_execute($stmt);

if($result) {
    echo '<div class="alert alert-success text-center">
            <i class="fas fa-check-circle me-2"></i> تغییرات با موفقیت ذخیره شد
            <meta http-equiv="refresh" content="2; url=management.php">
          </div>';
} else {
    echo '<div class="alert alert-danger text-center">
            <i class="fas fa-exclamation-circle me-2"></i> خطا در ذخیره تغییرات
            <a href="web_edit.php?id='.$id.'" class="btn btn-sm btn-outline-primary mt-2">بازگشت به فرم</a>
          </div>';
}

mysqli_close($dblink);
-->
<?php
include("theme-footer.html");
?>