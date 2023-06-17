<?php
if (!empty(($_GET['id']))) 
{
    include_once('config.php');

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM alunos WHERE id=$id";

    $result = $conn->query($sqlSelect);

    if ($result->num_rows > 0) {
        while ($user_data = mysqli_fetch_assoc($result)) {

            $id = $user_data['id'];
            $nome = $user_data['nome_completo'];
            $endereco = $user_data['endereco'];
            $nome_pai = $user_data['nome_pai'];
            $nome_mae = $user_data['nome_mae'];
            $registro2 = $user_data['rg'];
            $cpf = $user_data['cpf'];
            $data_nasc = $user_data['data_nasc'];
        }
    }else
    {
        header('Location: listagem_aluno.php');
    }
}else
{
    header('Location: listagem_aluno.php');
}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição de Aluno</title>
    <!-- Importando Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>Edição de Aluno</h1>
        <form action="salvar.php" method="post">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" class="form-control" id="nome" value="<?php echo $nome ?>">
            </div>
            <div class="form-group">
                <label for="endereco">Endereço:</label>
                <input type="text" name="endereco" class="form-control" id="endereco" value="<?php  echo $endereco ?>">
            </div>
            <div class="form-group">
                <label for="nome_pai">Nome do Pai:</label>
                <input type="text" name="nome_pai" class="form-control" id="nome_pai" value="<?= $nome_pai ?>" placeholder="Digite o nome do pai do aluno">
            </div>
            <div class="form-group">
                <label for="nome_mae">Nome da Mãe:</label>
                <input type="text" name="nome_mae" class="form-control" id="nome_mae" value="<?= $nome_mae ?>" placeholder="Digite o nome da mãe do aluno">
            </div>
            <div class="form-group">
                <label for="cpf">CPF:</label>
                <input type="text" name="cpf" class="form-control" id="cpf" value="<?= $cpf ?>" placeholder="Digite o CPF do aluno">
            </div>
            <div class="form-group">
                <label for="rg">RG:</label>
                <input type="text" name="rg" class="form-control" value="<?= $registro2 ?>" id="rg" placeholder="Digite o RG do aluno">
            </div>
            <div class="form-group">
                <label for="data_nascimento">Data de Nascimento:</label>
                <input type="date" name="data_nasc" class="form-control" value="<?= $data_nasc ?>" id="data_nascimento" placeholder="Digite a data de nascimento do aluno">
            </div>
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <button type="submit" name="update" id="update" class="btn btn-primary">Salvar</button>
        </form>
    </div>

    <!-- Importando jQuery, Popper.js e Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>