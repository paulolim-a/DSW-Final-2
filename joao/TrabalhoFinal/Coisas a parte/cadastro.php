<?php
    if(isset($_POST["femail"], $_POST["fusuario"], $_POST["fsenha"]))
    {
        $email = $_POST["femail"];
        $usuario = $_POST["fusuario"];
        $senha = base64_encode($_POST["fsenha"]);

        include "banco/conexao.php";

        $sql = "INSERT INTO login (usuario, senha, email) VALUES ";
        $sql .= "('$usuario', '$senha', '$email')";
        $resultado = mysqli_query($conexao,$sql);
        echo "<h2>Cadastro realizado com sucesso!</h2>";
    }
?>