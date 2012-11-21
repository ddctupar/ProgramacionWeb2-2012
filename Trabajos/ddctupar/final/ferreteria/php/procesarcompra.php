<?php	
var_dump($_POST);	
include_once('../config.php');
include_once ('../HTML/Template/Sigma.php');
//require_once '../DataObjects/Categoria.php';
//require_once '../DataObjects/Producto.php';
//require_once '../DataObjects/Cliente.php';
require_once '../DataObjects/Compra.php';
session_start();
$id = $_SESSION['idcliente'];
$cero = 0;
//Creo una instancia del objeto Compra
$compra = new DO_Compra;
switch ($_POST['cmdForm']) {
    case 'Eliminar item':
		if (isset($_POST['item'])){
		//me quedo con el nombre y la cantidad del item a eliminar
		$aux = explode(';',$_POST['item']);
		$nombre = $aux[0];
		$cantidad = $aux[1];
		$compra->query("DELETE FROM {$compra->__table} WHERE comprado = $cero AND cantidad = $cantidad AND producto_id_producto = $nombre");
		}
		header ('Location: ../index.php');
        break;
    case 'Comprar todo':
		$compra->query("update {$compra->__table} set comprado = 1 where cliente_id_cliente = $id");
		$_SESSION['compra'] = true;
		
        header ('Location: ../index.php');
        break;
}
?>