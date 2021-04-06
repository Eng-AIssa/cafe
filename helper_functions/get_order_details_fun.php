<?php

function get_order($id){

global $con;


$query = "SELECT ITEM_ID,QUANTITY FROM order_item WHERE ORDER_ID=$id";


$orders = mysqli_query($con,$query);


return $orders;

}
?>