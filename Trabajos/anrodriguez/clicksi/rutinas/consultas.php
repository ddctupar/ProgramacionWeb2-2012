<?php
function consulta($id, $filtro) {
    
    $query='';
    
	$query['rubro']    = "SELECT	id, nombre
                              FROM rubro
                              WHERE nombre LIKE '%".$filtro."%' AND id<>1
                              ORDER BY nombre
                             ";

	$query['articulo'] = "SELECT 	*
                              FROM articulo
                              WHERE nombre LIKE '%".$filtro."%' AND 
                              ORDER BY nombre
                             ";

	$query['producto'] = "SELECT 	*
                              FROM vproducto
                              WHERE nombre_rubro LIKE '%".$filtro."%'
                              ORDER BY nombre_articulo
                             ";

	$query['usuario'] = "SELECT 	*
                              FROM usuario
                              WHERE email='".$filtro."'
                             ";
	
	$query['rubroById'] = "SELECT	id, nombre
                              FROM rubro
                              WHERE id=".$filtro."
                             ";
	
	$query['productoById'] = "SELECT	id, nombre
                              FROM articulo
                              WHERE id=".$filtro."
                             ";
	return($query[$id]);
}
?>