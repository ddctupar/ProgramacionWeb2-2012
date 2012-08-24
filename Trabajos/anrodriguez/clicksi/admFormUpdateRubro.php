<?php 
 	require_once 'config.php';
 	require_once './rutinas/util.php';
 	require_once './rutinas/consultas.php';
	require_once './clases/Mysqldb.php';
	require_once './clases/DbManager.php';
	require_once './clases/Rubro.php';
	
	$par_idRubro=$_POST["id"];
	$par_nombreRubro=$_POST["nombre"];
	
	$rubro = new Rubro();
	$rubro->setId($par_idRubro);
	$rubro->setNombre($par_nombreRubro);
	$db 	= new Mysqldb(SERVER, USER, PASSWORD, BASEDATOS);
	$dmMgr	= new DbManager($db);
	$dmMgr->updateRubro($rubro);
	$db->closedb();
	redirigirPagina('Actualización correcta!','/tupar/clicksi/admRubros.php');
?>