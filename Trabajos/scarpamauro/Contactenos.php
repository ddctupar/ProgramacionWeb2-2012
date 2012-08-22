<?php include("header.php"); ?>
<?php include("body.php"); ?>
<?php include("menu.php"); ?>

		<h1>
		<form name="Contactenos" method = "post">
			<p>Nombre <input type = "text" name = "nombre" size= "15" </input><br></p>
			<p>Apellido <input type = "text" name = "apellido" size= "15" </input><br></p>
			<p>Comentario<br><textarea name="comentario" rows="7" cols="70"></textarea> <br></p>
			<p>ENVIAR <input type="submit" value="Enviar" onclick= "validarContacto()"></p>
		</h1>	
        </form>	
		
<?php include("footer.php"); ?>