<?php
require_once 'clsConexao.php';

class clsAnimal {
	private $conexao;

	public function __construct() {
		$this->conexao = clsConexao::getInstancia();
	}

	public function inserir($nome, $idade, $raca) {
		$sql = "INSERT INTO tb_animal (nome, idade, raca) VALUES (?, ?, ?)";
		$parametros = [$nome, $idade, $raca];
		$stmt = $this->conexao->executarConsulta($sql, $parametros);
		return $stmt->affected_rows > 0;
	}

	public function selecionarTodos() {
		$sql = "SELECT * FROM tb_animal";
		$stmt = $this->conexao->executarConsulta($sql);
		$resultado = $stmt->get_result();
		return $resultado->fetch_all(MYSQLI_ASSOC);
	}

	public function excluir($id) {
		$sql = "DELETE FROM tb_animal WHERE id = ?";
		$parametros = [$id];
		$stmt = $this->conexao->executarConsulta($sql, $parametros);
		return $stmt->affected_rows > 0;
	}
}
