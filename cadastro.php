<?php
include("conexao.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = isset($_POST['nome']) ? $_POST['nome'] : '';
    $login = isset($_POST['login']) ? $_POST['login'] : '';
    $senha = isset($_POST['senha']) ? $_POST['senha'] : '';

    $verificarLogin = "SELECT * FROM login WHERE login = '$login'";
    $resultado = mysqli_query($conexao, $verificarLogin);

    if (mysqli_num_rows($resultado) > 0) {
        echo "O nome de login '$login' já está em uso. Por favor, escolha outro.";
    } else {
        $insert = "INSERT INTO login (nome, login, senha) VALUES ('$nome', '$login', '$senha')";
        if (mysqli_query($conexao, $insert)) {
            header('Location: index.php');
            exit();
        } else {
            echo "Erro ao cadastrar usuário: " . mysqli_error($conexao);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <center>
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
        form{
            display: flex;
            align-items: center;
            justify-content: space-around;
            height: 200px;
            width: 900px;
            background:#d7d7d748;
            border-radius: 10px;
            border-color: 0.1px;
            box-shadow: 0px, 8px, 10px rgba(0, 0, 0, 0.5);
        }
        .myButton {
            box-shadow: 0px 1px 0px 0px #1c1b18;
            background:linear-gradient(to bottom, #eae0c2 5%, #ccc2a6 100%);
            background-color:#eae0c2;
            border-radius:15px;
            border:1px solid #333029;
            display:inline-block;
            cursor:pointer;
            color:#505739;
            font-family:Arial;
            font-size:14px;
            font-weight:bold;
            padding:6px 10px;
            text-decoration:none;
            text-shadow:0px 1px 0px #ffffff;
        }
        .myButton:hover {
            background:linear-gradient(to bottom, #ccc2a6 5%, #eae0c2 100%);
            background-color:#ccc2a6;
        }
        .myButton:active {
            position:relative;
            top:1px;
        }
        h1{
            color:#fff;
        }
        p{
            color:#fff;
            font-size: 15px;
            font-weight: bolder;
        }
        </style>

        <h1>Cadastro</h1>
        <form id="cadastro" action="cadastro.php" method="POST">
            <p>Nome: <input class='myButton' type="text" name="nome" required></p><br>
            <p>Login: <input class='myButton' type="text" name="login" required></p><br>
            <p>Senha: <input class='myButton' type="password" name="senha" required></p><br><br>
            <input class='myButton' type="submit" value="Cadastrar">
        </form>
    </center>
</body>
</html>