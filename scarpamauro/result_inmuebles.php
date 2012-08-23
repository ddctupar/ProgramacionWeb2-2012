<?php include("header.php"); ?>
<?php include("body.php"); ?>
<?php include("menu.php"); ?>
<?php include("dbconnection.php"); ?>

<?php
		//Hay que validar los datos.
		$desde = ($_POST['desde']);
		$hasta = ($_POST['hasta']);
		$tipo = ($_POST['tipo']);
		$conn = GetDBConnection();
		$sql="SELECT prop.ID, prop.titulo, prop.descripcion, t.tipo, prop.valor, f.url 
		FROM `propiedad` prop JOIN tipo t ON (prop.TIPO_FK = t.ID)
		JOIN foto f ON (prop.Foto_FK = f.ID)
		WHERE 
		prop.Valor >= $desde 
		AND 
		t.tipo='$tipo' ";
		
		if($hasta != "Sin Limite")
		{
			$sql .= " AND prop.Valor <= $hasta";
		}
				
		$resultado=mysql_query($sql);
		
		if(!$resultado)
		{
			die("Error ".mysql_error());
		}
		
		$i = 0;
		while($propiedad = mysql_fetch_array($resultado))
		{
		?>
		<div id="cont_inm<?php $i ?>">
     <a>
         <h5>Valor: $<?php echo $propiedad['valor'] ?></h5>
     		<h3><?php echo $propiedad['titulo'];?></h3>
     		<h4><br><?php echo $propiedad['descripcion'] ?></br> </h4>
         <img src="<?php echo $propiedad['url'] ?> " width=100px height=70px >
     </a> 
     </div>
		<?php
			$i++;
		}
		mysql_close($conn);
		?>
<?php include("footer.php"); ?>