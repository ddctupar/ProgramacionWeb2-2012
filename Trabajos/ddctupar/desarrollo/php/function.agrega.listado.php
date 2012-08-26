<?php

require_once('../php/eDibujable.php');
require_once('../php/DBMMySqlAcces.php');
require_once('../php/Cliente.php');
session_start();

try{
				
				
		if (isset($_SESSION['username'])){
			
		
		$db = new DBMySqlAcces;
		$db->CargaListado($_POST['id_producto'],$_POST['cantidad'],$_SESSION['objeto'][0],$_SESSION['carrito']);
		
		}
		else
		{
		header ('Location: ../registro.php');
			
		}
		
}catch(Exception $e){
			
			echo "Ocurrio un error inesperado"."Codigo de error"."$e->getCode()"."$e->getMessage()";
		
}



?>