<?php
require_once './clsEquipe.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$nome = $_POST['nome'];

	if (!empty($nome)) {
		$equipe = new clsEquipe();
		$inserido = $equipe->inserir($nome);

		if ($inserido) {
			header('Location: pages/equipes.php');
			exit;
		} else {
			echo "<p>Erro ao cadastrar equipe. Tente novamente.</p>";
		}
	} else {
		echo "<p>Todos os campos são obrigatórios.</p>";
	}
}
