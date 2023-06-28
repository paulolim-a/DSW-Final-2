<?php
session_start();
include "configConexao.php";

    if(isset($_POST['name']) && isset($_POST['userName']) 
        && isset($_POST['pasw']) && isset($_POST['email'])){

        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $usname = validate($_POST['userName']);
        $passw = validate($_POST['pasw']);
        $name = validate($_POST['name']);
        $email = validate($_POST['email']);

        $user_data = 'usname='. $usname. '&name='. $name;

        $passw = md5($passw);
        $sql = "SELECT * FROM usuarios WHERE user_name='$usname' ";
        $result = mysqli_query($conexao, $sql);

        if(mysqli_num_rows($result) > 0){
            header("Location: cadastro.php?error=Esse Usuário já existe!&$user_data");
            exit();  
        }else{

            $sqlInsert = "INSERT INTO usuarios(name, user_name, password, email) VALUES('$name', '$usname', '$passw', '$email')";
            $resultInsert = mysqli_query($conexao, $sqlInsert);

            if($resultInsert){
                header("Location: cadastro.php?error=Cadastro Realizado!");
                exit(); 
            }else{
                header("Location: cadastro.php?error=Erro Desconhecido!$user_data");
                 exit(); 
            }
        }
        //         $row = mysqli_fetch_assoc($result);
        //         if($row['user_name'] === $usname && $row['password'] === $passw){
        //             $_SESSION['user_name'] =$row['user_name'];
        //             $_SESSION['name'] =$row['name'];
        //             $_SESSION['password'] =$row['password'];
        //             header("Location: home.php");
        //         }
        //     }else{
        //         header("Location: login.php?error=Senha ou usuário incorreto!");
        //     }
        // }
        
        
        // else if($password !== $re_password){
        //     header("Location: cadastro.php?error=As duas senhas não coincidem!$user_data");
        //     exit();
        // }

    }else{
        header("Location: cadastro.php");
        exit();
    }

?>