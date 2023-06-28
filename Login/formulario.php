<?php

    if(isset($_POST['submit'])){
        print_r($_POST['nome']);
        print_r('<br>');
        print_r($_POST['email']);
        print_r('<br>');
        print_r($_POST['telefone']);
        print_r('<br>');
        print_r($_POST['Sexo']);
        print_r('<br>');
        print_r($_POST['dataNascimento']);
        print_r('<br>');
        print_r($_POST['cidade']);
        print_r('<br>');
        print_r($_POST['estado']);
        print_r('<br>');
        print_r($_POST['endereco']);
    }else{
        echo "Erro";
    }

    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['Sexo'];
    $dataNasc = $_POST['dataNascimento'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereco'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,telefone,sexo,dataNasc,cidade,estado,endereco) VALUES ('$nome','$email','$telefone','$sexo','$dataNasc','$cidade','$estado','$endereco')");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleForm.css">
    <title>Formulário</title>
</head>

<body>
    <section>
        <div class="box">
            <form action="formulario.php" method="post">
                <fieldset>
                    <legend><strong>Formulário de Clientes</strong></legend>
                    <br>
                    <div class="inputBox">
                        <input class="inputUser" type="text" name="nome" id="nome" required>
                        <label for="nome" class="labelInput">Nome Completo:</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input class="inputUser" type="email" name="email" id="email" required>
                        <label for="email" class="labelInput">Email:</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input class="inputUser" type="tel" name="telefone" id="telefone">
                        <label for="telefone" class="labelInput">Telefone:</label>
                    </div>
                    <br>
                    <p>Sexo</p>
                    <input type="radio" name="Sexo" id="feminino" value="feminino" required>
                    <label for="Sexo">Feminino</label>
                    <br>
                    <input type="radio" name="Sexo" id="masculino" value="masculino" required>
                    <label for="Sexo">Masculino</label>
                    <br>
                    <input type="radio" name="Sexo" id="outro" value="outro" required>
                    <label for="Sexo">Outro</label>
                    <br><br>
                    <div id="dateNasc">
                        <label for="dataNascimento"><strong>Data de Nascimento:</strong></label>
                        <input type="date" name="dataNascimento" id="dataNascimento">
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input class="inputUser" type="text" name="cidade" id="cidade" required>
                        <label for="cidade" class="labelInput">Cidade</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input class="inputUser" type="text" name="estado" id="estado" required>
                        <label for="estado" class="labelInput">Estado:</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input class="inputUser" type="text" name="endereco" id="endereco" required>
                        <label for="endereco" class="labelInput">Endereço:</label>
                    </div>
                    <br><br>
                    <input id="submit" name="submit" type="submit" value="Enviar" >


                </fieldset>
            </form>
        </div>
    </section>
    
</body>
</html>