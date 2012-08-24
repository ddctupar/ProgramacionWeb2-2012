<div class="leftPanel">
	<h1>Administración</h1>
	<ul class="menuAdministracion">
		<li><a href="http://localhost/tupar/clicksi/admRubros.php">Rubros</a>
		</li>
		<li><a href="http://localhost/tupar/clicksi/admProductos.php">Productos</a>
		</li>
	</ul>
<?php
session_start();
echo '<br><br><br><br><h5>'."Sesión iniciada por: ".'<h6>'.$_SESSION['usuario'].'<br><br><h3>';
?>
<ul class="menuAdministracion">
    <li><a href="http://localhost/tupar/clicksi/rutinas/cerrarSesion.php">Salir</a>
    </li>
</ul>
</div>
