<?php
    session_start();
    if(isset($_SESSION['password']) && isset($_SESSION['user_name'])){

    }else{
        header("Location: login.php");
        exit();
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
                <?php if (isset($_GET['success'])) { ?>
                            <h2 class="admPrimeiroAcesso"><?php echo $_GET['success']; ?></h2>
                    <?php } elseif (isset($_GET['error'])) {?>
                        <h2 class="erroTrocaSenha"><?php echo $_GET['error']; ?></h2>
                        <?php } ?>
                </div>
    
                <div class="formlogin">
                    <form action="validaTrocaSenha.php" method="post">
    
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

                        <div class="loginFooter">
                        <div class="cadastrar">
                                <p>Voltar<a href="home.php">a página Home!</a></p>
                            </div>
                        </div>
    
                    </form>
                </div>
            </div> 

        </section>
    </main>
</body>

</html>