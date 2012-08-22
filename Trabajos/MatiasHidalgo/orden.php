<?php
require_once('DBmanager.inc.php');
$dbmanager=new DBmanager;
$orden=new Orden;
$orden=$dbmanager->getOrdenByNro_orden($_POST['nroorden']);
if($orden != NULL){
	$usuario=new Usuario;
	$usuario=$dbmanager->getUsuarioByID($orden->get_id_usuario());
	$equipo=new Equipo;
	$equipo=$dbmanager->getEquipoByID($orden->get_id_equipo());
	$contrascorrecta=false;
	if ($usuario->get_contras()==$_POST['contras']) {
		$contrascorrecta=true;
	}
}
require_once('cabecera.php');
require_once('menu.php');
?>
<div class="contenido">
<?php 
if($orden == NULL){
	echo("<br/><h2>La Orden nro: ".$_POST['nroorden']." no existe</h2>");
	echo('<h3><a href="consulorden.php">Volver atras</a></h3>');
} else if($contrascorrecta=false){
	echo('<br/><h2>La contraseña no es válida</h2>');
	echo('<h3><a href="consulorden.php">Volver atras</a></h3>');	
} else echo('<form id="form">
<label>Orden Numero:</label><label id="nro_orden"> '.$orden->get_nro_orden().'</label><br/>
<label>Fecha de Ingreso:</label><label id="fecha_ingreso"> '.$orden->get_fecha_ingreso().'</label><br/>
<label>Equipo:</label><label id="tipo">'.$equipo->get_tipo().'</label><br/>
<label>Marca:</label><label id="marca">'.$equipo->get_marca().'</label><br/>
<label>Modelo:</label><label id="modelo">'.$equipo->get_modelo().'</label><br/>
<label>Nro de Serie:</label><label id="nro_serie">'.$equipo->get_nro_serie().'</label><br/>
<label>Fecha de Compromiso:</label><label id="fecha_prometido">'.$orden->get_fecha_prometido().'</label><br/>
<label>Estado:</label><label id="estado">'.$orden->get_estado().'</label><br/>
</form>
');
?>
</div>
<?php 
require_once('piedepagina.php');
?>