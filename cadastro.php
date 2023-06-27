<?php
    if(isset($_POST['submit'])){

        // print_r($_POST['name']);
        // print_r('<br>');
        // print_r($_POST['user']);
        // print_r('<br>');
        // print_r($_POST['pasw']);
        // print_r('<br>');
        // print_r($_POST['email']);
        // print_r('<br>');

        include_once('config.php');

        $name = $_POST['name'];
        $user_name = $_POST['user'];
        $password = $_POST['pasw'];
        $email = $_POST['email'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(name,user_name,password,email) VALUES ('$name','$user_name','$password','$email')");

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
    <link rel="stylesheet" href="style/mediaqueriesCadastro.css">
    <title>Cadastro</title>
</head>

<body>
    <main id="telaLogin">
        
        <div class="logologin">
            <a href="#"><!-- inserir -->
                <img src="images/logo.png" alt="Logo da ONG">
            </a>
        </div>

        <section id="blocologin">
            
            <div class="boxformlogin">
                
                <div class="tituloCadastro">
                    <h2>Cadastre-se</h2>
                    <?php if (isset($_GET['error'])) { ?>
                            <p class="errorLogin"><?php echo $_GET['error']; ?></p>
                    <?php } ?>
                </div>
    
                <div class="formlogin">
                    <form action="validarCadastro.php" method="POST">
    
                        <div class="inputBox user">
                            <label for="iname">Nome: </label>
                            <input type="text" name="name" id="iname" minlength="3" maxlength="60" autocomplete="name" required placeholder="  Informe seu nome completo" title="Informe seu nome completo" alt="Informe seu nome completo" autofocus>
                        </div>

                        <div class="inputBox user">
                            <label for="iusuario">Usuário: </label>
                            <input type="text" name="userName" id="iuser" minlength="4" maxlength="60" autocomplete="on" required placeholder="  Informe seu nome de usuário" title="Informe seu usuário" alt="Informe seu usuário">
                        </div>
    
                        <div class="inputBox password">
                            <label for="ipasw">Senha: </label>
                            <input type="password" name="pasw" id="ipasw" required minlength="4" placeholder="  Informe sua senha" title="Informe sua senha" alt="Informe sua senha" maxlength="45">
                        </div>

                        <div class="inputBox user">
                            <label for="iemail">Email:</label>
                            <input type="email" name="email" id="iemail" maxlength="75" autocomplete="email" required placeholder="  Informe seu email" title="Informe seu email" alt="Informe seu email">
                        </div>
    
                        <div class="botoesLogin">
                            <input type="submit" name="submit" value="Enter" alt="Botão para realizar cadastro">
                        </div>
                        
                        <div class="loginFooter">
                            <p>Já possui uma conta? <a href="login.php">Login!</a> </p>
                        </div>

                    </form>
                </div>
            </div>
        </section>
    </main>
</body>

</html>