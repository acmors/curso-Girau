<?php

if(isset($_POST['nome'], $_POST['email'], $_POST['senha'], $_POST['endereco'], $_POST['cpf'], $_POST['rp']))
{
  //  print_r($_POST['nome']);
  //  print_r($_POST['email']);
  //  print_r($_POST['senha']);
  //  print_r($_POST['endereco']);
  //  print_r($_POST['cpf']);
  //  print_r($_POST['rp']);

  include_once('config.php');

  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];
  $endereco = $_POST['endereco'];
  $registro = $_POST['cpf'];
  $registroProf= $_POST['rp'];

  $result = mysqli_query($conn, "INSERT INTO professores(nome_comple, email, senha, endereco, cpf, rp) VALUES ('$nome', '$email', '$senha', '$endereco', '$registro', '$registroProf')");
  header('Location: login.php');
}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro | Professor</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container">
      <h1>Cadastro de Professores</h1>
      <form method="post">
        <div class="form-group">
          <label for="nome">Nome completo:</label>
          <input type="text" class="form-control" id="nome" name="nome">
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="form-group">
          <label for="senha">Senha:</label>
          <input type="password" class="form-control" id="senha" name="senha">
        </div>
        <div class="form-group">
          <label for="endereco">Endereço:</label>
          <input type="text" class="form-control" id="endereco" name="endereco">
        </div>
        <div class="form-group">
          <label for="cpf">CPF:</label>
          <input type="text" class="form-control" id="cpf" name="cpf">
        </div>
        <div class="form-group">
          <label for="rp">RP (Registro de Professor):</label>
          <input type="text" class="form-control" id="rp" name="rp">
        </div>

        <button type="submit" class="btn btn-primary">submit</button>
      </form>
      <!-- <br>
      <a href="login.php">Voltar para login</a> -->
    </div>
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<!-- Bootstrap JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>