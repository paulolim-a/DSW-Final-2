<?php

if(isset($_POST['login'])){

    include('conexao.php');

    $login = $_POST['login'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    $email = $_POST['email']

    $mysqli-> query("INSERT INTO clientes (logincli, senhacli, emailcli) VALUES('$login', '$senha', '$email')");
}

?>


<!DOCTYPE html>

    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        Cadastrar Senha
        <form action="" method= "PSOT">
            <input type="text" name="email">
            <input type="text" name="login">
            <input type="text" name="senha">
            <button type="submit">Cadastrar Senha</button>
        </form>
        
    </body>

    </html>