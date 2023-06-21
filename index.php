<?php
session_start();
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
        *{
            color:#fff;
            align-items: center;
            justify-content: center;
        }
        a{
            color:#fff;
            align-items: center;
            justify-content: center;
        }
        span{
            color:#fff;
            align-items: center;
            justify-content: center;
            font-weight: bolder;
            font-size: 45px;
        }
        p{
            font-weight: bolder;
            font-size: 20px;
        }
        $_SESSION{
            font-weight: bolder;
            font-size: 20px;
        }
</style>
        <?php if (isset($_SESSION['nome'])) {
            echo "Olá, " . $_SESSION['nome'] . "<br><br>";
            if ($_SESSION['nome'] === 'Administrador') {
                ?>
                <a href="cadastro.php"><p>Cadastrar Usuário</p></a><br><br>
                <a href="listar.php"><p>Listar Usuários</p></a><br><br>
                <?php
            }
            ?>
            <a href="alterarsenha.php"><p>Alterar Senha</p></a><br>
            <a href="logout.php"><p>Sair</p></a><br>
            <?php
        } else {
            ?>
            <span>Olá, Visitante.</span> <a href="login.php"><p>Login</p></a>
            <?php
        }
        ?>
    </center>
</body>
</html>