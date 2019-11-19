<?php

require_once "../connection/Connection.php";

class OcorrenciaDAO{

	var $connection;

	function __construct(){
		$this->connection = new Connection();
	}

	function inserir($usuario){
		$stmt = $this->connection->getConnection()->prepare("INSERT INTO usuario(idade, peso, altura, curso, facilidade, frequenciaCardiaca) VALUES (:idade, :peso, :altura, :curso, :facilidade, :frequenciaCardiaca)");

		$idade = $usuario->getIdade();
		$peso = $usuario->getPeso();
		$altura = $usuario->getAltura();
		$curso = $usuario->getCurso();
		$facilidade = $usuario->getFacilidade();
		$frequenciaCardiaca = $usuario->getFrequenciaCardiaca();

		$stmt->bindParam(':idade', $idade);
		$stmt->bindParam(':peso', $peso);
		$stmt->bindParam(':altura', $altura);
		$stmt->bindParam(':curso', $curso);
		$stmt->bindParam(':facilidade', $facilidade);
		$stmt->bindParam(':frequenciaCardiaca', $frequenciaCardiaca);

		$stmt->execute();
	}
/*
	function getAll(){
		$stmt = $this->connection->getConnection()->prepare("SELECT * FROM ocorrencias ORDER BY dataCadastro DESC");
		$stmt->execute();
		return $stmt->fetchAll();
	}

	function getById($id){
		$stmt = $this->connection->getConnection()->prepare("SELECT * FROM ocorrencias WHERE id = :id");
		$stmt->bindParam(':id', $id);
		$stmt->execute();

		return $stmt->fetch();
	}
*/
}

?>