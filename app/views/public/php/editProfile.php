<?php

    // File connection
    include('../../private/settings/connectDB.php');

    if(empty($_POST['city']) || empty($_POST['bio'])) {
        header('LOCATION: profilePage.php');
        exit();
    };

    if(!isset($_SESSION)) {
        session_start();
    };

    $city = $mysqli->real_escape_string($_POST['city']);
    $bio = $mysqli->real_escape_string($_POST['bio']);
    $username = $_SESSION['username'];

    $sql_code = "UPDATE  accounts 
    SET bio = '$bio' and
    SET city = '$city'  
    WHERE username = '$username';";
    $sql_query = $mysqli->query($sql_code) OR die("Falha na execução da query" . $mysqli->error);

?>