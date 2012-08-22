<?php 
require_once("include/clases.php");
$manager = new Mannagerdb;
$id=$_GET["id"];
$productos = $manager->listado_productos($id);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title> DIGITAL Art </title>
<link href="style/estilo.css" rel="stylesheet" type="text/css"/>
</head>
<body>
	<div id="container">
		<?php include("include/superior.php")?>
		<div id= "barramenu">
		<?php include("include/menu-vertical.php")?>
		</div>
		
		<div id="contenido">
			<h2> Productos Disponibles....</h2>
			<ul id="lista-productos">
			<?php 
			foreach ($productos as $producto) {?>
			<li>
			<a href="ampliar-info.php?id=<?php echo $producto->get_idproducto()?>">
			<img src="imagenes/miniaturas/<?php echo $producto->get_path()?>"/>
			</a>
			</li><?php }?>
		</ul>	
		<a href="exposicion.php"> VOLVER </a>
			
		</div> 
		<?php include("include/footer.php")?>
	</div>
</body>
</html>
