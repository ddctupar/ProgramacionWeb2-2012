<?php

class Consulta {
	private $id			= null;
	private $razonSocial	= null;
	private $email			= null;
	private $telefono		= null;
	private $localidad		= null;
	private $motivo		= null;
	private $comentario	= null;
	private $fechaIngreso	= null;
	private $fechaEgreso	= null;
	private $estado		= null;
	
	public function Consulta() {
	}

	public function setRazonSocial($razonSocial) {
		$this->razonSocial = $razonSocial;		
	}
	
	public function setEmail($email) {
		$this->email = $email;		
	}
	
	public function setTelefono($telefono) {
		$this->telefono = $telefono;		
	}
	
	public function setLocalidad($localidad) {
		$this->localidad = $localidad;		
	}
	
	public function setMotivo($motivo) {
		$this->motivo = $motivo;		
	}
	
	public function setComentario($comentario) {
		$this->comentario = $comentario;		
	}
	
	public function setFechaIngreso($fecha) {
		$this->fechaIngreso = $fecha;		
	}
	
	public function setFechaEgreso($fecha) {
		$this->fechaEgreso = $fecha;		
	}
	
	public function setEstado($estado) {
		$this->estado = $estado;		
	}
	
	public function getRazonSocial() {
		return $this->razonSocial;		
	}
	
	public function getEmail() {
		return $this->email;		
	}
	
	public function getTelefono() {
		return $this->telefono;		
	}
	
	public function getLocalidad() {
		return $this->localidad;		
	}
	
	public function getMotivo() {
		return $this->motivo;		
	}
	
	public function getComentario() {
		return $this->comentario;		
	}
	
	public function getFechaIngreso() {
		return $this->fechaIngreso;		
	}
	
	public function getFechaEgreso() {
		return $this->fechaEgreso;		
	}
	
	public function getEstado() {
		return $this->estado;		
	}
}	
?>