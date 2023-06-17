<?php

session_start();



if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
    // Acessa
    include_once('config.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // print_r($email);
    // print_r($senha);

    $sql = "SELECT * FROM professores WHERE email = '$email' AND senha = '$senha'";

    $result = $conn->query($sql);
    // print_r($result);

    if(mysqli_num_rows($result) < 1)
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        echo 'Usuário ou senha incorretos';
    }
    else 
    {
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: listagem_aluno.php');
    }
} else {
    echo "deu erro";
}
