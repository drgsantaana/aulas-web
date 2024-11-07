<?php
session_start();

$mensagem = 'Faca seu login no sistema';

if (isset($_SESSION['erro'])) {
	$mensagem = 'Essa senha ja pertence ao usuario "BrunoGostoso" tente novamente.';
}
if (isset($_SESSION['login'])) {
	header('location:robson.php');
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DESAFIO 3</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>
            <?php echo $mensagem; ?>
        </h1>
        <div class="formlogin">
            <form action="login.php" method="post">
                Usuario:<input type="text" name="txtUsuario" placeholder="Digite seu usuario">
                Senha:<input type="password" name="txtSenha" placeholder="Digite sua senha">

                <input type="submit" name="btnEntrar">
            </form>


        </div>

    </div>

</body>

</html>