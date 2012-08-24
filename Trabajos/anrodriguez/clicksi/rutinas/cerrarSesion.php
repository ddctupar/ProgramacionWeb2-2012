<?php
	require_once './util.php';
    session_start();
    session_destroy();
    redirigirPagina('','http://localhost/tupar/clicksi/index.php');
?>