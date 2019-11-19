<?php

public class Usuario(){

	private var idade;
	private var peso;
	private var altura;
	private var curso;
	private var facilidade;
	private var frequenciaCardiaca;

	function setIdade($idade){
		$this->idade = $idade;
	}

	function getIdade(){
		return $this->idade;
	}

	function setPeso($peso){
		$this->peso = $peso;
	}

	function getPeso(){
		return $this->peso;
	}

	function setAltura($altura){
		$this->altura = $altura;
	}

	function getAltura(){
		return $this->altura;
	}

	function setCurso($curso){
		$this->curso = $curso;
	}

	function getCurso(){
		return $this->curso;
	}

	function setFacilidade($facilidade){
		$this->facilidade = $facilidade;
	}

	function getFacilidade(){
		return $this->facilidade;
	}

	function setFrequenciaCardiaca($frequenciaCardiaca){
		$this->frequenciaCardiaca = $frequenciaCardiaca;
	}

	function getFrequenciaCardiaca(){
		return $this->frequenciaCardiaca;
	}

}

?>