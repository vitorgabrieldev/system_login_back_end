<?php

    if(!isset($_SESSION)) {
        session_start();
    };

    session_destroy();

    header('location: ../../public/account_creation.php');

?>