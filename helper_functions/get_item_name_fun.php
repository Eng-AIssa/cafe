<?php

function get_item($id){

global $con;


$query = "SELECT ITEM_NAME FROM items WHERE ITEM_ID='$id'";


$item_name = mysqli_query($con,$query);

$item_name_array = mysqli_fetch_assoc($item_name);


return $item_name_array['ITEM_NAME'];

}
?>