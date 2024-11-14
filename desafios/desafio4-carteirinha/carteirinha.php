<?php
session_start();

if (isset($_SESSION['txtNome'], $_SESSION['txtEmail'], $_SESSION['txtCpf'], $_SESSION['txtData'], $_SESSION['imgRecorte'])) {

	$nome = $_SESSION['txtNome'];
	$email = $_SESSION['txtEmail'];
	$cpf = $_SESSION['txtCpf'];
	$data = $_SESSION['txtData'];
	$imgRecorte = $_SESSION['imgRecorte'];

	echo "<div class='container'>
        
    <div class='carteirinha'>
        <div class='carteirinha-header'>
            <h2>IFMG CAMPUS BAMBUI</h2>
        </div>
        <div class='carteirinha-body'>
            <div class='carteirinha-info'>
                <p><strong>Nome:</strong> $nome</p>
                <p><strong>Email:</strong> $email</p>
                <p><strong>CPF:</strong> $cpf</p>
                <p><strong>Data de Nascimento:</strong> $data</p>
            </div>
            <div class='carteirinha-foto'>
                <img src='$imgRecorte' alt='Foto do Usuário'>
            </div>
        </div>
        <div class='carteirinha-footer'>
            <p>Carteirinha Validada</p>
        </div>
    </div>
    </div>
    ";

	session_unset();
	session_destroy();
} else {
	echo "<div class='container'> Nenhum dado encontrado. Por favor, faça o cadastro novamente. </div>";
}
?>

<style>
    body {
        background: rgb(174, 238, 214);
        background: radial-gradient(circle, rgba(174, 238, 214, 1) 0%, rgba(148, 233, 153, 1) 100%);
    }

    .carteirinha {
        width: 400px;
        height: 250px;
        border: 2px solid #333;
        border-radius: 10px;
        padding: 20px;
        font-family: Arial, sans-serif;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        background-color: #fff;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .carteirinha-header h2 {
        text-align: center;
        margin: 0;
        font-size: 20px;
        color: #333;
    }

    .carteirinha-body {
        display: flex;
        justify-content: space-between;
    }

    .carteirinha-info {
        width: 60%;
    }

    .carteirinha-info p {
        margin: 5px 0;
    }

    .carteirinha-foto img {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        object-fit: cover;
        border: 2px solid #333;
    }

    .carteirinha-footer {
        text-align: center;
        margin-top: 10px;
        font-weight: bold;
        color: green;
    }

    .container {
        flex-direction: column;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
</style>