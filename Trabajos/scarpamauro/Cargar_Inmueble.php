<?php include("header.php"); ?>
<?php include("body.php"); ?>
<?php include("menu.php"); ?>
<?php include("dbconnection.php"); ?>
<?php include("autorizacion.php"); ?>

<?php if(!$_POST){ ?>
	<div id= "form">
	<form name="frmCargarInmueble" method="POST" action= "Cargar_Inmueble.php" enctype="multipart/form-data">
	<h1>
		<p>Titulo:<input type="text" name="titulo" size="30" maxlength="100"><br/></p>
		<p>Descripci&oacute;n:<br><textarea name="descripcion" rows="3" cols="70"></textarea><br></p>
		<p>Valor:<input type="text" name="valor" size="30" maxlength="100"><br/></p>
		<p>Tipo:<select name="tipo">
			<option value="Cabaña">Cabaña</option>
			<option value="Campo">Campo</option>
			<option value="Casa">Casa</option>
			<option value="Casa Quinta">Casa Quinta</option>
			<option value="Chalet">Chalet</option>
			<option value="Cochera">Cochera</option>
			<option value="Departamento" >Departamento</option>
			<option value="Duplex">Duplex</option>
			<option value="Local">Local</option>
			<option value="Terreno">Terreno</option>
			
			</select><br/></p>
		<p>Foto: <input type="file" name="foto" size="30" maxlength="100"><br/></p>
		<br/>
	   <input type="button" value="Enviar" onclick="validarCargarInmueble()">
	<h1>
	</form>
    <div>
<?php
} 
else
{
        //recibo del post
		$titulo = ($_POST['titulo']);
		$descripcion = ($_POST['descripcion']);
		$valor = ($_POST['valor']);
		$tipo = ($_POST['tipo']);

		//guardo la imagen en un carpeta en mi servidor y guado la ruta para cargarla en la base.
		$ruta_servidor = "image";
		$id = '2';
		$id ++;
		$rutaTemp = $_FILES ['foto']['tmp_name'];
		$nombreImagen = $_FILES ['foto']['name'];
		$rutadestino = $ruta_servidor.'/'.$nombreImagen;
		move_uploaded_file ($rutaTemp, $rutadestino);
		$conn = GetDBConnection();
		
		//cargo la url de la foto en la base
		$sql="INSERT INTO  `tandilinmobiliario`.`foto` (`ID` ,`URL` ,`Nombre`) VALUES ('',  '$rutadestino',  '$nombreImagen')";
		$resultado=mysql_query($sql);
		if(!$resultado) {
			echo("<div>Error al insertar la foto</div>");
		}
		else
		{
			$fotoId = mysql_insert_id();
			
			//cargo los datos de la propiedad en la base
			$sql= "SELECT id FROM `tipo` WHERE tipo like '$tipo'";
			$resultado=mysql_query($sql);
			if(!$resultado) {
				echo "Fallo en cargar tipo";
			}
			
			$id_tipo=mysql_result($resultado, 0);			
			
			$sql="INSERT INTO  `tandilinmobiliario`.`propiedad` (`ID` ,`Usuario_FK` ,`Foto_FK` ,`Titulo` ,`Descripcion` ,`Valor`, `TIPO_FK`)VALUES ( '',  NULL,  '$fotoId',  '$titulo',  '$descripcion',  '$valor', '$id_tipo')";
			
			$resultado=mysql_query($sql);
			if(!$resultado) {
			echo("<div>Error al agregar el inmueble ". mysql_error() . "</div>");
			}
			else
			{			
				echo("<div>El inmueble ".$titulo." se agrego correctamente</div>" );
			}
			
		}
		
		mysql_close($conn);
}
?>


<?php include("footer.php"); ?>