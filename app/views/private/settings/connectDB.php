<?php

    # Connection DATABASE Query

    // Variable Connection
    $dbHost = 'localhost';
    $dbUser = 'root';
    $dbPass = '';
    $db = 'project_accounts_system';

    $mysqli = new mysqli($dbHost,$dbUser,$dbPass,$db);

    if($mysqli->connect_errno) {
        echo "Erro connection";
    } else {
        echo "DATABASE : Connect";
    };

?>