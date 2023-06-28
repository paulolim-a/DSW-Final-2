<?php
    session_start();

    if(isset($_SESSION['password']) && isset($_SESSION['user_name'])){

        include "configConexao.php";

        if(isset($_POST['pasw']) && isset($_POST['newpasw'])){
            function validate($data){
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
    
            $pasw = validate($_POST['pasw']);
            $newpasw = validate($_POST['newpasw']);
    
            $pasw = md5($pasw);
            $newpasw = md5($newpasw);
            $usname = $_SESSION['user_name'];
    
            $sql = "SELECT password FROM usuarios WHERE user_name='$usname' AND password='$pasw'";
            $result = mysqli_query($conexao, $sql);
            
            if(mysqli_num_rows($result) === 1){
                
                $sqlTrocaSenha = "UPDATE usuarios SET password='$newpasw' WHERE user_name='$usname' ";
                $resultTrocaSenha = mysqli_query($conexao, $sqlTrocaSenha);
                header("Location: trocar-senha.php?success=Senha Atualizada!");

            }else{
                header("Location: trocar-senha.php?error=Senha Atual Inválida");
            }

        }else{
            header("Location: home.php");
            exit();    }
    }else{
        header("Location: login.php");
        echo'teste';
         exit();
    }
?>