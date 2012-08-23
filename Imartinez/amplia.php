<?php 
$id = $_GET["id"];
require_once("includes/clases.php");
$manager = new Mannagerdb;

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Anuncios clasificados gratis de <?php echo $categoria?> en <?php echo "Argentina"?></title>
<meta name="description" content="" />
<?php require_once("includes/encabezados.php")?>
</head>
<body>
	<div id="container">
		<?php require_once("includes/header.php")?>
		<div id="content">
			<?php require_once("includes/navegacion.php")?>
			<div class="amplia-clasificado">
				<h2>Bariloche, Cabaña alquiler temporario-para 2/4 pers:$200/dia</h2>
			<p>Se encuentra en zona urbana y a 10 cuadras del Centro Cívico de la ciudad. 
Posee una magnífica vista al lago Nahuel Huapi y al centro de la ciudad.
Es una casa cómoda: sala de estar, cocina-comedor, 2 dormitorios y baño. Completamente equipada: incluye ropa de cama, toallas, vajilla, Internet, TV por cable, microondas, heladera, cocina, agua caliente y calefacción por gas natural, posee espacio para estacionamiento interno.

Precios Temporada Baja 2012 
Precio para dos personas: $ 200 por día. 
Precio para tres personas: $ 250 por día.
Precio para cuatro personas: $ 290 por día.

Confirmación de reserva: 30% del valor total. 
Estancia mínima 3 dias. No se aceptan mascotas.

Para mayor información ver: 
http://www.apartamentobungalowbariloche.blogspot.com/

Mail: barilochealquiler@gmail.com</p>
<div>servicios</div>
<div>contactar al anunciante</div>
<div>imagenes</div>
			</div>
		</div>			
		<?php require_once("includes/footer.php")?>
	</div>
</body>
</html>