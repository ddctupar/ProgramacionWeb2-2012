<?php
function errorConexionPagina(){
	echo "	<script languaje='JavaScript'>
			location.href='/tupar/clicksi/errorConexion.php';
			</script>";
}

function redirigirPagina($txtMsg, $pagina) {
	echo "<script languaje='JavaScript'>";
	if ($txtMsg<>'')
		echo "alert('$txtMsg');";
	echo "location.href='$pagina'</script>";
}
?>
