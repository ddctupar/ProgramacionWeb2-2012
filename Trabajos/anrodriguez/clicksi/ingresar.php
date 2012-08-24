<?php
	require_once 'config.php';
	require_once './rutinas/consultas.php';
	require_once './clases/Mysqldb.php';
	require_once './clases/DbManager.php';
	require_once './rutinas/util.php';
	
    
    session_start();

    if (!isset($_SESSION['usuario']) ) {
        redirigirPagina('','http://localhost/tupar/clicksi/admFormConexion.php');            
        }    
     else {
      redirigirPagina('','http://localhost/tupar/clicksi/administracion.php');
         }
?>
