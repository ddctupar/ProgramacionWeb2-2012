<?php
	if (isset ($_POST['enviar'])) {
		require_once("include/clases.php");
		$arr["nombre"]=$_POST['nombre'];
		$arr["apellido"]=$_POST['apellido'];
		$arr["email"]=$_POST['email'];
		$arr["comentario"]=$_POST['comentario'];
		$manager = new Mannagerdb;
		$manager->nuevo_comentario($arr);
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title> DIGITAL Art </title>
<link href="style/estilo.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="js/validar-formulario.js"></script>
</head>
<body>
	<div id="container">
		<?php include("include/superior.php")?>
		<div id= "barramenu">
				<?php include("include/menu-vertical.php")?>
		</div>
		<div id="contenido_de_contacto">
			<div id="formulario">
				<form method="post" action="" onsubmit="return validarFormulario(this)">
				<div id="nombre-formulario">
				<p>Nombre:</p>
				<p>Apellido:</p>
				<p>Mail:</p>
				</div>
			    	<div id="datos-formulario">		
				<p><input name="nombre"/></p>
				<p><input name="apellido"/></p>
				<p><input name="email"/></p>
			    	</div>
		 <p>Ingresa tus comentarios:</p>
		 <p><textarea name="comentario" rows="4" cols="30"></textarea></p>
		 <p><input type="submit" value="Enviar" name="enviar"/> <input type="reset"/></p>
    		</form>
    		</div>
		</div> 
		<?php include("include/footer.php")?>
	</div>
</body>
</html>

















