<?php
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $Password = '';
    $dbName = 'dsw1-trabalho-final';

    $conexao = new mysqli($dbHost,$dbUsername,$Password,$dbName);

    // if($conexao->connect_errno){
    //     echo "Erro";
    // } else{
    //     echo "Conexão realizada com sucesso";
    // }

?>