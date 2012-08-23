<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Mas Luz Productos Electricos e Iluminacion</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<?php
require_once("clases/clases.inc.php");
$manager = new Mysql;
$categorias = $manager->mostrartodascategorias();
foreach ($categorias as $cat) { ?>
 
 <a href="productos.php?cat=<?php echo $cat->getId()?>"> <?php echo strtoupper($cat->getNombreCat())?></a>
 </br>
 <?php  } ?>
 </body>
 </html>
 