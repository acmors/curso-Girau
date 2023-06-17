<?php

$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'formulario-cadastro-alunos';

$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($conn->connect_errno)
{
    //echo 'Ocorreu um erro inesperado. Tente novamente mais tarde!';
}else
{
    //echo 'Conexão efetuda com sucesso'; 
}

?>