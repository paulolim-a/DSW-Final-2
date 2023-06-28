<?php

    $dbHost = 'localhost';
    $dbUsername = 'root';
    $Password = '';
    $dbName = 'dsw1-trabalho-final';

    $conexao = mysqli_connect($dbHost,$dbUsername,$Password,$dbName);

    if(!$conexao){
        echo 'Falha de conexão';
    }

    // if($conexao->connect_errno){
    //     echo "Erro";
    // } else{
    //     echo "Conexão realizada com sucesso";
    // }

?>