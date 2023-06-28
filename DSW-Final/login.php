<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/mediaqueries.css">
    <title>Login</title>
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
                
                <div class="titulologin">
                    <h2>Login</h2>
                </div>
    
                <div class="formlogin">
                    <form action="recebeLogin.php" method="POST">
    
                        <div class="inputBox user">
                            <label for="iusuario">Usuário</label>
                            <input type="text" name="user" id="iusuario" maxlength="60" autocomplete="nickname" required placeholder="  Informe seu nome de usuário" title="Informe seu usuário" alt="Informe seu usuário" autofocus>
                        </div>
    
                        <div class="inputBox password">
                            <label for="ipasw">Senha: </label>
                            <input type="password" name="pasw" id="ipasw" required minlength="4" placeholder="  Informe sua senha" title="Informe sua senha" alt="Informe sua senha">
                        </div>
    
                        <div class="botoesLogin">
                            <input type="submit" name="submit" value="Enter" alt="Botão de enviar">
                        </div>

                        <div class="loginFooter">
                            <div class="cadastrar">
                                <p>Ainda não possui conta? <a href="cadastro.php">Clique aqui para se cadastrar!</a></p>
                            </div>
                            <div class="esqueciSenha">
                                <!-- href -->
                                <p>Esqueceu sua senha? <a href="login.php">Clique aqui para recupera-la!</a></p>
                            </div>
                        </div>
    
                    </form>
                </div>
            </div> 

        </section>
    </main>
</body>

</html>