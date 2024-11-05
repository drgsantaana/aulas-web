<!-- ##############################
Nome: Daniel Reis
Curso: Engenharia de Computação - IFMG - Campus Bambui
Descrição: Processamento dos dados dos componentes HTML
############################## -->

<?php

//captura de variaveis
$codigoEscondido = $_POST['hddCodigo'];
$codigo = $_POST['txtCodigo'];
$nome = 'Nome nao informado';
if (!empty($_POST['txtNome'])) {
	$nome = trim($_POST['txtNome']);  //trim para cortar os espaços vazios nas laterais
}

$senha = 'Senha nao informada';
if (isset($_POST[$senha])) {  //verifica se variavel existe na url
	$senha = $_POST['txtSenha'];
}

$email = trim($_POST['txtEmail']);

$dataNascimento = 'Data de nascimento nao informada ou invalida';
if (!empty($_POST['txtDataNasc'])) {  //verifica se variavel existe na url
	$dataNascimento = date('d/m/Y', strtotime($_POST['txtDataNasc']));
}

$arquivo = $_FILES['txtArquivo'];

$renda = 'Renda nao informada';
if (!empty($_POST['rdbRenda'])) {  //verifica se variavel existe na url
	$renda = $_POST['rdbRenda'];
}

$musica = [];
if (isset($_POST['chkLofi'])) {
	array_push($musica, 'Lofi');
};
if (isset($_POST['chkRock'])) {
	array_push($musica, 'Rock');
};
if (isset($_POST['chkSamba'])) {
	array_push($musica, 'Samba');
};
if (isset($_POST['chkPagode'])) {
	array_push($musica, 'Pagode');
};

$mensagem = $_POST['txtMensagem'];

$refrigerante = 'Pouco';
if ($_POST['slcRefrigerante'] == 2) {
	$refrigerante = 'Maromeno';
};
if ($_POST['slcRefrigerante'] == 3) {
	$refrigerante = 'Muito';
};


$faixaEtaria = 'Não gostaria de informar';
if ($_POST['slcFaixaEtaria'] == 1) {
	$faixaEtaria = 'Menos que 18 anos';
};
if ($_POST['slcFaixaEtaria'] == 2) {
	$faixaEtaria = 'Entre 18 anos e 50 anos';
};
if ($_POST['slcFaixaEtaria'] == 3) {
	$faixaEtaria = 'Passei da data de validade';
};



$listaDeCompras = ["Lista vazia"];
if (isset($_POST['slcListaDeCompras'])) {
	$listaDeCompras = $_POST['slcListaDeCompras'];
};

$medio = 'Materia nao informada';
if (!empty($_POST['rdbMedio'])) {  //verifica se variavel existe na url
	$medio = $_POST['rdbMedio'];
}
$tecnico = 'Materia nao informada';
if (!empty($_POST['rdbTecnico'])) {  //verifica se variavel existe na url
	$tecnico = $_POST['rdbTecnico'];
}


//exibicao de variaveis
echo 'Codigo escondido: ' . $codigoEscondido . '<br>';
echo 'Codigo: ' . $codigo . '<br>';
echo 'Nome: ' . $nome . '<br>';
echo 'Senha: ' . $senha . '<br>';
echo 'Email: ' . $email . '<br>';
echo 'Data de nascimento: ' . $dataNascimento . '<br>';
// print_r($arquivo);  //print de um array
echo 'Nome do arquivo: ' . $arquivo['name'] . ' - ' . ' Tamanho: ' . $arquivo['size'] . 'kb' . '<br>';

if ($renda == 1) {
	echo 'Renda: Menos que 1 salario minimo <br>';
} elseif ($renda == 2) {
	echo 'Renda: 1 salario minimo <br>';
} else {
	echo 'Renda: Mais que 1 salario minimo <br>';
}

echo 'Estilo Musical: ';
foreach ($musica as $item) {
	echo $item . " ";
}
echo '<br>';

echo 'A mensagem digitada foi: ' . $mensagem . '<br>';

echo 'Voce gosta ' . $refrigerante . ' de refrigerante' . '<br>';

echo 'Faixa etaria: ' . $faixaEtaria . '<br>';

echo 'Lista de compras:';
echo '<ul>';
foreach ($listaDeCompras as $item) {
	echo '<li>' . $item . '</li>';
}
echo '</ul>';

echo 'Materias favoritas: <br> ';
echo 'Ensino medio: ' . $medio . '<br>';
echo 'Ensino tecnico: ' . $tecnico . '<br>';
