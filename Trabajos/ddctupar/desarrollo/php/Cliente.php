<?php



class Cliente {

	private $_id_cliente_primary;
	private $_nombre;
	private $_apellido;
	private $_email;
	private $_username;
	private $_pass;
	private $_fecha_registro;
	private $_carrito=array();
	private $_pilaproductos=array();
	private $_escliente;
	
	public function Client(){
		$this->id_cliente_primary=NULL;
		$this->nombre=NULL;
		$this->apellido=NULL;
		$this->email=NULL;
		$this->username=NULL;
		$this->pass=NULL;
		$this->fecha_registro=NULL;
		
	}
	
	public function IdCiente(){
		return $this->_id_cliente_primary;
	}
	
	public function EsCliente($usuario,$contrasena){
	
		$db = new DBMySqlAcces;
		return $db->EsCliente($usuario,$contrasena);
	
	}
	
	public function Registrarce($arreglo){
		$verdad = false;
		$db = new DBMySqlAcces;
		if ($db->RegistrarCliente($arreglo)){
			$verdad = true;
		}
		return $verdad;
	
	}
	
	public function LogIn(){
	
	session_start();
//continua variables de sesion
if (isset($_POST['username']) and isset($_POST['password'])){
//detiene inyeccion sql en variables $_POST
foreach ($_POST as $key => $value) { 
    $_POST[$key] = mysql_real_escape_string($value); 
}



if ($this->EsCliente($_POST['username'],$_POST['password'])){


		$_SESSION['username']= $_POST['username']; //setea variable de sesion
		$_SESSION['objeto'] = $this->EsCliente($_POST['username'],$_POST['password']); // carga el objeto cliente en la variable de sesion
		//setea el carrito del cliente
		$db = new DBMySqlAcces;
		$cliente = $_SESSION['objeto'];
		$db->BorraListado($cliente['id_cliente']);
		$db->BorraCarrito($cliente['id_cliente']);
		$db->SetearCarrito($_POST['username'],$_POST['password']);
		
		header ('Location: ../index.php');

	} else{
		header ('Location: ../registro.php');
	}


}
	
	}
}
?>