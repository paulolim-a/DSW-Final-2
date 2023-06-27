<?php
    if(isset($_POST["fusuario"], $_POST["fsenha"]))
    {
        $usuario = $_POST["fusuario"];
        $senha = base64_encode($_POST["fsenha"]);

        include "banco/conexao.php";

        $sql = "SELECT * FROM login WHERE ";
        $sql .= "usuario = '$usuario' AND senha = '$senha'";
        $resultado = mysqli_query($conexao, $sql);
        $linhas = mysqli_num_rows($resultado);

        if($linhas == 1) {
            $_SESSION['username'] = $usuario;
            echo "Login realizado com sucesso!";
            header("Local: telaInicial.php");
            exit();
        }

        else
        {
            echo "<h3>Username/password is incorrect.</h3>";
        }
    }
?>