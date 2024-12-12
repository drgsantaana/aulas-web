<?php

include 'components/navbar.php';
require_once 'clsFuncionario.php';
require_once 'clsEquipe.php';
$funcionario = new clsFuncionario();
$equipe = new clsEquipe();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<link rel="shortcut icon" href="./assets/icon.svg" type="image/svg">
	<title>Desafio 5</title>

	<style>
		img {
			width: 20px;
			height: 20px;
			margin: 0 32px 0 16px;
		}

		button {
			display: flex;
			justify-content: left;
			align-items: center;
			width: 200px;
		}
	</style>
</head>

<body>
	<?php
	renderNavbar();
	?>

	<div class="container">
		<h1>Menu de Ações</h1>
		<button class="btnMenu" onclick="window.location.href='./pages/cadastroFuncionario.php'"><img src="./assets/user.svg" alt="User">Cadastro de Funcionários</button>
		<button class="btnMenu" onclick="window.location.href='./pages/cadastroEquipe.php'"><img src="./assets/team.svg" alt="Team">Cadastro de Equipes</button>
		<button class="btnMenu" onclick="window.location.href='./pages/cadastroProjeto.php'"><img src="./assets/project.svg" alt="Project">Cadastro de Projetos</button>

	</div>
</body>

</html>