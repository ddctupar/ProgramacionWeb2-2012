<?php 
require_once("include/clases.php");
$manager = new Mannagerdb;
$exposiciones = $manager->listado_exposiciones_descendientes();
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
		<h2> Ultimas exposiciones</h2>
		<ul id= "lista-exposiciones">
		<?php 
			foreach ($exposiciones as $exposicion) {?>
			<li>
			<h3><a href="productos.php?id=<?php echo $exposicion->get_id()?>"><?php echo $exposicion->get_titulo()?></a></h3>
			<img src="imagenes/exposiciones/<?php echo $exposicion->get_fotoportada()?>"/>
			</li><?php }?>
		</ul>	
		<h2>Proxima Exposicion</h2>
		
		</div> 
		<?php include("include/footer.php")?>
	</div>
</body>
</html>