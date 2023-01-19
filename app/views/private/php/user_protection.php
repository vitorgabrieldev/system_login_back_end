<?php

    if(!isset($_SESSION)) {
        session_start();
    };

    if(!isset($_SESSION['username'])) {
        header('localtion: ../../public/account_creation.php');
    };

?>