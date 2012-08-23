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
      <h1> PRODUCTO:</h1>


<div class="columnaizq">
<?php
require_once("clases/clases.inc.php");

if (isset($_GET['id']))  {
$id= ($_GET['id']);
$manager = new Mysql;  
$producto= $manager->mostrarproducto($id);?>
 
<div class="producto">
    <div class="prdDesc">
  <img src= '<?php echo $producto->getImagen() ?>' class="imgrande">
    <h2 class="txttitulo"> <?php echo $producto->getNombre()?> </h2>  
    <p class="txtdescrip"> 
    <?php echo $producto->getDescripcion();?>   
      </p>
            </br></br></br>
       <p class="txt"> Si desea comprar o mas informacion sobre este producto:<a class="extendida" href="contacto.php"> Contactenos</a>
</p>
      </div>
</div> 

<?php 
} ?>
 <h2> ARTICULOS INFORMATIVOS RELACIONADOS CON ESTE PRODUCTO: </h2> </BR>
 <?php 
$manager = new Mysql;  
$manager2 = new Mysql;  
$relacion= $manager->rel_Producto($id);
foreach ($relacion as $rel) { 
$idart=$rel->getIdArt();
$Articulo= $manager2->mostrararticulo($idart);
?>
<a class="relacionado" href="ver_articulo.php?id=<?php echo $Articulo->getId()?>"> <?php echo $Articulo->getTitulo()?> </a> </br>
<?php }?>  
 
 
 </div>
<div class="clear">  </div>
</br>


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