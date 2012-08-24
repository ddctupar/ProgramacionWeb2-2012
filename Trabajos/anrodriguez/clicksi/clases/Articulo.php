<?php
class Articulo {
	
	private $id;
	private $nombre;
	private $rubro;
	private $precio_venta;
	private $imagen_path;
			
	public function setId($id) {
		$this->id = $id;
	}
	
	public function setNombre($nombre) {
		$this->nombre = $nombre;
	}
	
	public function setRubro($rubro) {
		$this->rubro = $rubro;
	}
	
	public function setPrecioVenta($precio) {
		$this->precio_venta = $precio;
	}
	
	public function setPathImagen($path) {
		$this->imagen_path = $path;
	}

	public function getId() {
		return $this->id;
	}
	
	public function getNombre() {
		return $this->nombre;
	}
	
	public function getRubro() {
		return $this->rubro;
	}
	
	public function getPrecioVenta() {
		return $this->precio_venta;
	}
	
	public function getPathImagen() {
		if ($this->imagen_path=='')
			return 'imagenNoDisponible.jpg';
		else
			return $this->imagen_path;
	}
}

?>