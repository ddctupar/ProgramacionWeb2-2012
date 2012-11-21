<?php
include_once('config.php');
include_once ('HTML/Template/Sigma.php');
//require_once 'DataObjects/Categoria.php';
//require_once 'DataObjects/Producto.php';
//require_once 'DataObjects/Cliente.php';
//require_once 'DataObjects/Compra.php';
require_once 'Mail.php';
session_start();
//Creo una instancia del objeto Sigma
$tpl = new HTML_Template_Sigma('.');
//Cargo el archivo del template
$error=$tpl->loadTemplateFile("/templates/contacto.html");


//Muestra el template
$tpl->show();
?>