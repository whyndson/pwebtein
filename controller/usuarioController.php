<?php

require_once "../dao/usuarioDAO.php";

class UsuarioController{

	var $usuarioDAO;

	function __construct(){
		$this->usuarioDAO = new usuarioDAO();
	}

	function inserir($usuario){
		$this->usuarioDAO->inserir($usuario);
	}

	function getAll(){
		return $this->usuarioDAO->getAll();
	}

}

?>