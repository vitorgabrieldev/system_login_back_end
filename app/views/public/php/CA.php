<!-- Create account - C - Create A - Account (CA) -->

<?php
    
    // File connection
    include('../../private/settings/connectDB.php');

    if(empty($_POST['username']) || empty($_POST['password']) || empty($_POST['fullname']) || empty($_POST['age'])) {
        header('LOCATION: ../account_creation.php');
        exit();
    };
    
    $username = $mysqli->real_escape_string($_POST['username']);
    $password = $mysqli->real_escape_string($_POST['password']);
    $fullName = $mysqli->real_escape_string($_POST['fullname']);
    $age = $mysqli->real_escape_string($_POST['age']);

    $sql_code = "SELECT * FROM accounts WHERE username = '$username'";
    $sql_query = $mysqli->query($sql_code) OR die("Falha na execução da query" . $mysqli->error);

    $qtdUsers = $sql_query->num_rows;

    if($qtdUsers >= 1) {
        header("LOCATION: ../account_creation.php");
    } else {
        if(strlen($_POST['username']) > 0 && strlen($_POST['username']) <= 32 && strlen($_POST['password']) >= 3 && strlen($_POST['fullname']) >= 5 && strlen($_POST['age']) <= 3) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $fullname = $_POST['fullname'];
            $age = $_POST['age'];

            // File connection again
            include('../../private/settings/connectDB.php');

            $query = mysqli_query($mysqli,"INSERT INTO accounts(username, fullname, age, password)VALUES('$username','$fullName','$age','$password')");
    
            if(!isset($_SESSION)) { 
                session_start();
            };
    
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['fullname'] = $_POST['fullname'];
            $_SESSION['age'] = $_POST['age'];
    
            header("LOCATION: ../profilePage.php");
        } else {
            header('LOCATION: ../account_creation.php');
        };
    };
?>