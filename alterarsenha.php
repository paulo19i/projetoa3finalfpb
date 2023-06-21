<?php
session_start();


if (!isset($_SESSION['nome'])) {
    header("Location: login.php"); 
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $conexao = mysqli_connect('localhost', 'root', '', 'bdprojetoa3','3306');

    if (!$conexao) {
        die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
    }

    $novasenha = $_POST['nova_senha'];
    $confirmarsenha = $_POST['confirmar_senha'];

    if ($novasenha !== $confirmarsenha) {
        die("A nova senha e a confirmação da senha não correspondem.");
    }

    $nomeUsuario = $_SESSION['nome']; 
    $senhaHash = $novasenha;

    $sql = "UPDATE login SET senha = '$senhaHash' WHERE nome = '$nomeUsuario'";
    if (mysqli_query($conexao, $sql)) {
        echo "Senha atualizada com sucesso!";
        echo '<br><br>';
        echo '<a href="login.php">Voltar para a página de login</a>';
    } else {
        echo "Erro ao atualizar a senha: " . mysqli_error($conexao);
    }

    mysqli_close($conexao);
}
?>

<html>
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
            color: #fff;
        }
        p{
            color: #fff;
            font-weight: bolder;
            font-size: 15px;
        }
        </style>
   <h1>Alterar Senha</h1>
   <form method="POST" action="alterarsenha.php">
       <label for="nova_senha"><p>Nova senha:</p></label>
       <input class='myButton' type="password" name="nova_senha" id="nova_senha" required>

       <label for="confirmar_senha"><p>Confirmar nova senha:</p></label>
       <input class='myButton' type="password" name="confirmar_senha" id="confirmar_senha" required>

       <input class='myButton' type="submit" value="Alterar Senha">
   </form>
</center>
</body>
</html>