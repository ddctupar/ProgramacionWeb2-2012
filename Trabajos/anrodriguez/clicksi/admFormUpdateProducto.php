<?php 
 	require_once 'config.php';
 	require_once './rutinas/util.php';
 	require_once './rutinas/consultas.php';
	require_once './clases/Mysqldb.php';
	require_once './clases/DbManager.php';
	require_once './clases/Articulo.php';
	
	$par_idProducto=$_POST["id"];
	$par_nombreProducto=$_POST["nombre"];
	
	$producto = new Articulo();
	$producto->setId($par_idProducto);
	$producto->setNombre($par_nombreProducto);
	$db 	= new Mysqldb(SERVER, USER, PASSWORD, BASEDATOS);
	$dmMgr	= new DbManager($db);
	$dmMgr->updateProducto($producto);
	$db->closedb();
	redirigirPagina('Actualización correcta!','/tupar/clicksi/admProductos.php');
?>