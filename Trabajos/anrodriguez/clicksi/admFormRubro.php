<script type="text/javascript" src="./rutinas/javaScripts/validar.js"></script>
<?php
    include_once './estructura/encabezado_administracion.inc.php';
 	require_once 'config.php';
	require_once './rutinas/consultas.php';
	require_once './clases/Mysqldb.php';
	require_once './clases/DbManager.php';

	$db 	= new Mysqldb(SERVER, USER, PASSWORD, BASEDATOS);
	$dmMgr	= new DbManager($db);
	$rubro = $dmMgr->getRubroById($_GET["rubro"]);
	$db->closedb();
	echo '
			<div id="contentAdministrar">
				<form class="formIngresar" method="post" action="admFormUpdateRubro.php" onSubmit="return ValidarAdmFormRubro(this);">
					<div>
						<h1>Modificar Rubro</h1>
					</div>
					<br/>
					<div>
						<h2>Rubro</h2> 
						<input type="text" readOnly size="20" name="id" value="'.$rubro->getId().'"/>
						<h2>Nombre</h2> 
						<input type="text"  size="60" name="nombre" value="'.$rubro->getNombre().'"/>
						<input type="submit" name="Modificar" value="Modificar"/>
					</div>
				</form>
			</div>
		';
    include_once './estructura/piedepagina.inc.php';
?>