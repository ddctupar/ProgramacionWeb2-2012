<?php 
$categoria = $_GET["categoria"];
$subcategoria = $_GET["subcategoria"];
$ubicacion = $_GET["ubicacion"];
if ($ubicacion == "") $ubicacion = "Argentina";
require_once("includes/clases.php");
$manager = new Mannagerdb;
//falta traer los hijos de las actegorias padre
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Publicar anuncio gratis de <?php echo $categoria?> en <?php echo $ubicacion?></title>
<meta name="description" content="" />
<?php require_once("includes/encabezados.php")?>
</head>
<body>
	<div id="container">
		<?php require_once("includes/header.php")?>
		<div id="content">
			<h2>Publica tu aviso gratis</h2>
			<div>
				<form>
					<p>Selecciona una ubicacion</p>
					<h4>Provincia</h4>
					<div>
						<select name="provincia">
							<option value="" selected="selected"></option>
						</select>
					</div>
					<h4>Municipio</h4>
					<div>
						<select name="municipio">
							<option value="" selected="selected"></option>
						</select>
					</div>
					<p>Selecciona una categoria</p>
					<h4>Categoria</h4>
					<div>
						<select name="categoria">
							<option value="" selected="selected"></option>
						</select>
					</div>
					<h4>Subcategoria</h4>
					<div>
						<select name="subcategoria">
							<option value="" selected="selected"></option>
						</select>
					</div>
					<div>
						<input type="submit"></input>
					</div>
				</form>
			</div>
		</div>			
		<?php require_once("includes/footer.php")?>
	</div>
</body>
</html>