<?php

function show_orders(){

global $con;

$login = "SELECT * FROM orders";

$result = mysqli_query($con,$login);

return $result;
}

?>