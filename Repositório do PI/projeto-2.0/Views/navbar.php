<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DidaticGames</title>
    <link rel="stylesheet" href="/../static/css/style.css">
    <link rel="icon" href="../static/img/dglogo2.png">
</head>

<body>
    <div class="nav-menu">
        <div class="nav-bar">
            <div class="menu">
                <a href="/"><img src="../static/img/dglogo.png" style='height:30px' alt=""></a>
                <a href="/jogos">Jogos</a>
                <a href="/sobre">Sobre</a>
                <?php
                if (hasUser()) {
                    echo'<a href="/perfil">Perfil</a>';
                }
                ?>
            </div>
            <?php 
                if(hasUser()){
                    $user = $_SESSION['user'];
                    echo "
                        <div class='menu'>
                            <a href='/perfil'>$user</a>
                            <a href='/sair'>Sair</a>
                        </div>
                    ";
                } else {
                    echo '
                        <div class="menu">
                            <a href="/login">Login</a>
                            <a href="/registrar">Cadastrar</a>
                        </div>
                    ';
                }
            ?>
        </div>
    </div>