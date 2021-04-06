<?php

include "database_connection.php";


$login = "UPDATE orders
SET ORDER_STATE='$_POST[state]'
WHERE ORDER_ID='$_POST[order_id]'";



$updated = mysqli_query($con,$login);

header("Location:http://localhost/cafe/Orders.php");
exit();

?>