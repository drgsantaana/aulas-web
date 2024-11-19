<?php
require_once 'clsAnimal.php';
$animal = new clsAnimal();

echo "<html><body><center>";

echo '<h2>O QUE QUER FAZER?</h2>';
echo '<a href="?acao=inserir">INSERIR UM DADO NO BANCO DE DADOS</a><br>';
echo '<a href="?acao=consultar">EXECUTAR UMA CONSULTA NO BANCO DE DADOS</a><br>';
echo '<a href="?acao=listar">EXIBIR CONSULTA NA FORMA DE TABELA</a><br>';
echo '</center><br>';

$acao = $_GET['acao'] ?? '';

switch ($acao) {
	case 'inserir':
		$animal->inserir("Rodrigo Oliveira", 2, 'Vira-lata');
		$animal->inserir("David Riley", 1, 'Vira-lata');
		$animal->inserir("Francisco Fuller", 7, 'Vira-lata');
		$animal->inserir("Martha Simmons", 6, 'Vira-lata');
		$animal->inserir("Howard Foster", 10, 'Vira-lata');
		$animal->inserir("Maria Massey", 10, 'Vira-lata');
		echo 'Registro inserido com sucesso';
		break;

	case 'consultar':
		$registros = $animal->selecionarTodos();
		if ($registros) {
			foreach ($registros as $linha) {
				echo 'Id: ' . htmlspecialchars($linha['id']) . '<br>';
				echo 'Nome: ' . htmlspecialchars($linha['nome']) . '<br>';
				echo 'Idade: ' . htmlspecialchars($linha['idade']) . '<br>';
				echo 'Raça: ' . htmlspecialchars($linha['raca']) . '<br><br>';
			}
		} else {
			echo 'Nenhum registro encontrado.';
		}
		break;

	case 'listar':
		$registros = $animal->selecionarTodos();
		if ($registros) {
			echo '<table border="1px">';
			echo '<tr><th>ID</th><th>Nome</th><th>Idade</th><th>Raça</th><th>Ação</th></tr>';
			foreach ($registros as $linha) {
				echo '<tr>';
				echo '<td>' . htmlspecialchars($linha['id']) . '</td>';
				echo '<td>' . htmlspecialchars($linha['nome']) . '</td>';
				echo '<td>' . htmlspecialchars($linha['idade']) . '</td>';
				echo '<td>' . htmlspecialchars($linha['raca']) . '</td>';
				echo '<td><a href="?acao=excluir&id=' . urlencode($linha['id']) . '">APAGAR</a></td>';
				echo '</tr>';
			}
			echo '</table>';
		} else {
			echo 'Nenhum registro encontrado.';
		}
		break;

	case 'excluir':
		$id = $_GET['id'] ?? 0;
		if ($animal->excluir($id)) {
			echo 'Registro apagado com sucesso';
		} else {
			echo 'Problema ao apagar o registro.';
		}
		break;

	default:
		echo '<p>Escolha uma opção do menu acima.</p>';
		break;
}

echo "</body></html>";
