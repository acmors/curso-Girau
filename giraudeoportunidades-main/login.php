<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
    .form-control:focus {
      border-color: #9FB1C1;
      box-shadow: 0 0 0 0.2rem rgba(95, 112, 123, 0.25);
    }

    .inicio{
      margin-left: 150px;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-md-6 col-lg-5">
        <div class="card">
          <div class="card-header text-center">
            <h4>Login</h4>
          </div>
          <div class="card-body">
            <form action="testeLogin.php" method="post">
              <div class="form-group">
                <label for="username">Email:</label>
                <input type="email" class="form-control" name="email" id="username" placeholder="Digite o endereço de email">
              </div>
              <div class="form-group">
                <label for="password">Senha:</label>
                <input type="password" class="form-control" name="senha" id="password" placeholder="Digite a senha">
              </div>
              <button type="submit" name="submit" class="btn btn-primary btn-block">enviar</button>
            </form>
            <div class="criarconta">
              <br>
              <a href="formulario_prof.php">Não tem conta?</a>
              <a class="inicio" href="index.html">Voltar para o início</a>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>