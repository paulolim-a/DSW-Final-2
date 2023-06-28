<?php
    session_start();
    // print_r($_SESSION);
    if((!isset($_SESSION['user']) == true) and (!isset($_SESSION['pasw']) == true)){

        unset($_SESSION['user']);
        unset($_SESSION['pasw']);
        header('Location: login.php');
    } else{
        $logado = $_SESSION['user'];
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sitema Teste</title>
</head>
<body>
    <?php
        echo "<h1>Bem vindo Usuário: <b>$logado</b></h1>";
    ?>
    <nav>
        <a href="encerrarSecao.php">Sair</a>
    </nav>
</body>
</html>