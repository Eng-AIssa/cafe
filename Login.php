<?php 
ob_start();

include_once "files/database_connection.php";
include_once "helper_functions/check_signin_fun.php";
include_once "files/login_page.php";

ob_end_flush();
?>