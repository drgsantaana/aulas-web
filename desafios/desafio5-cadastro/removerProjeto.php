<?php
require_once 'clsProjeto.php';
if (isset($_GET['id'])) {
	$id = $_GET['id'];

	$funcionario = new clsProjeto();

	if ($funcionario->excluir($id)) {
		header('Location: pages/projetos.php');
		exit;
	} else {
		echo "Erro ao remover o projeto.";
	}
} else {
	echo "ID do projeto não encontrado.";
}
