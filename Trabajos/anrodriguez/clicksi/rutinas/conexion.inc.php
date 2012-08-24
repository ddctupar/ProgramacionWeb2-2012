<?php
	require_once 'config.php';
	require_once './rutinas/consultas.php';
	require_once './clases/Mysqldb.php';
	require_once './clases/DbManager.php';
	require_once './rutinas/util.php';
	
    
    session_start();
    if (!isset($_SESSION['usuario']) ) {
        $par_usuario 		= $_POST["usuario"];
        $par_contrasenia 	= $_POST["contrasenia"];
        $db 	= new mysqldb(SERVER, USER, PASSWORD, BASEDATOS);
        $dbMgr	= new DbManager($db);
        $usuario = $dbMgr->getUsuarioById($par_usuario);
        if (!$usuario) { // Ir a página de error de conexión
            errorConexionPagina();
        } else {
            if (!$usuario->validarPassword($par_contrasenia)) {
                errorConexionPagina();
            }
        else {
            $_SESSION['usuario']=$par_usuario;
            }    
        }
        $db->closedb();        
    }
?>