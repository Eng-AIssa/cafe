<?php

function check_session()
{

    if (isset($_SESSION['CAFTERIA_USERNAME'])) {
        $_SESSION['CAFTERIA_USERNAME'];
        return true;
    }
    return false;
}

?>