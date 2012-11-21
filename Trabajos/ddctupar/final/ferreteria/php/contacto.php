<?php
require_once 'Mail.php';

$nombre= $_POST['nombre'];
$email= $_POST['correo'];
$comentario= $_POST['comentario'];
$diremail = 'webmailcontacto@ferreteria.com.ar';
echo '<pre>';
var_dump($_POST);

//envia mail
						
				$recipients = $diremail;
				$headers['From']    = $email;
				$headers['To']      = $diremail;
				$headers['Subject'] = 'Formulario de contacto';
				//configuracion de parametros smtp dentro de $params['host'] etc.
				$params['sendmail_path'] = '/usr/lib/sendmail';
				
				$body = $nombre.'-'.$email.'-'.$comentario;
		
				// Create the mail object using the Mail::factory method
				
				$mail_object = new Mail;
				/*
				$mail_object->factory('sendmail', $params);
				$mail_object->send($recipients, $headers, $body);*/
				echo "-->enviar-->";

$link = "<br><a href='../index.php'>VOLVER AL SITIO</a>";	
echo $link;
?>