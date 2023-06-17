<?php
session_start();
include_once('config.php');
// print_r($_SESSION);

if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
  unset($_SESSION['email']);
  unset($_SESSION['senha']);
  header('Location: login.php');
}
$logado = $_SESSION['email'];

$sql = "SELECT * FROM alunos ORDER BY id DESC";
$result = $conn->query($sql);

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title>Listagem de Alunos</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <style>
    .sla {
      margin: 5px;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="sla">
      <a href="sair.php" class="btn btn-danger">Sair</a>
    </div>
    <h1>Listagem de Alunos</h1>
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>Endereço</th>
          <th>Nome do Pai</th>
          <th>Nome da Mãe</th>
          <th>CPF</th>
          <th>RG</th>
          <th>Data de Nascimento</th>
          <th>Ações</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <?php
          while ($user_data = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $user_data['id'] . "</td>";
            echo "<td>" . $user_data['nome_completo'] . "</td>";
            echo "<td>" . $user_data['endereco'] . "</td>";
            echo "<td>" . $user_data['nome_pai'] . "</td>";
            echo "<td>" . $user_data['nome_mae'] . "</td>";
            echo "<td>" . $user_data['rg'] . "</td>";
            echo "<td>" . $user_data['cpf'] . "</td>";
            echo "<td>" . $user_data['data_nasc'] . "</td>";
            echo "<td>             <a href='editar_aluno.php?id=$user_data[id]' class='btn btn-primary btn-sm'>Editar</a>
                <a href='delete.php?id=$user_data[id]' class='btn btn-danger btn-sm'>Excluir</a></td>";
            echo "</tr>";
          }
          ?>
        </tr>
      </tbody>
    </table>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>