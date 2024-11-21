<?php
require_once 'clsEquipe.php';
if (isset($_GET['id'])) {
	$id = $_GET['id'];

	$equipe = new clsEquipe();

	if ($equipe->excluir($id)) {
		header('Location: pages/equipes.php');
		exit;
	} else {
		echo "Erro ao remover o equipe.";
	}
} else {
	echo "ID da equipe não encontrado.";
}
