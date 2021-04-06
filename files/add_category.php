<?php
include_once "database_connection.php";

$name =  $_POST['category-name'];

$query = "INSERT INTO items_category(category_title)
VALUES ('$name')";

$added = mysqli_query($con,$query);


header( "refresh:2;url=http://localhost/cafe/Menu.php" );
echo "<div style='background-color:skyblue; margin:350px 0px 0px 500px; width:350px; height:35px; font-size:40px; padding:20px; border-radius:3px; text-align: center;' >جاري اضافة الفئة الجديدة</div>";
exit();

?>