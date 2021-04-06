<?php

function get_user(){

global $con;
$id = $_SESSION['CAFETERIA_ID'];
$query = "SELECT * FROM cafeteria_information WHERE CAFETERIA_ID='$id'";

$users= mysqli_query($con,$query);

$user = mysqli_fetch_assoc($users);

return $user;
}

?>