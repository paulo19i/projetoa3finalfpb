<?php
include('conexao.php');

$login = isset($_POST['login']) ? $_POST['login'] : '';
$senha = isset($_POST['senha']) ? $_POST['senha'] : '';

$select = "SELECT nome, login, senha FROM login WHERE login = '$login' AND senha = '$senha'";

$execute = mysqli_query($conexao, $select);

$dados = mysqli_fetch_row($execute);

if ($login == $dados[1] && $senha == $dados[2]) {
    session_start();
    $_SESSION['nome'] = $dados[0];
    header('location: index.php');
} else {
    header('location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
        @import url('https://fonts.googleapis.com/css2?family= Open+Sans:wght@300;400;500 & display =swap');
        *{
            margin: 0;
            padding: 0;
            font-family: 'Open Sans', sans-serif;
        }
        body{
            height: 100vh;
            background: url('https://static.vecteezy.com/ti/vetor-gratis/p3/6208220-fundo-de-abstrato-azul-com-forro-dourado-gratis-vetor.jpg');
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: center; 
        }
</style>
</body>
</html>