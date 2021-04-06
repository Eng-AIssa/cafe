<?php

function get_items(){

global $con;


$query = "SELECT * FROM items";


$items = mysqli_query($con,$query);


return $items;

}
?>