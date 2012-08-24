<?php
include_once './estructura/encabezado_administracion.inc.php';
require_once './rutinas/qproductos.php';
?>
<div class="contentAdministracion">
	<h1>Productos:</h1>
	<?php
	echo html_admProductos();
	?>
</div>
<?php	
    include_once './estructura/piedepagina.inc.php';
?>