<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Mas Luz Productos Electricos e Iluminacion</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="estilo.css" />
<link rel="stylesheet" type="text/css" href="productos.css" />
</head>
<body>

<!-- Comienza wrapper -->
<div id="wrapper">
  <!-- Comienza Header -->
<?php include('header.html'); ?>
  <!-- Fin Header -->
  
  <!-- Comienza imagen de seccion -->
  <div id="image-seccion-portada">  
  </div>
  <!-- Fin del menu -->
  
  <!-- Comienza Comunas de navegacion -->
  <div id="navegacion">
    <!-- Comienza columna de contenido --> 

    <div id="contenido">
      <h1> CATALOGO DE PRODUCTOS</h1>


<div class="columnaizq">
<?php
require_once("clases/clases.inc.php");

if (isset($_GET['cat']))  {
$idcatURL=$_GET['cat'];
$manager = new Mysql;  
$productos= $manager->mostrarproductosxcategoria($idcatURL);
foreach ($productos as $producto) { ?>
<div class="producto">
    <div class="prdDesc">
  <img src= '<?php echo $producto->getImagen() ?>' class="imagen">
    <h2 class="txttitulo"> <?php echo $producto->getNombre()?> </h2>  
    <p class="txtdescrip"> 
    <?php $texto=$producto->getDescripcion(); echo substr($texto,0,300)."...";?>
      <a class="extendida" href="ver_producto.php?id=<?php echo $producto->getId()?>"> Ver producto...</a>
   
      </p>
      </div>
</div>
</div>
<div class="clear" </div></br>
 <?php }
} else { 
$manager = new Mysql;  
$productos= $manager->mostrartodosproductos();
 foreach ($productos as $producto) {?>
<div class="producto">
    <div class="prdDesc">
  <img src= '<?php echo $producto->getImagen() ?>' class="imagen">
    <h2 class="txttitulo"> <?php echo $producto->getNombre()?> </h2>  
    <p class="txtdescrip"> 
    <?php $texto=$producto->getDescripcion(); echo substr($texto,0,300)."...";?>
      <a class="extendida" href="ver_producto.php?id=<?php echo $producto->getId()?>"> Ver producto...</a>
   
      </p>
      </div>
</div>
<div class="clear">  </div>
</br>

 <?php }}?>


    
</div>

</div>
   
    <!-- Fin Columna Contenido -->
    <!-- Comienzo Columna Derecha -->
 <div id="columnder">
      <p class="menucat" > Categorias: </br>
      <?php include('categorias.php'); ?>
<br />
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
