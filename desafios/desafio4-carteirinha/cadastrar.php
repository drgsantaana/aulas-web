<?php

$nome = $_POST['txtNome'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$data = date('d/m/Y', strtotime($_POST['txtData']));
$foto = 'images/default.png';

if (!isset($_FILES['foto'])) {
	$foto = $_FILES['foto'];
}


echo 'alert("Cadastro realizado com sucesso!");';
