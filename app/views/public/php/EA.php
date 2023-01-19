<!-- Enter account - E - Enter / A - Account (EA) -->

<?php

    include('../../private/settings/connectDB.php');

    $username = $mysqli->real_escape_string($_POST['username']);
    $password = $mysqli->real_escape_string($_POST['password']);

    $sql_code = "SELECT * FROM accounts WHERE username = '$username' AND password = '$password'";
    $sql_query = $mysqli->query($sql_code) OR die("Falha na execução da query" . $mysqli->error);

    $qtdUsers = $sql_query->num_rows;

    if($qtdUsers >= 1) {
        $user = $sql_query->fetch_assoc();

        if(!isset($_SESSION)) { 
            session_start();
        };

        $_SESSION['username'] = $user['username'];
        $_SESSION['fullname'] = $user['fullName'];
        $_SESSION['age'] = $user['age'];
        $_SESSION['city'] = $user['city'];
        $_SESSION['bio'] = $user['bioInfo'];

        header("LOCATION: ../profilePage.php");

    } else {
        header('LOCATION: ../account_enter.php');
    };

?>