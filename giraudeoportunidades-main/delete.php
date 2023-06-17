<?php
if(!empty($_GET['id']))
{
    include_once('config.php');

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM alunos WHERE id=$id";

    $result = $conn->query($sqlSelect);

    if ($result->num_rows > 0) {
        $sqlDeletar = "DELETE FROM alunos WHERE id=$id";
        $resultDeletar = $conn->query($sqlDeletar);
    }
}
header('location: listagem_aluno.php');