<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// executando a conexao e selecionando o banco
$conexao = mysqli_connect('localhost', 'root', '', 'bd_teste');

// verifica conexao
if (!$conexao) {
	die('Erro de conexão: ' . mysqli_connect_errno());
};

// executando consulta
$sql = 'SELECT * FROM tb_pessoa;';
$tabela = mysqli_query($conexao, $sql) or die('Erro na consulta: ' . mysqli_error($conexao));

if (mysqli_num_rows($tabela) > 0) {
	echo '<table border="1px">';
	echo '<tr><th>ID</th><th>Nome</th><th>Idade</th><th>Ação</th></tr>';

	while ($linha = mysqli_fetch_row($tabela)) {
		echo '<tr>';
		echo '<td>' . $linha[0] . '</td>';
		echo '<td>' . $linha[1] . '</td>';
		echo '<td>' . $linha[2] . '</td>';
		echo '<td><a href="apagar.php?id=' . $linha[0] . '">Apagar</a></td>';
		echo '</tr>';
	}
	echo '</table>';
} else {
	echo 'Nenhum registro encontrado';
}
