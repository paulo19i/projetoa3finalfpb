<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Login</title>
</head>
<body>
    <center>

    <style>
        @import url('https://fonts.googleapis.com/css2?family= Open+Sans:wght@300;400;500 & display =swap');
        *{
            color:#fff;
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
            width: 700px;
            background:#d7d7d748;
            border-radius: 10px;
            border-color: 0.1px;
            box-shadow: 0px, 8px, 10px rgba(0, 0, 0, 0.5);
        }
        h1{
            color: #fff;
            font-weight: bolder;
            font-size: 45px;
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
        .mySenha{
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
            padding:6px 14px;
            text-decoration:none;
            text-shadow:0px 1px 0px #ffffff;
        }
        .mySenha:hover {
            background:linear-gradient(to bottom, #ccc2a6 5%, #eae0c2 100%);
            background-color:#ccc2a6;
        }
        .mySenha:active {
            position:relative;
            top:1px;
        }
        .myLogin{
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
            padding:6px 14px;
            text-decoration:none;
            text-shadow:0px 1px 0px #ffffff;
        }
        .myLogin:hover {
            background:linear-gradient(to bottom, #ccc2a6 5%, #eae0c2 100%);
            background-color:#ccc2a6;
        }
        .myLogin:active {
            position:relative;
            top:1px;
        }
    </style>
        
        <h1>LOGIN</h1>
        <form id="login" action="logado.php" method="POST">
            <p>Login: <input class='myLogin' type="text" name="login" required></p><br>
            <p>Senha: <input class='mySenha' type="password" name="senha" required></p><br><br>
            <input class="myButton" type="submit" id="entrar" value="Entrar">
        </form>
    </center>
</body>
</html>