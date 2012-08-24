<?php
require_once '../config.php';
require_once '../rutinas/consultas.php';
require_once '../clases/Consulta.php';
require_once '../clases/Mysqldb.php';
require_once '../clases/DbManager.php';
require_once '../rutinas/util.php';


$par_razonsocial 	= $_POST["razonsocial"];
$par_email		 	= $_POST["email"];
$par_telefono	 	= $_POST["telefono"];
$par_localidad 		= $_POST["localidad"];
$par_motivo 		= $_POST["motivo"];
$par_comentarios 	= $_POST["comentarios"];

$consulta = new Consulta();
$consulta->setRazonSocial($par_razonsocial);
$consulta->setEmail($par_email);
$consulta->setTelefono($par_telefono);
$consulta->setLocalidad($par_localidad);
$consulta->setMotivo($par_motivo);
$consulta->setComentario($par_comentarios);

$db 	= new Mysqldb(SERVER, USER, PASSWORD, BASEDATOS);
$dmMgr	= new DbManager($db);
	
if (!$dmMgr->insertConsulta($consulta)) {
	redirigirPagina('', '/tupar/clicksi/errorConexion.php');
} else { 
	redirigirPagina('Su consulta ha sido registrada. En breve nos comunicaremos con usted. ¡Muchas Gracias!', '/tupar/clicksi/index.php');
}

$db->closedb();

echo $query;
?>