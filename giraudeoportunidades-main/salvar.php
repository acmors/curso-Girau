<?php

include_once('config.php');

    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $endereco = $_POST['endereco'];
        $nome_pai =  $_POST['nome_pai'];
        $nome_mae =  $_POST['nome_mae'];
        $registro2 = $_POST['rg'];
        $cpf = $_POST['cpf'];
        $data_nascimento = $_POST['data_nasc'];


        $sqlEditar = "UPDATE alunos SET nome_completo='$nome', endereco='$endereco', nome_pai='$nome_pai', nome_mae='$nome_mae', cpf='$cpf', rg='$registro2', data_nasc='$data_nascimento' WHERE id='$id'";
        $result = $conn->query($sqlEditar);
    }
    header('Location: listagem_aluno.php');


?>