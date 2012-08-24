<?php

class Usuario {
	private $apellido;
	private $nombre;
	private $email;
	private $password;
	
	public function Usuario() {
		$this->apellido = null;
		$this->nombre = null;
		$this->email = null;
		$this->password = null;
	}
	
	public function setApellido($apellido) {
		$this->apellido = $apellido;		
	}
	
	public function setNombre($nombre) {
		$this->nombre = $nombre;		
	}
	
	public function setApellidoNombre($apellido, $nombre) {
		$this->apellido = $apellido;
		$this->nombre	= $nombre;
	}

	public function setEmail($email) {
		$this->email = $email;		
	}
	
	public function setPassword($password) {
		$this->password = $password;		
	}
	
	public function getApellido() {
		return $this->apellido;
	}

	public function getNombre() {
		return $this->nombre;
	}

	public function getApellidoNombre() {
		return $this->apellido.' '.$this->nombre;
	}
	
	public function getEmail() {
		return $this->email;
	}
	
	public function validarPassword($par_contrasenia) {
		if ($this->password==md5(rtrim($par_contrasenia)))
			return true;
		else 
			return false;
	}
}	
?>