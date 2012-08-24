<?php
    include_once './estructura/encabezado_administracion.inc.php';
    require_once './rutinas/qrubros.php';
?>
<div class="contentAdministracion">
    <h1>Rubros:</h1>
    <?php
        echo html_admRubros();
    ?>
</div>
<?php    
	include_once './estructura/piedepagina.inc.php';
?>