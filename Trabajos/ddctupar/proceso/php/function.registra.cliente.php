<?php

require_once ('../php/Cliente.php');
require_once ('../php/DBMMySqlAcces.php');
session_start();
//continua variables de sesion
if (isset($_POST)){
//detiene inyeccion sql en variables $_POST
	foreach ($_POST as $key => $value) { 
    	$_POST[$key] = mysql_real_escape_string($value); 
	}
}

$cliente = new Cliente;
if ($cliente->Registrarce($_POST)){
	
header ('Location: ../index.php');

}

 ?>