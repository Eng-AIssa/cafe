<?php
include_once "database_connection.php";

$target_dir = "../images/";
$folder = $target_dir . $_FILES["item-image"]["name"];
$file_name = basename($_FILES["item-image"]["name"]);
$tmp_name = $_FILES["item-image"]["tmp_name"];
move_uploaded_file($tmp_name, $folder);

$id = $_SESSION['CAFETERIA_ID'];
$name =  $_POST['item-name'];
$price = $_POST['item-price'];
$description = $_POST['item-description'];
$category = $_POST['item-category'];
$quantity = $_POST['item-quantity'];


$query = "INSERT INTO items (cafeteria_id, ITEM_NAME, ITEM_PRICE, ITEM_DWSCREPTION, ITEM_QUANTITY, ITEM_IMG, category_id)
VALUES ('$id', '$name', '$price', '$description', '$quantity', '$file_name', '$category')";

$updated = mysqli_query($con,$query);


header( "refresh:2;url=http://localhost/cafe/Menu.php" );
echo "<div style='background-color:skyblue; margin:350px 0px 0px 500px; width:350px; height:35px; font-size:40px; padding:20px; border-radius:3px; text-align: center;' >جاري اضافة الصنف</div>";
exit();

?>