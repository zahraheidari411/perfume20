<?php
include("theme-header.php");

$id=$_GET["id"];
   
$conn=mysqli_connect("localhost","root","","perfumezahra");
mysqli_query($conn,"SET ChARACTER SET utf8");
$result=mysqli_query($conn,"DELETE FROM `perfume23` WHERE id=$id");
mysqli_close($conn);

if($result==true){
    echo("حذف شد");
}else{
    echo("حذف نشد");
}
?>

<?php 
include("theme-footer.html");
?>