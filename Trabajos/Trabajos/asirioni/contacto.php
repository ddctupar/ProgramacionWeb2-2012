  <?php
  require_once("clases/clases.inc.php");
  $manager = new Mysql; 
  if (isset ($_POST['enviar'])) {
    // mysql_escape_string usada por seguridad. Impide que realicen inyecciones en la base de datos.
    $Nombre = mysql_escape_string(htmlspecialchars(stripslashes($_POST['nom'])));
    $Titulo =     mysql_escape_string(htmlspecialchars(stripslashes($_POST['titulo'])));
    $Texto =    mysql_escape_string(htmlspecialchars(stripslashes($_POST['texto'])));
    $Email =    mysql_escape_string(htmlspecialchars(stripslashes($_POST['mail'])));
    $contacto = $manager->insertarContacto($Nombre,$Titulo,$Texto   ,$Email);
    echo "Se ha recibido su mensaje.";
  } else { ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Mas Luz Productos Electricos e Iluminacion</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="estilo.css" />
<script type="text/javascript" src="validar.js"></script>
</head>
<body>

<!-- Comienza wrapper -->
<div id="wrapper">
  <!-- Comienza Header -->
<?php include('header.html'); ?>
  <!-- Fin Header -->
  
  <!-- Comienza imagen de seccion -->
  <div id="image-seccion-portada">
  </div>
  <!-- Fin del menu -->
  
  <!-- Comienza Comunas de navegacion -->
  <div id="navegacion">
  <!-- Comienza Comunas de navegacion -->
  <div id="navegacion">
    <!-- Comienza columna de contenido -->
    <div id="contenido">
      <h1> Contactenos:</h1>
      <p> Texto ejemplo ,Texto ejemplo.<br />
      </p>
      <form id="form1" method="post" action="contacto.php" onsubmit="return Validar(this);">
        <p>
          <label>Nombre y Apellido:<br />
            <input name="nom" type="text" id="nom" size="50" />
          </label>
        </p>
        <p>
          <label>Titulo:<br />
            <input name="titulo" type="text" id="titulo" size="60" />
          </label>
        </p>
        <p>
          <label>E-mail:<br />
<input name="mail" type="text" id="mail" size="40" />
          </label>
        </p>
        <p>
          <label>Consulta:
            <br />
            <textarea name="texto" id="texto" cols="45" rows="5"></textarea>
          </label>
        </p>
        <p>
          <label>
            <input type="submit" name="enviar" id="enviar" value="Enviar" />
          </label>
        </p>
        <p>&nbsp;</p>
      </form>
      <p>&nbsp; </p>
    </div>  
   <!-- Fin Columna Contenido -->
    
    <!-- Comienzo Columna Derecha -->
    <div id="columnder">
      <p style="margin:8px 0;"> Complete el formulario de contacto y nos comunicaremos con usted en breve. E-mail: masluztandil@gmail.com - Domicilio: Rodriguez 1213 </p>
      <div class="clear"> </div>
    </div>
    <!-- Fin columna derecha -->
  </div>
  <!-- Fin Columnas de Navegacion -->
  <!-- Comienza Footer -->
<?php include('footer.html'); ?>
  <!-- Fin Footer -->
  
</div>
<!-- Fin Wrapper -->

</body>
</html>
<?php } ?>