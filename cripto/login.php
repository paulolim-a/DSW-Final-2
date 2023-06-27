    <?php

        if(isset($_POST['login'])){
             $login = $_POST['login'];
             $senha = $_POST['senha'];
             $email = $_POST['email'];

             $sql_code = "SELECT * FROM clientes WHERE logincli =  '$login' LIMIT 1";
             $sql_exec = $mysqli->query($sql_code) or die($mysqli->error);

             $usuario = $sql_exec->fetch_assoc();
             if(password_verify($senha, $usuario['senha'])){
                echo "Usuário logado";
             } else{
                echo "Falha ao logar! Senha ou login incorretos";
             }


        } 


    ?> 
    
    
    
    <!DOCTYPE html>
    <html lang="pt-br">
    
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
    </head>

    <body>
      <form action="" method="POST">
         <input type="text" name= "login"><br>
         <input type="text" name= "senha"><br>
      </form>
      
    </body>

    </html>