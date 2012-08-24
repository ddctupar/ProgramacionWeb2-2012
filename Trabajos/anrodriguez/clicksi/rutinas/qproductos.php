<?php
function html_productos($rubro) {

	require_once 'config.php';
	require_once './rutinas/consultas.php';
	require_once './clases/Mysqldb.php';
	require_once './clases/DbManager.php';
    require_once './clases/Browser.php';
    $productosXPagina = 6;
    
	$db 	= new mysqldb(SERVER, USER, PASSWORD, BASEDATOS);
	$dbMgr	= new DbManager($db);
    
	$browser    = new Browser($dbMgr->getProductosByRubro($rubro));
    $browser->setFilasPagina($productosXPagina);
	$rsArticulos = $browser->getPagina();
	
	$tbl='<h5>'."No existen productos en la categoría seleccionada...".'</h5>';

	if($rsArticulos) {
		$tbl = '<table class="tablaproductos">';
		$tbl.= '<tr><th>'.'DESCRIPCION'.'</th> ';
		$tbl.= '<th>'.'M.'.'</th> ';
		$tbl.= '<th>'.'PRECIO VENTA'.'</th>';
		$tbl.= '<th>'.'FOTOGRAFIA'.'</th>';
		$tbl.= '</tr>';

		foreach($rsArticulos as $articulo){
			$tbl.= ' <tr>';
			$tbl.= '<td><h2>'.$articulo->getNombre().'</h2></td> ';
			$tbl.= '<td><h2>'.MONEDA2.'</h2></td>';
			$tbl.= '<td><h3>'.$articulo->getprecioVenta().'</h3></td> ';
			$imgsrc=PATH_IMAGENES.$articulo->getPathImagen();
			$imgalt=$articulo->getPathImagen();
			$imagen='<img alt="'.$imgalt.'" src="'.$imgsrc.'">';			
			$tbl.= '<td><h3>'.$imagen.'</h3></td> ';
			$tbl.= '</tr>';
		}
		$tbl.= '</table>';
	}	
	$db->closedb();
 
	return $tbl;
}

function html_admProductos() {

	require_once 'config.php';
	require_once './rutinas/consultas.php';
	require_once './clases/Mysqldb.php';
	require_once './clases/DbManager.php';
    require_once './clases/Browser.php';

	$db         = new mysqldb(SERVER, USER, PASSWORD, BASEDATOS);
	$dbMgr      = new DbManager($db);
	$browser    = new Browser();
 
    $browser->setDatos($dbMgr->getProductosByRubro());
	$rsArticulos = $browser->getPagina();
    
	$tbl='<h5>'."No existen productos en la categoría seleccionada...".'</h5>';
	$tbl = '<ul class=menurubros>';
	foreach($rsArticulos as $articulo){
		$tbl.= ' <li><a href="';
		$tbl.= "http://localhost/tupar/clicksi/admFormProducto.php?producto=".$articulo->getId().'">';
		$tbl.= $articulo->getNombre();
		$tbl.= '</a> </li>';
	} 
	$tbl.= '</ul>';
	
	$db->closedb();
 
	return $tbl;
}


?>