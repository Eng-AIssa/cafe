<?php

function get_category($id){

global $con;


$query = "SELECT category_title FROM items_category WHERE category_id='$id'";


$category = mysqli_query($con,$query);
$one_category = mysqli_fetch_assoc($category);

return $one_category['category_title'];

}

?>