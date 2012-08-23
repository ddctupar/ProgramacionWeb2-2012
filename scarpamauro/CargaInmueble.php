<?php	

		//recibo del post
		$titulo = ($_POST['titulo']);
		$descripcion = ($_POST['descripcion']);
		$valor = ($_POST['valor']);
		$tipo = ($_POST['tipo']);

		//guardo la imagen en un carpeta en mi servidor y guado la ruta para cargarla en la base.
		$ruta_servidor = "image/viviendas";
		$id = '2';
		$id ++;
		$rutaTemp = $_FILES ['foto']['tmp_name'];
		$nombreImagen = $_FILES ['foto']['name'];
		$rutadestino = $ruta_servidor.'/'.$nombreImagen;
		move_uploaded_file ($rutaTemp, $rutadestino);
		
		//me cnecto a la base para cargar los datos
		$dbhost = 'localhost';
		$dbuser = 'root';
		$dbpass = '';
		$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die                      ('Error connecting to mysql');
		$dbname = 'tandilinmobiliario';
		mysql_select_db($dbname);
		//cargo la url de la foto en la base
		$sql="INSERT INTO  `tandilinmobiliario`.`foto` (`ID` ,`URL` ,`Nombre`) VALUES ('',  '$rutadestino',  '$nombreImagen')";
		$resultado=mysql_query($sql);
		if(!$resultado) {
			die("iError al crear foto");
		}
		
		$fotoId = mysql_insert_id();
		
		//cargo los datos de la propiedad en la base
		
		$sql="INSERT INTO  `tandilinmobiliario`.`propiedad` (`ID` ,`Usuario_FK` ,`Foto_FK` ,`Titulo` ,`Descripcion` ,`Valor`)VALUES ( '',  NULL,  '$fotoId',  '$titulo',  '$descripcion',  '$valor')";
		
		$resultado=mysql_query($sql);
		if($resultado == 1)
			print("El registro se hizo correctamente´" );
		else
			print("Error al registrarse". mysql_error());
		
		mysql_close($conn);
?>

