<?php
include_once('../config.php');
include_once ('../HTML/Template/Sigma.php');
//require_once 'DataObjects/Categoria.php';
//require_once 'DataObjects/Producto.php';
require_once '../DataObjects/Cliente.php';
session_start();
if (isset($_POST['registrarse'])){
	$_SESSION['registrarse']=true;
	header ('Location: ../registro.php');
}
else{
$username = mysql_real_escape_string($_POST['username']);
$password = mysql_real_escape_string($_POST['password']);

//Creo una instancia del objeto Cliente
$cliente = new DO_Cliente;
$cliente->find();
while ($cliente->fetch()){
	if($cliente->username == $username and $cliente->pass == $password and $cliente->administrador == 0){
		$_SESSION['nombrecliente']=$cliente->nombre;
		$_SESSION['idcliente']=$cliente->id_cliente;
	}
	if($cliente->username == $username and $cliente->pass == $password and $cliente->administrador == 1){
		$_SESSION['nombrecliente']=$cliente->nombre;
		$_SESSION['idcliente']=$cliente->id_cliente;
		$_SESSION['administrador']=true;
		$_SESSION['admin']=true;
	}
}
}
if (isset($_POST['registrarse'])){
	
}
else{
header ('Location: ../index.php');
}
//var_dump($_SESSION);
//echo "$username,$password";



?>