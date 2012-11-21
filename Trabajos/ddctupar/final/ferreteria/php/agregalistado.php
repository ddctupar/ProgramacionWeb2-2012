<?php
include_once('../config.php');
include_once ('../HTML/Template/Sigma.php');
//require_once '../DataObjects/Categoria.php';
//require_once '../DataObjects/Producto.php';
require_once '../DataObjects/Compra.php';
session_start();
if (isset($_SESSION['idcliente'])){
//Creo una instancia del objeto Compra
$compra = new DO_Compra;
$compra->producto_id_producto = mysql_real_escape_string($_POST['idproducto']);
$compra->cliente_id_cliente = $_SESSION['idcliente'];
$compra->cantidad = mysql_real_escape_string($_POST['cantidad']);
$compra->precio_unitario = mysql_real_escape_string($_POST['precio']);
$compra->precio_total = $compra->cantidad * $compra->precio_unitario;
$compra->fecha = date("Y-m-d");
$compra->comprado = 0;
//Creo otra instancia del objeto compra para buscar si el item ya es encuentra en el listado entonces actualizar o insertar
$compra1 = new DO_Compra;
$compra1->find();
$esta=false;
while ($compra1->fetch()){
	if ($compra->producto_id_producto == $compra1->producto_id_producto and $compra1->comprado == 0){
		$esta=true;
		$compra1->producto_id_producto = mysql_real_escape_string($_POST['idproducto']);
		$compra1->cliente_id_cliente = $_SESSION['idcliente'];
		$compra1->cantidad = mysql_real_escape_string($_POST['cantidad']);
		$compra1->precio_unitario = mysql_real_escape_string($_POST['precio']);
		$compra1->precio_total = $compra->cantidad * $compra->precio_unitario;
		$compra1->fecha = date("Y-m-d");
		$compra1->comprado = 0;
		$compra1->update();
	}
}
if (!$esta){
	$compra->insert();
}
}
header ('Location: ../index.php');



?>