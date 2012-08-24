<?php
class Mysqldb {
	private $servidor;
	private $usuario;
	private $password;
	private $basedatos;
	private $conectID;
	private $link;
	private $query;
	private $result;
	
	
	function Mysqldb($servidor, $usuario, $password="", $basedatos=""){
		$this->servidor 	= $servidor;
		$this->usuario 		= $usuario;
		$this->password 	= $password;
		$this->basedatos	= $basedatos;

		$this->conectID 	= mysql_connect($this->servidor, $this->usuario, $this->password);
		if (!$this->conectID) {
			die('Imposible conectar al servidor MySql: ' . mysql_error());
		}
		$this->link			= mysql_select_db($this->basedatos); 
		}

	function setdb($basedatos){
		$this->basedatos	= $basedatos;
	}
	
	function execquery($q) {
		$this->query = $q;
		$this->result = mysql_query($this->query) or die ('Imposible ejecutar consulta: '.mysql_error());
		return $this->result;
	}
	
	function getCountRow() {
		return mysql_num_rows($this->result);
	}
	
	function closedb() {
		mysql_close($this->conectID) or die('Imposible desconectar del servidor MySql: '.mysql_error()); 	
	}
}