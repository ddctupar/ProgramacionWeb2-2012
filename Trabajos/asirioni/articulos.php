<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Mas Luz Productos Electricos e Iluminacion</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="estilo.css" />
</head>
<body>

<!-- Comienza wrapper -->
<div id="wrapper">
  <!-- Comienza Header -->
<?php include('header.html'); ?>
  <!-- Fin Header -->
  
  <!-- Comienza imagen de seccion -->
  <div id="image-seccion-articulos">
  </div>
  <!-- Fin del menu -->
  
  <!-- Comienza Comunas de navegacion -->
  <div id="navegacion">
    <!-- Comienza columna de contenido -->

    <div id="contenido">
      <h1> Iluminando su vida ...</h1>
<?php 
require_once("clases/clases.inc.php");
$manager = new Mysql;  

$articulos = $manager->mostrararticulos();
 foreach ($articulos as $articulo) {?>
<div class="articulo">
    <div class="prdDesc">
<?php $texto=$articulo->getFecha();?>
    <p class="txtdescrip"> 
        <img src= '<?php echo $articulo->getImagen() ?>' class="imagen">
	<h2 class="prdTitle"> <?php echo $articulo->getTitulo()?>
 </h2>
<?php $texto=$articulo->getCuerpo(); echo substr($texto,0,300)."...";?>
      <a class="extendida" href="ver_articulo.php?id=<?php echo $articulo->getId()?> ">Mas Informacion...</a> 
 <?php }?>
</div>
</div>
 </div>
    <!-- Fin Columna Contenido -->
    <!-- Comienzo Columna Derecha -->
    <div id="columnder">
      <p style="margin:8px 0;">
      Lamparas<br />
	  </p>
      <div class="clear"> </div>
    </div>
    <!-- Fin columna derecha -->
  </div>
  <!-- Fin Columnas de Navegacion -->
  <!-- Comienza Footer -->
<?php include('footer.html'); ?>
  <!-- Fin Footer -->
  
</div>
<!-- Fin Wrapper -->

</body>
</html>