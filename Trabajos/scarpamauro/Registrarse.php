<?php include("header.php"); ?>
<?php include("body.php"); ?>
<?php include("menu.php"); ?>
<?php include("dbconnection.php"); ?>
<?php if(!$_POST){ ?>
		<div id= "form">
		<form name="Registrarse" form action = "Registrarse.php" method = "post">
		<h1>
			<p>Nombre <input type = "text" name = "nombre" size= "15" </input><br></p>
			<p>Apellido <input type = "text" name = "apellido" size= "15" </input><br></p>
			<p>DNI <input type = "text" name = "dni" size= "15" </input><br></p>
			<p>Fecha de nacimiento <input type = "text" name = "fecha" size= "15" </input><text>---->Formato valido YYYY-MM-DD</text<br></p>
			<p>Localidad <input type = "text" name = "localidad"  size= "15" </input><br></p>
			<p>Direccion <input type = "text" name = "direccion"  size= "15" </input><br></p>
			<p>Usuario <input type = "text" name = "usuario"  size= "15" </input><br></p>
			<p>Contraseña <input type = "password" name = "password"  size= "15" </input><br></p>
			<p>REGISTRARSE <input type="submit" value="Enviar" onclick= "validarRegistrarse()"></p>
			
		</h1>	
        </form>
		</div>
<?php
} 
else
{
		$nombre = ($_POST['nombre']);
		$apellido = ($_POST['apellido']);
		$dni = ($_POST['dni']);
		$fecha_nacimiento = ($_POST['fecha']);
		$direccion = ($_POST['direccion']);
		$localidad = ($_POST['localidad']);	
		$usuario = ($_POST['usuario']);	
		$password = ($_POST['password']);	
		
		$conn = GetDBConnection();
		$sql="INSERT INTO `tandilinmobiliario`.`usuario` (`ID`, `Nombre`, `Apellido`, `DNI`, `FechaNac`, `Localidad`, `Direccion` ,`Usuario` ,`Password`) VALUES (NULL, '$nombre', '$apellido', '$dni', '$fecha_nacimiento', '$localidad', '$direccion','$usuario','$password')";;
		$resultado=mysql_query($sql);
		if(!$resultado)
			print("Error al registrarse");
		else
			print("El registro se hizo correctamente");
		
		mysql_close($conn);
		

	echo "<table align= 'center' bgcolor ='#A8A8A8' whith ='400' border ='2' >";
		
		echo "<tr bgcolor = \"#FFBF00\" >"; 
		        echo "<td>"; 
					echo "Campo";
		        echo "</td>";
				echo "<td>"; 
					echo "Valor";
		        echo "</td>";
		echo "</tr>";
		echo "<tr>"; 
		        echo "<td>"; 
					echo "Nombre";
		        echo "</td>";
				echo "<td>"; 
					echo $nombre;
		        echo "</td>";
		echo "</tr>";
		echo "<tr>";	
				echo "<td>"; 
					echo "Apellido";
		        echo "</td>";
				echo "<td>"; 
					echo $apellido;
		        echo "</td>";
		echo "</tr>";	
		echo "<tr>";
				echo "<td>"; 
					echo "Dni";
		        echo "</td>";
				echo "<td>"; 
					echo $dni;
		        echo "</td>";
		echo "</tr>";
		echo "<tr>";
				echo "<td>"; 
					echo "Fecha de Nacimiento";
		        echo "</td>";  
				echo "<td>"; 
					echo $fecha_nacimiento;
		        echo "</td>";		
		echo "</tr>";
		echo "<tr>";
				echo "<td>"; 
					echo "Localidad";
		        echo "</td>";
				echo "<td>"; 
					echo $localidad;
		        echo "</td>";	
		echo "</tr>";
		echo "<tr>";		
				echo "<td>"; 
					echo "Direccion";
		        echo "</td>";
				echo "<td>"; 
					echo $direccion;
		        echo "</td>";	
		echo "</tr>";
		echo "<tr>";		
				echo "<td>"; 
					echo "Usuario";
		        echo "</td>";
				echo "<td>"; 
					echo $usuario;
		        echo "</td>";	
		echo "</tr>";
	
		echo "</table>";
}
 ?>
<?php include("footer.php"); ?>