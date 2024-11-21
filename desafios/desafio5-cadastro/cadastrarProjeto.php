<?php
require_once './clsProjeto.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$nome = $_POST['nome'];
	$salario = $_POST['salario'];
	$equipe_id = $_POST['slcEquipe'];

	if (!empty($nome) && !empty($salario) && !empty($equipe_id)) {
		$projeto = new clsProjeto();
		$inserido = $projeto->inserir($nome, $salario, $equipe_id);

		if ($inserido) {
			header('Location: pages/projetos.php');
			exit;
		} else {
			echo "<p>Erro ao cadastrar projeto. Tente novamente.</p>";
		}
	} else {
		echo "<p>Todos os campos são obrigatórios.</p>";
	}
}
