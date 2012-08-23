<?php include("header.php"); ?>
<?php include("body.php"); ?>
<?php include("menu.php"); ?>
<?php include("dbconnection.php"); ?>

<?php if(!$_POST){ ?>			
		<h6>Login</h6>
		<div id="buscador_form">
		<h4>
		<form id="frmLogin" action = "login.php" method = "post">
		<tr> 
            <td>Usuario:</td>
            <td><input type="text" name="usuario" size="20" maxlength="20" /></td>
        </tr><br>
		<tr> 
            <td>Constraseña:</td>
            <td><input type="password" name="password" size="10" maxlength="10" /> </td>
        </tr><br>
		<input type="submit" name="Login" value="Login" size="10" maxlength="10" />
		</form>
		
		
		</div>
		<br>  <br>  <br>  <br> 
		<?php
} 
else
{
		session_start();
		$usuario = ($_POST['usuario']);
		$password = ($_POST['password']);
		$conn = GetDBConnection();
		$sql="Select * from Usuario where usuario like '$usuario'";
		$resultado=mysql_query($sql);
		if(!$resultado)
			print("Error en la conexion a la base de datos");
		
		if($usuario = mysql_fetch_array($resultado))
		{
			if ($usuario["Password"] == $password)
			{
				$_SESSION["Usuario"] = $usuario["Usuario"];
				$_SESSION["Nombre"] = $usuario["Nombre"];
				$_SESSION["UsuarioID"] = $usuario["ID"];
			}
			else
			{
				print("Contrañea invalida");
			}
		}
		else
		{
			print("Usuario no registrado");
		}
		
}?>
<?php include("footer.php"); ?>