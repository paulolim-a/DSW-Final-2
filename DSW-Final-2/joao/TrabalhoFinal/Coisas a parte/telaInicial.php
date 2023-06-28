
<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Inicial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <h2>Tela de Cadastro</h2><br>
    <form action="cadastro.php" method="post">
        <label for="femail">E-mail:</label>
        <input type="text" id="femail" name="femail"><br><br>
        <label for="fusuario">Usuário:</label>
        <input type="text" id="fusuario" name="fusuario"><br><br>
        <label for="fsenha">Senha:</label>
        <input type="text" id="fsenha" name="fsenha">
        <input type="submit" value="Enviar" name="fenviar">
    </form>
    <br><br>
    <h2>Tela de Login</h2>
    <form action="login.php" method="post">
        <label for="fusuario">Usuário:</label>
        <input type="text" id="fusuario" name="fusuario"><br><br>
        <label for="fsenha">Senha:</label>
        <input type="text" id="fsenha" name="fsenha">
        <input type="submit" value="Enviar" name="fenviar">
    </form>
</body>
</html>