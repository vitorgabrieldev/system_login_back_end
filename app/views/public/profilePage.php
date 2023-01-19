<?php

    include('../private/php/user_protection.php');

    if(!isset($_SESSION)) {
        session_start();
    };

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

    <title>profile - enjoy the news</title>

    <!-- Require Meta Tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
    <!-- Style Sheets -->
    <link rel="stylesheet" href="./css/profileStyle.css">

</head>
<body>
    <header class="headerPage">
        <div class="logoContainer">
            <i class='bx bx-user' ></i>
            <h1>profile</h1>
        </div>
        <section class="infoProfile">
            <h1 class="username ">
                <?php
                    echo $_SESSION['username'];
                ?>
            </h1>
            <i class='bx bxs-user-circle'></i>
            <i id="hiddenShowMenu" class='bx bx-chevron-down'></i>
            <div id="menuContainer" class="hidden">
                <ul>
                    <li>
                        <i class='bx bxs-cog'></i>
                        <a href="#">Settings</a>
                    </li>
                    <li>
                        <i class='bx bx-paperclip'></i>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <i class='bx bxs-lock'></i>
                        <a href="#">privacy</a>
                    </li>
                    <li>
                        <i class='bx bxs-extension'></i>
                        <a href="#">extension</a>
                    </li>
                    <li>
                        <i class='bx bx-log-in-circle'></i>
                        <a href="../private/settings/logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </section>
    </header>
    <main class="containerMain">
        <section class="containerPage containerProfile">
            <div class="imgProfile">
                <i class='bx bxs-edit-alt' ></i>
            </div>
            <div class="infoUser">
                <ul>
                    <li>
                        <?php
                            echo $_SESSION['username'];
                        ?>
                    </li>
                    <li>
                        <?php
                            echo $_SESSION['fullname'];
                        ?>
                    </li>
                    <li>
                        <?php
                            echo $_SESSION['age']; 
                        ?>
                    </li>
                </ul>
            </div>
        </section>
        <section class="containerPage containerInfosEdit">

        </section>
    </main>

    <script>
        // hidden and Show menu
        document.querySelector('#hiddenShowMenu').addEventListener('click', () => {
            let menuContent = document.querySelector('#menuContainer');
            if(menuContent.classList.contains("hidden")) {
                menuContent.classList.remove("hidden");
            } else {
                menuContent.classList.add("hidden");
            };
        });
    </script>
</body>
</html>