<?php

//اتصال مع السيرفر 
$con = mysqli_connect("localhost","root","") or die("Erorr:can't connect to server");

//اتصال مع الداتا بيز
$db = mysqli_select_db($con,"la_carte")  or die("Erorr:can't connect to database");


session_start();
?>
