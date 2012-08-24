<?php
include_once './clases/Usuario.php';
include_once './clases/Rubro.php';
include_once './clases/Articulo.php';
include_once './clases/Consulta.php';

class DbManager {
	private $conexion;
	
	
	function DbManager($conexion) {
		$this->conexion = $conexion;	
	}
	
	function getAllRubros() {
		
		$resulset = array();

		$query=consulta('rubro','');
		$result=$this->conexion->execquery($query);
		
		while ($row = mysql_fetch_array($result)) {
			$rubro = new Rubro();
			$rubro->setId($row['id']);
			$rubro->setNombre($row['nombre']);
			$resulset[] = $rubro;			
		} 
	
		return $resulset;
	}
	
	function getRubroById($idRubro) {
		
		$query=consulta('rubroById',$idRubro);
		$result=$this->conexion->execquery($query);
		
        $row = mysql_fetch_array($result);
		
        if($row) {
			$rubro = new Rubro();
			$rubro->setId($row['id']);
			$rubro->setNombre($row['nombre']);
			return $rubro;
		} else 
			return $rubro;
	}
	
	
	function getProductosByRubro($rubro) {
		
		$resulset = array();

		$query=consulta('producto',$rubro);
		
		$result=$this->conexion->execquery($query);
		
		while ($row = mysql_fetch_array($result)) {
			$articulo = new Articulo();
			$articulo->setId($row['id_articulo']);
			$articulo->setNombre($row['nombre_articulo']);
			$articulo->setRubro($row['id_rubro']);
			$articulo->setPrecioVenta($row['precio_venta']);
			$articulo->setPathImagen($row['imagen_path']);
			$resulset[] = $articulo;			
		} 
		return $resulset;
	}

	function getProductoById($idArticulo) {
		
		$query=consulta('productoById',$idArticulo);
		$result=$this->conexion->execquery($query);
		$row = mysql_fetch_array($result);
		if($row) {
			$articulo = new Articulo();
			$articulo->setId($row['id']);
			$articulo->setNombre($row['nombre']);
			$articulo->setRubro($row['id_rubro']);
			$articulo->setPrecioVenta($row['precio_venta']);
			$articulo->setPathImagen($row['imagen_path']);
			return $articulo;
		} else 
			return $articulo;
	}
	
	
	function getUsuarioById($id) {

		$query=consulta('usuario',$id);
		$result=$this->conexion->execquery($query);
		
        $row = mysql_fetch_array($result);
	
        if ($row) {
			$usuario = new Usuario();
			$usuario->setApellidoNombre($row['apellido'], $row['nombre']);
			$usuario->setEmail($row['email']);
			$usuario->setPassword($row['password']);
			return $usuario;
		} else
			return null;
	}


	function insertConsulta($consulta) {
				
		$query ="INSERT INTO consulta (razonsocial, email, telefono, localidad, motivo, comentario) VALUES (".
				"'".$consulta->getRazonSocial()."',".
				"'".$consulta->getEmail()."',".
				"'".$consulta->getTelefono()."',".
				"'".$consulta->getLocalidad()."',".
					$consulta->getMotivo().",".
				"'".$consulta->getComentario()."'".
				");";
		
		return $this->conexion->execquery($query);
		
	}

	function updateRubro($rubro) {

		$query ="UPDATE rubro SET nombre='".$rubro->getNombre()."'".
				" WHERE id=".$rubro->getId();
		return $this->conexion->execquery($query);
		
	}
	
	function updateProducto($producto) {

		$query ="UPDATE articulo SET nombre='".$producto->getNombre()."'".
				" WHERE id=".$producto->getId();
		return $this->conexion->execquery($query);
		
	}
	
	
}