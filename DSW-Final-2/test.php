<?php
    if(isset($_POST['submit'])){
        print_r($_POST['name']);
        print_r('<br>');
        print_r($_POST['user']);
        print_r('<br>');
        print_r($_POST['pasw']);
        print_r('<br>');
        print_r($_POST['email']);
        print_r('<br>');
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <!-- <link rel="stylesheet" href="style/mediaqueriesCadastro.css"> -->
    <link rel="stylesheet" href="style/style.css">
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
                
                <div class="titulologin">
                    <h2>Cadastre-se</h2>
                </div>
    
                <div class="formlogin">
                    <form action="cadastro.php" method="POST">
    
                        <div class="inputBox user">
                            <label for="iname">Nome: </label>
                            <input type="text" name="name" id="iname" minlength="3" maxlength="60" autocomplete="name" required placeholder="  Informe seu nome completo" title="Informe seu nome completo" alt="Informe seu nome completo" autofocus>
                        </div>

                        <div class="inputBox user">
                            <label for="iusuario">Usuário:</label>
                            <input type="text" name="user" id="iusuario" minlength="4" maxlength="60" autocomplete="nickname" required placeholder="  Informe seu nome de usuário" title="Informe seu usuário" alt="Informe seu usuário">
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
                            <input type="submit" value="Enter" name="submit" alt="Botão para realizar cadastro">
                        </div>

                        </div>
    
                    </form>
                </div>
            </div> 

        </section>
    </main>
</body>

</html>