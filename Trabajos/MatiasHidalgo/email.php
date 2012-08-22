<?php
require_once('DBmanager.inc.php');
$dbmanager=new DBmanager;
$consulta=new Consulta;
$consulta=$dbmanager->crearConsulta($_POST['nombre'],$_POST['apellido'],$_POST['tipodni'],$_POST['dni'],$_POST['email'],$_POST['consulta']);
$dbmanager->sendConsulta($consulta);
require_once('cabecera.php');
require_once('menu.php');
?>
<div class="contenido">
Muchas gracias por enviar su consulta Sr./a <?php echo($consulta->get_apellido().", ".$consulta->get_nombre()); ?> <br/>
<br/>
En breve le contestaremos su consulta. <br/>
</div>
<?php 
require_once('piedepagina.php');
?>