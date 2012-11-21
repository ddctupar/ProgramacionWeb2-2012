<?php
include_once('config.php');
include_once ('HTML/Template/Sigma.php');
require_once 'DataObjects/Categoria.php';
require_once 'DataObjects/Producto.php';
require_once 'DataObjects/Cliente.php';
require_once 'DataObjects/Compra.php';
session_start();
//Creo una instancia del objeto Sigma
$tpl = new HTML_Template_Sigma('.');
//Cargo el archivo del template
$error=$tpl->loadTemplateFile("/templates/principal.html");
//Creo una instancia del objeto Categoria


if (isset($_SESSION['registrarse'])){
	
	$tpl->setVariable('haber','Complete el formulario para registrarce y comenzar la compra');
	$tpl->parse('registrar');
		
}
unset($_SESSION['registrarse']);
//var_dump($_SESSION);

//Muestra el template
$tpl->show();
?>