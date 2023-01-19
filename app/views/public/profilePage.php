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
                       USERNAME:
                        <?php
                            echo $_SESSION['username'];
                        ?>
                    </li>
                    <li>
                       FULL NAME:
                        <?php
                            echo $_SESSION['fullname'];
                        ?>
                    </li>
                    <li>
                       AGE:
                        <?php
                            echo $_SESSION['age']; 
                        ?>
                    </li>
                    <li>
                       CITY:
                        <?php
                            if($_SESSION['city'] == '') {
                                echo "<label class='labelEdit' for='cidade'>Clique para editar</label>";
                            } else {
                                echo $_SESSION['city'];
                            };
                        ?>
                    </li><li>
                       BIO:
                        <?php
                            if($_SESSION['bio'] == '') {
                                echo "<label class='labelEdit' for='cidade'>Clique para editar</label>";
                            } else {
                                echo $_SESSION['bio'];
                            }; 
                        ?>
                    </li>
                </ul>
            </div>
        </section>
        <style>
            .labelEdit {
                cursor: pointer;
                transition: .3s;
                padding: .2rem 1.5rem .1rem 1.5rem;
                border-radius: .3rem;
                margin: .3rem 0 .3rem 0;
            }
            .labelEdit:hover {
                background: rgba(88, 87, 87, 0.555);
            }
            .containerInfosEdit {
                display: flex;
                justify-content: center;
            }
            #formEditProfile {
                width: 90%;
                text-align: center;
            }
            .titleForm {
                color: #bebebe;
                font-family: 'Roboto', sans-serif;
                font-size: 2rem;
            }
            .containerInput {
                display: grid;
            }
            .containerInput > label {
                color: #fefefe;
                font-family: 'Roboto', sans-serif;
                font-size: 1.5rem;
            }
            .containerInput > input {
                border: 1px solid rgb(189, 189, 189);
                border-radius: 5px;
                height: 50px;
                padding: 0 20px;
                font-size: 14px;
                outline: none;
            }
            .containerInput > input:focus {
                background: rgb(201, 200, 200);
            }
            .itemList {
                font-size: 1.4rem;
            }
            .btnSubmit {
                width: 200px;
                height: 50px;
                font-size: 14px;
                background: #069;
                text-align: center;
                line-height: 50px;
                font-weight: bold;
                color: 3fff;
                margin-top: 10px;
                border: none;
                color: #fefefe;
                cursor: pointer;
                transition: .3s;
                border-radius: 2px;
            }
            .btnSubmit:hover {
                background: rgb(3, 146, 218);
            }           
        </style>
        <section class="containerPage containerInfosEdit">
            <form id="formEditProfile" action="./php/editProfile.php" method="post">
                <h1 class="titleForm">
                    Edit profile
                </h1>
                <div class="containerInput">
                    <label for="cidade">Digite sua cidade:</label>
                    <input id="cidade" type="text" placeholder="Digite sua cidade..." name="city">
                </div>

                <div class="containerInput">
                    <label for="bio">Digite sua bio:</label>
                    <input type="text" placeholder="Digite sua bio..." name="bio">
                </div>
                <button class="btnSubmit" type="submit">Atualizar</button>
            </form>
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