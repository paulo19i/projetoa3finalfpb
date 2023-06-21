<?php
include("conexao.php");

$query = "SELECT nome FROM login";
$resultado = mysqli_query($conexao, $query);

if ($resultado) {
    echo "<h1>Lista de Usuários Cadastrados</h1>";
    echo "<ul>";
    while ($row = mysqli_fetch_assoc($resultado)) {
        echo "<li>" . $row['nome'] . "</li>";
    }
    echo "</ul>";
} else {
    echo "Erro ao recuperar os usuários cadastrados.";
}

mysqli_close($conexao);
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

            font-family: 'Open Sans', sans-serif;
        }
        body{
            height: 100vh;
            background: #033C85;
            background-size: 200%;
            align-items: center;
            justify-content: center;
    }
        *{
            color:#fff;
            align-items: center;
            justify-content: center;
        }

</style>
</body>
</html>