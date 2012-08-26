<?php
//include_once ('php/eDibujable.php');

class DBMySqlAcces {
	
	
	private $_dbhost;
	private	$_dbuser;
	private	$_dbpass;
	private	$_dbname;
	private $_link;
	
	public function DBMySqlAcces(){
		$this->_dbhost = 'localhost';
		$this->_dbuser =  'root';
		$this->_dbpass = '';
		$this->_dbname = 'ferreteria';
		
		
	
	}
	
	public function Conectar(){
	
		$this->_link = mysql_connect($this->_dbhost,$this->_dbuser,$this->_dbpass) or die  ('Error connecting to mysql');
		mysql_select_db($this->_dbname);
		
	}
	
	public function Desconectar(){
	
		mysql_close($this->_link); 
	}
	
	public function TraerTodoFrom($NombreTabla){
		
		try{
		$this->Conectar();
		$sql = mysql_query("Select * FROM $NombreTabla ");
		while ($objeto = mysql_fetch_array($sql)){
			if ($objeto != NULL){
			$ArregloObjetos[]=$objeto;
			}
		}
		$this->Desconectar();
		return $ArregloObjetos;
		}catch(Exception $e){
			
			echo "Ocurrio un error inesperado"."Codigo de error"."$e->getCode()"."$e->getMessage()";
		
		}
	}
	
	public function GetProductoPorId($id_producto){
		
		try{
		$this->Conectar();
		$sql = mysql_query("Select * FROM producto  WHERE id_producto = $id_producto");
		while ($objeto = mysql_fetch_array($sql)){
			if ($objeto != NULL){
			$producto=$objeto;
			}
		}
		$this->Desconectar();
		return $producto['nombre'];
		
		}catch(Exception $e){
			
			echo "Ocurrio un error inesperado"."Codigo de error"."$e->getCode()"."$e->getMessage()";
		
		}
	}
	
	
	public function CincoProductosDestacados(){
	
		$datos = $this->TraerTodoFrom('Producto');
		$cantidad = count($datos);
		
		for ($i=0;$i<3;$i++){
			$aleatorio = rand(0,$cantidad - 1);
			$arreglo[$i] = $datos[$aleatorio];
			
		}
		return $arreglo;
	}
	
	public function EsCliente($username,$pass){
	
		$this->Conectar();
		
		$sql = mysql_query("SELECT id_cliente,username,pass FROM cliente");
			
			while ($fila = mysql_fetch_array($sql)){
				
				if ($username == $fila['username'] and $pass == $fila['pass'] and isset($username)){
					
				
					$objeto= $fila;
				}
				
			
			}
		
		$this->Desconectar();
		return $objeto;
	}
	
	public function RegistrarCliente($arreglo){
		$this->Conectar();
		$sql = mysql_query("INSERT INTO cliente (nombre,apellido,email,username,pass,fecha_registro) VALUES ('$arreglo[nombre]','$arreglo[apellido]','$arreglo[email]','$arreglo[usuario]','$arreglo[pass]',now())");
		$this->Desconectar();
		return true;
	
	}
	
	public function BorraCarrito($id_cliente){
		$this->Conectar();
		$sql= mysql_query("DELETE FROM carrito WHERE cliente_id_cliente = $id_cliente ");
		$this->Desconectar();
	}
	
	public function BorraListado($id_cliente){
		$this->Conectar();
		$sql= mysql_query("DELETE FROM listado WHERE carrito_id_carrito = $id_cliente ");
		$this->Desconectar();
	}
	
	public function Listar_categorias(){
	
		$this->Conectar();

		$sql = mysql_query("Select categoria,idcategoria FROM producto GROUP BY idcategoria ");
		$i=0;
		$interface = "<div id='categorias'>";
		while ($fila = mysql_fetch_array($sql)){
			$interface .="<li><a href='index.php?idcategoria=".$fila['idcategoria']."'>".$fila['categoria']."</a></li>";
			
			$i++;
		}
		$interface .= "</div>";
		echo $interface;
		
	$this->Desconectar();
	}
	
	public function SetearCarrito($username,$pass){
	
		$this->Conectar();
		
		//busca el id_cliente 
		$sql = mysql_query("SELECT id_cliente FROM cliente WHERE username = '$username' AND pass = '$pass'" );
		
			while ($fila = mysql_fetch_array($sql)){
				
				$id_cliente=$fila['id_cliente'];
			}
		// inicializa el carrito
		$sql = mysql_query("INSERT INTO carrito VALUES ('$id_cliente','$id_cliente','NULL','NULL','NULL') " );
		$this->Desconectar();
	}
	
	public function ProductosCategoria($idcategoria){
	
		
		
		try{
		$this->Conectar();
		$sql = mysql_query("Select * FROM Producto WHERE idcategoria = $idcategoria ");
		while ($objeto = mysql_fetch_array($sql)){
			if ($objeto != NULL){
			$ArregloObjetos[]=$objeto;
			}
		}
		$this->Desconectar();
		return $ArregloObjetos;
		}catch(Exception $e){
			
			echo "Ocurrio un error inesperado"."Codigo de error"."$e->getCode()"."$e->getMessage()";
		
		}
	
	}
	
	public function CargaListado($id_producto,$cantidad,$id_carrito,&$actualizacion){
	
	
	try{
				
		$this->Conectar();
		$sql = mysql_query("Select * FROM producto WHERE id_producto = $id_producto ");
		
		while ($objeto = mysql_fetch_array($sql)){
			if ($objeto != NULL){
			$producto=$objeto; // todos los datos del producto a cargar
			}
		}
		
		$id_producto= $producto['id_producto'];
		$nombre= $producto['nombre'];
		$precio= $producto['precio'];
		
		$total = $cantidad * $precio;
		
		//inserta dentro de listado
		if (!$this->SiEstaEnListado($id_producto)){
		$sql= mysql_query("INSERT INTO listado (carrito_id_carrito,producto_id_producto,cantidad,precio_unitario,precio_total) VALUES ($id_carrito,$id_producto,$cantidad,$precio,$total)");
		}
		else
		{
		
		$sql= mysql_query("UPDATE listado SET cantidad = $cantidad , precio_total = $total WHERE producto_id_producto = $id_producto");
		//header ('Location: ../registro.php');
		}
		
		$this->Desconectar();
		//actualiza el carrito
		$actualizacion = $this->ActualizaCarrito($id_carrito);
		
		
		//print_r($producto);
		//echo "cantidad : $cantidad";
		
		header ('Location: ../index.php');
	}catch(Exception $e){
			
			echo "Ocurrio un error inesperado"."Codigo de error"."$e->getCode()"."$e->getMessage()";
		
		}
	}
	
	public function SiEstaEnListado($id_producto){
	
	
	try{
				
		
		$sql = mysql_query("Select producto_id_producto FROM listado WHERE producto_id_producto = $id_producto ");
		$esta = false;
		while ($objeto = mysql_fetch_array($sql)){
			if ($objeto){
			$esta = true; 
			}
		}
		
		
		
		return $esta;
		
	}catch(Exception $e){
			
			echo "Ocurrio un error inesperado"."Codigo de error"."$e->getCode()"."$e->getMessage()";
		
		}
	}
	
	public function Template(){
	
	
	try{
				
		$this->Conectar();
		
		
		$this->Desconectar();
		
	}catch(Exception $e){
			
			echo "Ocurrio un error inesperado"."Codigo de error"."$e->getCode()"."$e->getMessage()";
		
		}
	}
	
	public function ActualizaCarrito($id_carrito){
	
	
	try{
				
		$this->Conectar();
		
		$sql = mysql_query("Select * FROM listado");
		
		while ($objeto = mysql_fetch_array($sql)){
			if ($objeto != NULL){
			$objeto['nombre_producto'] = $this->GetProductoPorId($objeto['producto_id_producto']);
			$listado[]=$objeto; // todos los datos del listado
			
			}
		}
		
		//var_dump($listado);
		//me quedo con lo que me interesa
		$precio_total = 0;
		$cantidad_total_productos = 0;
		
		for ($i=0;$i<count($listado);$i++){
			
			$precio_total +=$listado[$i]['precio_total'];	
			$cantidad_total_productos += $listado[$i]['cantidad'];
			
		}
		//echo $cantidad_total_productos;
		
		//actualiza el registro del carro
		$sql = mysql_query("UPDATE carrito SET precio_total_productos = $precio_total , cantidad_total_productos = $cantidad_total_productos , fecha = now() WHERE id_carrito = $id_carrito");

		$actualizacion['cantidad_total'] = $cantidad_total_productos;
		$actualizacion['listado'] = $listado;
		
		$this->Desconectar();
		
		return $actualizacion;
		
	}catch(Exception $e){
			
			echo "Ocurrio un error inesperado"."Codigo de error"."$e->getCode()"."$e->getMessage()";
		
		}
	}
	
}


?>