<?php
require_once('../controle/clsConexao.php');
require_once('clsComum.php');

class clsPerfil extends clsComum {
	function __construct() {
	}

	public function pegaCategoria() {
		$conexao = new clsConexao();
		$perfis = $conexao->executaSQL('SELECT * from tb_categoria;');
		return $perfis;
	}

	public function pegaCategoriaPorId($id) {
		$conexao = new clsConexao();
		$sql = "SELECT nome_perfil FROM tb_categoria WHERE id_categoria=" . $id . ";";

		$tabela = $conexao->executaSQL($sql);
		$nome_categoria = '';

		while ($linha = mysqli_fetch_row($tabela)) {
			$nome_categoria = $linha[0];
		}

		return $nome_categoria;
	}
}
