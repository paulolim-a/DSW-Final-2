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

    if(isset(($_POST['submit'])) && ($_POST['pasw'] == '123456') && !empty($_POST['newpasw'])){


        include_once('config.php');

        $passwordtb = $_POST['newpasw'];

        // $sql_code = "UPDATE usuarios SET passwordtb = '$passwordtb' WHERE passwordtb = '123456'";


        $result = mysqli_query($conexao, "UPDATE usuarios SET passwordtb = '$passwordtb' WHERE passwordtb = '123456'");
        
        // (name,logintb,passwordtb,email) VALUES ('$name','$logintb','$passwordtb','$email')");

        header('Location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/mediaqueries.css">
    <title>Mudar Senha</title>
</head>

<body>
    <main id="telaLogin">
        
        <div class="logologin">
            <a href="index.html"><!-- inserir -->
                <img src="images/logo.png" alt="Logo da ONG">
            </a>
        </div>

        <section id="blocologin">
            
             <div class="boxformlogin">
                
                <div class="tituloCadastro">
                    <h2>Troque sua senha</h2>
                </div>

                <div class="msgAdm">
                    <h2>Olá Administrador!! Favor trocar sua senha</p>
                </div>
    
                <div class="formlogin">
                    <form action="trocar-senha.php" method="post">
    
                        <div class="inputBox password">
                            <label for="ipasw">Senha Atual: </label>
                            <input type="password" name="pasw" id="ipasw" required minlength="4" placeholder="  Informe sua senha atual" title="Informe sua senha atual" alt="Informe sua senha atual">
                        </div>
    
                        <div class="inputBox password">
                            <label for="inewpasw">Nova Senha: </label>
                            <input type="password" name="newpasw" id="inewpasw" required minlength="4" placeholder="  Informe sua nova senha" title="Informe sua nova senha" alt="Informe sua nova senha">
                        </div>
    
                        <div class="botoesLogin">
                            <input type="submit" name="submit" value="Enter" alt="Botão de enviar">
                        </div>
    
                    </form>
                </div>
            </div> 

        </section>
    </main>
</body>

</html>