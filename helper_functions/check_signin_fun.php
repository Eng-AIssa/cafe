<?php

function check_signin($username, $password)
{

    global $con;


    $query = "SELECT CAFETERIA_ID,CAFTERIA_PASSWORD FROM cafeteria_information WHERE CAFTERIA_USERNAME='$username' AND CAFTERIA_PASSWORD='$password'";
 

    $resul = mysqli_query($con, $query);
    $user = mysqli_fetch_assoc($resul);
    if (!($user == null) && ($password==$user['CAFTERIA_PASSWORD'])) {
        $_SESSION['CAFETERIA_ID']        =    $user['CAFETERIA_ID'];
        $_SESSION['CAFTERIA_USERNAME']    =    $username;
        $_SESSION['CAFTERIA_PASSWORD']    =    $password;
        return true;
    }
    
    return false;

}
