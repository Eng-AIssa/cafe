<?php

include "database_connection.php";

$id = $_POST['delete-id'];

$delete = "DELETE FROM items WHERE ITEM_ID='$id'";

$deleted = mysqli_query($con,$delete);

header( "refresh:2;url=http://localhost/cafe/Menu.php" );
echo "<div style='background-color:skyblue; margin:350px 0px 0px 500px; width:350px; height:35px; font-size:40px; padding:20px; border-radius:3px; text-align: center;' >جاري حذف الصنف</div>";
exit();

?>