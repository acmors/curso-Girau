<!-- Página de formulário de cadastro de alunos -->
<?php

if (isset($_POST['nome'], $_POST['endereco'], $_POST['nome_pai'], $_POST['nome_mae'], $_POST['cpf'], $_POST['rg'], $_POST['data_nascimento'], $_POST['listagem_cursos'], $_POST['experiencia_area'], $_POST['participou_outras_edicoes'])) {
  $nome = $_POST['nome'];
  $endereco = $_POST['endereco'];
  $nome_pai =  $_POST['nome_pai'];
  $nome_mae =  $_POST['nome_mae'];
  $registro2 =  $_POST['cpf'];
  $rg = $_POST['rg'];
  $data_nascimento = $_POST['data_nascimento'];
  $cursos =  $_POST['listagem_cursos'];
  $experiencia_area =  $_POST['experiencia_area'];
  $edicoes=  $_POST['participou_outras_edicoes'];

  include_once('config.php');
  $result = mysqli_query($conn, "INSERT INTO alunos(nome_completo, endereco, nome_pai, nome_mae, cpf, rg, data_nasc, cursos, experiencia, edicoes_anteriores) VALUES ('$nome', '$endereco', '$nome_pai', '$nome_mae', '$registro2', '$rg', '$data_nascimento', '$cursos', '$experiencia_area', '$edicoes')");
  header('Location: login.php');
}

?>



<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Cadastro de Alunos</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <h1>Cadastro de Alunos</h1>
    <form action="formulario_cadastro.php" method="post">
      <div class="form-group">
        <label for="nome">Nome completo:</label>
        <input type="text" class="form-control" id="nome" name="nome">
      </div>
      <div class="form-group">
        <label for="endereco">Endereço:</label>
        <input type="text" class="form-control" id="endereco" name="endereco">
      </div>
      <div class="form-group">
        <label for="nome_pai">Nome do Pai:</label>
        <input type="text" class="form-control" id="nome_pai" name="nome_pai">
      </div>
      <div class="form-group">
        <label for="nome_mae">Nome da Mãe:</label>
        <input type="text" class="form-control" id="nome_mae" name="nome_mae">
      </div>
      <div class="form-group">
        <label for="cpg">CPF:</label>
        <input type="text" class="form-control" id="cpg" name="cpf">
      </div>
      <div class="form-group">
        <label for="rg">RG:</label>
        <input type="text" class="form-control" id="rg" name="rg">
      </div>
      <div class="form-group">
        <label for="data_nascimento">Data de Nascimento:</label>
        <input type="date" class="form-control" id="data_nascimento" name="data_nascimento">
      </div>
      <div class="form-group">
        <label for="listagem_cursos">Listagem de Cursos:</label>
        <select class="form-control" id="listagem_cursos" name="listagem_cursos">
          <option value="">Selecione um curso</option>
          <option value="curso1">Curso 1</option>
          <option value="curso2">Curso 2</option>
          <option value="curso3">Curso 3</option>
        </select>
      </div>
      <div class="form-group">
        <label for="experiencia_area">Experiência na Área:</label>
        <textarea class="form-control" id="experiencia_area" name="experiencia_area"></textarea>
      </div>
      <div class="form-group">
        <label for="participou_outras_edicoes">Já participou de outras edições?</label>
        <div class="radio">
          <label>
            <input type="radio" name="participou_outras_edicoes" value="sim">Sim
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="participou_outras_edicoes" value="nao">Não
          </label>
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
  </div>
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!-- Bootstrap JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>