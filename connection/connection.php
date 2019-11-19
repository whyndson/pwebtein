<?php

class Connection{

	var $host = "localhost";
	var $user = "root";
	var $password = "";
	var $database = "quiz";
	var $connection;

	function __construct(){
		$this->connection = new PDO("mysql:host=$this->host;dbname=$this->database", $this->user, $this->password);
	}

	function getConnection(){
		return $this->connection;
	}
}

?>