<?php
session_start();
include "configConexao.php";

    if(isset($_POST['userName']) && isset($_POST['password'])){

        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $usname = validate($_POST['userName']);
        $passw = validate($_POST['password']);

        if(empty($usname)){

            header("Location: login.php");
            exit();

        }else if(empty($passw)){

            header("Location: login.php");
            exit();

        }else{
            $sql = "SELECT * FROM usuarios WHERE user_name='$usname' AND password='$passw'";

            $result = mysqli_query($conexao, $sql);

            if(mysqli_num_rows($result) === 1){

                if($row['user_name'] === 'admin' && $row['password'] === '123456'){
                    header("Location: trocar-senha.php");
                }else{
                    echo 'teste;'
                }
                
                $row = mysqli_fetch_assoc($result);
                if($row['user_name'] === $usname && $row['password'] === $passw){
                    $_SESSION['user_name'] =$row['user_name'];
                    $_SESSION['name'] =$row['name'];
                    $_SESSION['password'] =$row['password'];
                    header("Location: home.php");
                }
            }else{
                header("Location: login.php?error=Senha ou usuário incorreto!");
            }
        }
    }else{
        header("Location: login.php");
        exit();
    }

?>