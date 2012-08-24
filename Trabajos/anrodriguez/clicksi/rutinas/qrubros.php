<?php

function html_rubros() {

	require_once 'config.php';
	require_once './rutinas/consultas.php';
	require_once './clases/Mysqldb.php';
	require_once './clases/DbManager.php';

	$db 	= new Mysqldb(SERVER, USER, PASSWORD, BASEDATOS);
	$dmMgr	= new DbManager($db);
	
	$rsRubros = $dmMgr->getAllRubros(); // Array de rubros
	
	$tbl_rubros = '<ul class=menurubros>';
	foreach($rsRubros as $rubro){
		$tbl_rubros.= ' <li><a href="';
		$tbl_rubros.= "http://localhost/tupar/clicksi/productos.php?rubro=".$rubro->getNombre().'">';
		$tbl_rubros.= $rubro->getNombre();
		$tbl_rubros.= '</a> </li>';
	} 
	$tbl_rubros.= '</ul>';
			
	$db->closedb();

	return $tbl_rubros;
}

// --------------------------------------------

function html_admRubros() {

	require_once 'config.php';
	require_once './rutinas/consultas.php';
	require_once './clases/Mysqldb.php';
	require_once './clases/DbManager.php';
	
	$db = new mysqldb(SERVER, USER, PASSWORD, BASEDATOS);
	$dmMgr	= new DbManager($db);
	
	$rsRubros = $dmMgr->getAllRubros(); // Array de rubros
	
	$tbl_rubros = '<ul class=menurubros>';	
	foreach($rsRubros as $rubro){
		$tbl_rubros.= ' <li><a href="';
		$tbl_rubros.= "http://localhost/tupar/clicksi/admFormRubro.php?rubro=".$rubro->getId().'">';
		$tbl_rubros.= $rubro->getNombre();
		$tbl_rubros.= '</a> </li>';
			} 
	$tbl_rubros.= '</ul>';

	$db->closedb();

	return $tbl_rubros;
}


?>