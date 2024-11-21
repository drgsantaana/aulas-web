<?php
require_once '../components/navbar.php';
require_once '../clsEquipe.php';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/icon.svg" type="image/svg">
    <link rel="stylesheet" href="../style.css">
    <title>Desafio 5</title>
    <style>
        form {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        form input,
        form select,
        form button {
            margin: 10px;
            padding: 10px;
            width: 300px;
            border-radius: 5px;
            border: 1px solid #5865F2;
        }

        button {
            background-color: #5865F2;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #4752C4;
        }
    </style>
</head>

<body>
    <?php
	renderNavbar();
	?>
    <div class="container">

        <h1>Cadastro de Equipe</h1>

        <form method="POST" action="../cadastrarEquipe.php">
            <input type="text" name="nome" placeholder="Nome da Equipe" required />

            <button type="submit">Cadastrar</button>
        </form>

    </div>
</body>

</html>