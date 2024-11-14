<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<style>

    #coffeo:hover {
        text-decoration: none;
    }

</style>

<body style="background-color: #F8F9FA;">
    <header class="container-fluid">
        <nav class="row navbar navbar-expand-sm navbar-light bg-light">
            <a href="../index.php" class="navbar-brand mb-0 h1 d-inline-flex align-items-center">
                <i class="logo d-inline-block ml-3"></i>
                <a href="/16 - Fernanda Leal de Lima Gomes/index.php" id="coffeo" style="color: #4F2E1B; font-weight: bold; font-size: 1em;" ><span>COFFEO</span></a>
            </a>

            <ul class="nav ml-auto d-flex align-items-center">
                <li class="nav-item">
                    <a class="nav-link active" href="../teste.html" style="color:#4F2E1B; font-weight: 500;">Trabalho</a>
                </li>
                
                <li class="nav-item">
                    <!-- <a id="login" class="nav-link" href="../adm/login.php" target="_blank" style="color: rgb(120, 120, 120); font-weight: 500;">Login</a> -->
                    <?php
                        if(isset($_SESSION['login'])){
                            $login = $_SESSION['login'];
                            $nome = $_SESSION['nome'];
                            $nivel = $_SESSION['nivel'];

                            echo "<li style='color:#4F2E1B; font-weight: 500;'>Bem vindo, $nome</li> ";
                            echo "<a href='/16 - Fernanda Leal de Lima Gomes/adm/logout.php' class='nav-link' style'text-decoration: none; color: red;'>Logout</a>";
                        } else {
                            echo "
                                <a href='/16 - Fernanda Leal de Lima Gomes/adm/login.php' class='nav-link'>Login</a>
                            ";
                        }
                    ?>
                </li>
            </ul>
        </nav>
    </header>

    