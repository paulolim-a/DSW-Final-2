<?php
    session_start();
    // print_r($_REQUEST);

    if(isset($_POST['submit']) && !empty($_POST['user']) && !empty($_POST['pasw'])){

        include_once('config.php');


        $logintb = $_POST['user'];
        $passwordtb = $_POST['pasw'];
        // $trocarSenha = '123456';

        if(($_POST['user'] == 'admin') and ($_POST['pasw'] == '1234567')){
                
            header('Location: trocar-senha.php');
        }

        // print_r('Usuário: ' . $logintb);
        // print_r('Senha: ' . $passwordtb);

        $sql = "SELECT * FROM usuarios WHERE logintb = '$logintb' and passwordtb = '$passwordtb'";

        $result = $conexao->query($sql);

        // print_r($result);
        if(mysqli_num_rows($result) < 1){

            // print_r('Não existe');
            unset($_SESSION['user']);
            unset($_SESSION['pasw']);
            header('Location: login.php');

        }else{

            $_SESSION['user'] = $logintb;
            $_SESSION['pasw'] = $passwordtb;
            header('Location: sistema.php');
            // print_r('Existe');
            
        }

    }else{
        
        header('Location: login.php');
    }
?>