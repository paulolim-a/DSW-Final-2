<?php

$hostname = "localhost";
$bancoDeDados = "dsw1";
$usuario = "root";
$senha ="";

$mysqli = new mysqli ($hostname, $usuario, $senha, $bancoDeDados);

/*checar conexão */
if($mysqli->connect_error){
    echo "Conexão Falhou: " . $mysqli->connect_error;
    exit();
}

