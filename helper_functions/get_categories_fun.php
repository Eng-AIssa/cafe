<?php

function get_categories(){

global $con;


$query = "SELECT * FROM items_category";


$categories = mysqli_query($con,$query);

return $categories;

}

?>