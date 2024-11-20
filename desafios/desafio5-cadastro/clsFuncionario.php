<?php
require_once 'clsConexao.php';

class clsFuncionario {
	private $conexao;

	public function __construct() {
		$this->conexao = clsConexao::getInstancia();
	}

	public function inserir($nome, $email) {
		$sql = "INSERT INTO tb_funcionario (nome, email) VALUES (?, ?)";
		$parametros = [$nome, $email];
		$stmt = $this->conexao->executarConsulta($sql, $parametros);
		return $stmt->affected_rows > 0;
	}

	public function selecionarTodos() {
		$sql = "SELECT * FROM tb_funcionario";
		$stmt = $this->conexao->executarConsulta($sql);
		$resultado = $stmt->get_result();
		return $resultado->fetch_all(MYSQLI_ASSOC);
	}

	public function excluir($id) {
		$sql = "DELETE FROM tb_funcionario WHERE id = ?";
		$parametros = [$id];
		$stmt = $this->conexao->executarConsulta($sql, $parametros);
		return $stmt->affected_rows > 0;
	}
}
