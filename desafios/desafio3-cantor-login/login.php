<?php
session_start();
if (isset($_POST['btnEntrar'])) {
	if ($_POST['txtUsuario'] == 'daniel' && $_POST['txtSenha'] == 'luanzete') {
		$_SESSION['login'] = 'daniel';
		header('location:home.php');
	}
	if ($_POST['txtUsuario'] == 'brunogostoso' && $_POST['txtSenha'] == 'manoelgomes') {
		$_SESSION['login'] = 'brunogostoso';
		header('location:home.php');
	} else {
		$_SESSION['erro'] = 'Login ou senha incorretos';
		header('location:index.php');
	}
} else {
	header('location:index.php');
}
