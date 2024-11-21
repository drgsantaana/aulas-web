<?php
require_once './clsFuncionario.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$equipe_id = $_POST['slcEquipe'];

	if (!empty($nome) && !empty($email) && !empty($equipe_id)) {
		$funcionario = new clsFuncionario();
		$inserido = $funcionario->inserir($nome, $email, $equipe_id);

		if ($inserido) {
			header('Location: pages/funcionarios.php');
			exit;
		} else {
			echo "<p>Erro ao cadastrar funcionário. Tente novamente.</p>";
		}
	} else {
		echo "<p>Todos os campos são obrigatórios.</p>";
	}
}
