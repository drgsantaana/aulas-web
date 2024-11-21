<?php
require_once 'clsFuncionario.php';
if (isset($_GET['id'])) {
	$id = $_GET['id'];

	$funcionario = new clsFuncionario();

	if ($funcionario->excluir($id)) {
		header('Location: pages/funcionarios.php');
		exit;
	} else {
		echo "Erro ao remover o funcionário.";
	}
} else {
	echo "ID do funcionário não encontrado.";
}
