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
      <h1> ARTICULO INFORMATIVO:</h1>


<div class="columnaizq">
<?php
require_once("clases/clases.inc.php");

if (isset($_GET['id']))  {
$id= ($_GET['id']);
$manager = new Mysql;  
$articulo= $manager->mostrararticulo($id);?>
 
<div class="producto">
    <div class="prdDesc">
  <img src= '<?php echo $articulo->getImagen() ?>' class="imgrande">
    <h2 class="txttitulo"> <?php echo $articulo->getTitulo()?> </h2>  
    <p class="txtdescrip"> 
    <?php echo $articulo->getCuerpo();?>   
      </p>
            </br></br></br>
      </div>
</div> 

<?php 
} ?>
 <h2> PRODUCTOS RELACIONADOS: </h2> </BR>
 <?php 
$manager = new Mysql;  
$manager2 = new Mysql;  
$relacion= $manager->rel_Articulo($id);
foreach ($relacion as $rel) { 
$idprod=$rel->getIdprod();
$Producto= $manager2->mostrarproducto($idprod);
?>
<a class="relacionado" href="ver_producto.php?id=<?php echo $Producto->getId()?>"> <?php echo $Producto->getNombre()?> </a> </br>
<?php }?>  
 
 
 </div>
<div class="clear">  </div>
</br>


</div>
       
    <!-- Fin Columna Contenido -->
    <!-- Comienzo Columna Derecha -->
 <div id="columnder">
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