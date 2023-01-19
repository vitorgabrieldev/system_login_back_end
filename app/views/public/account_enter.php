<?php ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

    <title>Entre em sua conta</title>

    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">

    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- ========================== Style sheets ========================== -->
    <link rel="stylesheet" href="./css/app.css">

    <style>
        body, html {
            background: #1d2b4a;
        }
        .container_enterAccount {
            margin-top: 1.5rem;
            display: flex;
            gap: .5rem;
            align-items: center;
        }
        .container_enterAccount > h1 {
            color: #fefefe;
            font-size: 1.2rem;
        }
        .container_enterAccount > a {
            color: #fefefe;
            text-decoration: none;
            padding: .3rem;
            border: 1px solid #fefefe;
            border-radius: .3rem;
            transition: .3s;
            cursor: pointer;
        }
        .container_enterAccount > a:hover {
            transform: scale(.97);
        }
        .title_form {
            color: #fefefe;
            font-size: 3rem;
            font-family: sans-serif;
            text-decoration: underline;
        }
    </style>
    
</head>
<body>
    <!-- Components -->
    <form id="formLogin" action="./php/EA.php" method="POST">
        <h1 class="title_form">Entrar em sua conta</h1>
        <label for="Username">Digite seu username:</label>
        <input type="text" id="username" placeholder="Digite seu username..." class="inputValues inputUsename" name="username" required>

        <label for="password">Digite sua senha:</label>
        <input type="password" id="password" placeholder="Digite sua senha..." class="inputValues inputPassword" name="password" required>
        <br>
        <!-- Button Submit Form -->
        <button type="submit">Entrar</button>
        <section class="container_enterAccount">
            <h1>Não tem uma conta?</h1>
            <a href="./account_creation.php">Criar</a>
        </section>
    </form>
    <!-- ========================== Scripts Sheets ========================== -->
    <script src="./validation_form.js"></script>

</body>
</html>