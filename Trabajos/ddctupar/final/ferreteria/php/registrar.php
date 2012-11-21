<?php
include_once('../config.php');
include_once ('../HTML/Template/Sigma.php');
//require_once 'DataObjects/Categoria.php';
//require_once 'DataObjects/Producto.php';
require_once '../DataObjects/Cliente.php';
session_start();
//Creo una instancia del objeto Compra
$cliente = new DO_Cliente;
$cliente->username = mysql_real_escape_string($_POST['clienteusername']);
$cliente->pass = mysql_real_escape_string($_POST['clientepassword']);
$cliente->nombre = mysql_real_escape_string($_POST['clientenombre']);
$cliente->apellido = mysql_real_escape_string($_POST['clienteapellido']);
$cliente->email = mysql_real_escape_string($_POST['clienteemail']);
$cliente->fecha_registro = date("Y-m-d");
$cliente->administrador = 0;

$yaesta = false;
$cliente1 = new DO_Cliente;
$cliente1->find();
while ($cliente1->fetch()){
	if ($cliente1->username == $cliente->username or $cliente1->pass == $cliente->pass ){
		$yaesta = true;
	}
	unset($_SESSION['registrarse']);
	header ('Location: ../php/errorusuariorepetido.php');
}

if (!$yaesta){
	$cliente->insert();
	unset($_SESSION['registrarse']);
	header ('Location: ../index.php');
}

//var_dump($_SESSION);
//echo "$username,$password";



?>