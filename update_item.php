<?php
include_once "files/database_connection.php";

$target_dir = "images/";
$folder = $target_dir . $_FILES["item-image"]["name"];
$file_name = basename($_FILES["item-image"]["name"]);
if($file_name == "")
$file_name = $_POST['img'];
$tmp_name = $_FILES["item-image"]["tmp_name"];
move_uploaded_file($tmp_name, $folder);


$name =  $_POST['item-name'];
$price = $_POST['item-price'];
$description = $_POST['item-description'];
$category = $_POST['item-category'];
$quantity = $_POST['item-quantity'];


$query = "UPDATE items 
SET ITEM_IMG = '$file_name',ITEM_NAME='$name',ITEM_PRICE='$price',ITEM_DWSCREPTION='$description',category_id='$category',ITEM_QUANTITY='$quantity'
WHERE ITEM_ID = '$_POST[id]'";

$updated = mysqli_query($con,$query);

header( "refresh:2;url=Menu.php" );
echo "<div style='background-color:skyblue; margin:350px 0px 0px 500px; width:350px; height:35px; font-size:40px; padding:20px; border-radius:3px; text-align: center;' >جاري تعديل الصنف</div>";


?>