<?php

session_start();
if (isset($_POST['txtNome'], $_POST['txtEmail'], $_POST['txtCpf'], $_POST['txtData'])) {
	$nome = $_POST['txtNome'];
	$email = $_POST['txtEmail'];
	$cpf = $_POST['txtCpf'];
	$data = date('d/m/Y', strtotime($_POST['txtData']));

	$_SESSION['txtNome'] = $nome;
	$_SESSION['txtEmail'] = $email;
	$_SESSION['txtCpf'] = $cpf;
	$_SESSION['txtData'] = $data;

	$uploadDir = 'images/';
	$imgRecorte = 'assets/mascote.png';

	if (isset($_FILES['imgRecorte']) && $_FILES['imgRecorte']['error'] == UPLOAD_ERR_OK) {
		$file = $_FILES['imgRecorte'];

		$fileName = uniqid('img_', true) . '.png';
		$filePath = $uploadDir . $fileName;

		if (!is_dir($uploadDir)) {
			mkdir($uploadDir, 0755, true);
		}

		move_uploaded_file($file['tmp_name'], $filePath);

		$imgRecorte = $filePath;
	}

	$_SESSION['imgRecorte'] = $imgRecorte;

	echo json_encode(['redirectUrl' => 'carteirinha.php']);
} else {
	echo 'Dados incompletos.';
}
