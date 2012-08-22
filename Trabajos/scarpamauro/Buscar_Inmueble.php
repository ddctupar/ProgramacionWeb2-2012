<?php include("header.php"); ?>
<?php include("body.php"); ?>
<?php include("menu.php"); ?>
<?php include("dbconnection.php"); ?>

			
		<h6>Buscar Inmueble</h6>
		<div id="buscador_form">
		<h4>
		<form id="frmBusqueda" action = "result_inmuebles.php" method = "post">
		<tr> 
            <td>Tipo de Propiedad:</td>
            <td><select name="tipo">
			<?php
				$conn = GetDBConnection();
				$sql="Select * from tipo";
				$resultado=mysql_query($sql);
				if(!$resultado)
					die("Error ".mysql_error());
				while($tipo = mysql_fetch_array($resultado))
				{
				echo "<option value='".$tipo['Tipo']."'>".$tipo['Tipo']."</option>";
				}
			?>
			</select></td>
            
        </tr><br>
		<tr> 
            <td>Desde:</td>
            <td><select name="desde" set_value>
			<option value="50000">50.000</option>
			<option value="100000">100.000</option>
			<option value="150000">150.000</option>
			<option value="200000">200.000</option>
			<option value="250000">250.000</option>
			<option value="300000">300.000</option>
			<option value="350000">350.000</option>
			
			</select></td>
        </tr><br>
		
		<tr> 
            <td>Hasta:</td>
            <td><select name="hasta">
			<option value="50000">50.000</option>
			<option value="100000">100.000</option>
			<option value="150000">150.000</option>
			<option value="200000">200.000</option>
			<option value="250000">250.000</option>
			<option value="300000">300.000</option>
			<option value="350000">350.000</option>
			<option value="500000">500.000</option>
			<option value="400000">400.000</option>
			<option value="600000">600.000</option>
			<option value="700000">700.000</option>
			<option value="800000">800.000</option>
			<option value="900000">900.000</option>
			<option value="1000000">1.000.000</option>
			<option selected value="Sin Limite">Sin Limite</option>
			
			</select></td>
            
        </tr>
		<br>  
			
		</h4>
		</form>
		<div id="boton"><a href="#" onClick="javascript:document.forms['frmBusqueda'].submit();;"><span></span></a></div>
		
		</div>
<?php include("footer.php"); ?>