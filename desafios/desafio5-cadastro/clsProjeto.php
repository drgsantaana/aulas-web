<?php
require_once 'clsConexao.php';

class clsProjeto {
	private $conexao;

	public function __construct() {
		$this->conexao = clsConexao::getInstancia();
	}

	public function inserir($nome, $salario, $equipe_id) {
		$sql = "INSERT INTO tb_projeto (nome, salario, equipe_id) VALUES (?, ?, ?)";
		$parametros = [$nome, $salario, $equipe_id];
		$stmt = $this->conexao->executarConsulta($sql, $parametros);
		return $stmt->affected_rows > 0;
	}

	public function selecionarTodos() {
		$sql = "SELECT * FROM tb_projeto";
		$stmt = $this->conexao->executarConsulta($sql);
		$resultado = $stmt->get_result();
		return $resultado->fetch_all(MYSQLI_ASSOC);
	}

	public function excluir($id) {
		$sql = "DELETE FROM tb_projeto WHERE id = ?";
		$parametros = [$id];
		$stmt = $this->conexao->executarConsulta($sql, $parametros);
		return $stmt->affected_rows > 0;
	}
}
