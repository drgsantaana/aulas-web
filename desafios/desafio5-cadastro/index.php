<?php
require_once 'clsFuncionario.php';
require_once 'clsEquipes.php';
$funcionario = new clsFuncionario();
$equipe = new clsEquipe();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Desafio 5</title>
</head>

<body>
	<div class="container">
		<h1>Desafio 5</h1>
		<div class="main-container">
			<div class="column">
				<a href="?acao=inserirFuncionario" class="card">
					<h2>Inserir Funcionário</h2>
					<p>Clique aqui para inserir um novo funcionário</p>
				</a>
				<a href="?acao=consultarFuncionario" class="card">
					<h2>Consultar Funcionário</h2>
					<p>Clique aqui para consultar os funcionários cadastrados</p>
				</a>
				<a href="?acao=inserirEquipe" class="card">
					<h2>Inserir Equipe</h2>
					<p>Clique aqui para inserir uma nova equipe</p>
				</a>
				<a href="?acao=consultarEquipe" class="card">
					<h2>Consultar Equipe</h2>
					<p>Clique aqui para consultar as equipes cadastradas</p>
				</a>
			</div>
		</div>
	</div>
</body>

</html>