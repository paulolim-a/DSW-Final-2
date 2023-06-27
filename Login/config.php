<?php

    $dbHost = 'localhost';
    $dbUsername = 'root';
    $Password = '';
    $dbName = 'formulario-teste';

    $conexao = new mysqli($dbHost,$dbUsername,$Password,$dbName);

    // if($conexao->connect_errno){
    //     echo "Erro";
    // } else{
    //     echo "Conexão realizada com sucesso";
    // }
?>