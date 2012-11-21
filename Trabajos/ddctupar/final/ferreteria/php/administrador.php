<?php 
include_once('../config.php');
include_once ('../HTML/Template/Sigma.php');
require_once '../DataObjects/Categoria.php';
require_once '../DataObjects/Producto.php';
require_once '../DataObjects/Cliente.php';
require_once '../DataObjects/Compra.php';
//include_once ('../HTML/Template/QuickForm.php');
require_once 'Mail.php';

session_start();
$imagen='';
//Datos recibidos por post
$idproducto=$_POST['item'];
 
//aca validamos si se ha enviado un archivo desde el formulario
if (isset($_POST['edit']) or isset($_POST['boton_enviar'])){
	$_SESSION['edit'] = true;
	if (isset($_POST['boton_enviar'])){
		$archivo_nombre= $_FILES["archivo"]["name"]; //aca se obtiene el nombre del archivo
		$archivo_tamaño = $_FILES["archivo"]["size"]; //tamaño del archivo
		$archivo_temporal = $_FILES["archivo"]["tmp_name"]; //direccion temporal en la que el servidor guarda el archivo antes de copiarlo
		$destino = '../imagenes/' ; //aca se define la direccion en la que quieres que se guarden los archivos cuando los subes al 				servidor
		copy($_FILES['archivo']['tmp_name'],$destino.'/'. $_FILES['archivo']['name']); //esta instruccion es la que copia el archivo de la carpeta temporal a su destino en el servidor 
		$imagen = $_FILES['archivo']['name'];
	}
	
	if ($imagen != ''){
	//actualiza la ruta en la base de datos
	//Datos recibidos por post
	$producto1 = new DO_Producto;
	$producto1->find();
		while ($producto1->fetch()){
			if ($_POST['item']['id'] == $producto1->id_producto){
				$producto1->imagen = 'imagenes/'.$imagen;
				$producto1->update();
			}
		}
	}	

	//echo $idproducto;
	//print_r($_POST);
	$producto = new DO_Producto;
	$producto->id_producto = $idproducto;
	$producto->find();
		while ($producto->fetch()){
			//if ($idproducto == $producto1->id_producto){
			$_SESSION['item']['nombre'] = $producto->nombre;
			$_SESSION['item']['precio'] = $producto->precio;
			$categoria = new DO_Categoria;
			$categoria->find();
				while ($categoria->fetch()){
					if ($producto->id_producto == $categoria->producto_id_producto){
						$_SESSION['item']['categoria'] = $categoria->tipo;		
					}
				}
			$_SESSION['item']['descripcion'] = $producto->descripcion;
			$_SESSION['item']['id'] = $producto->id_producto;
				if ($imagen != ''){
					$_SESSION['item']['imagen'] = 'imagenes/'.$imagen;
				}else{
					$_SESSION['item']['imagen'] = $producto->imagen;
				}
		}
header('Location: ../index.php');
}

if (isset($_POST['editarfinal'])){
	
	$name = $_POST['productname'];
	$price=$_POST['productprice'];
	$categorias=$_POST['productcategory'];
	$description =$_POST['productdescription'];
	$id=$_POST['item'];
	
	$product = new DO_Producto;
	$product->find();
		while ($product->fetch()){
			if ($product->id_producto == $id){
				$product->descripcion = $description;
				$product->nombre = $name;
				$product->precio = $price;
				$product->update();		
			}
		}
	$category = new DO_Categoria;
	$category->find();
		while ($category->fetch()){
			if ($category->producto_id_producto == $id){
				$category->tipo = $categorias;
				$category->update();		
			}
		}
	
	unset($_POST['editarfinal']);
	unset($_SESSION['edit']);
	header('Location: ../index.php');
}

if (isset($_POST['delete'])){
	$_SESSION['delete'] = true;
	$name = $_POST['productname'];
	$price=$_POST['productprice'];
	$categorias=$_POST['productcategory'];
	$description =$_POST['productdescription'];
	$id=$_POST['item'];
	
	$product = new DO_Producto;
	$product->find();
		while ($product->fetch()){
			if ($product->id_producto == $id){
				$product->descripcion = $description;
				$product->nombre = $name;
				$product->precio = $price;
				$product->delete();		
			}
		}
	$category = new DO_Categoria;
	$category->find();
		while ($category->fetch()){
			if ($category->producto_id_producto == $id){
				$category->producto_id_producto = $id;
				$category->delete();		
			}
		}
	
	
	unset($_SESSION['delete']);
	header('Location: ../index.php');
}

if (isset($_POST['insert']) or isset($_POST['insertarend'])){
	$_SESSION['insert'] = true;
	$_SESSION['idproductoinsert'] = $idproducto;
	$name = $_POST['productname'];
	$price=$_POST['productprice'];
	$categorias=$_POST['productcategory'];
	$description =$_POST['productdescription'];
	
	if (isset($_POST['insertarend'])){
		$product = new DO_Producto;
		$product->descripcion = $description;
		$product->nombre = $name;
		$product->precio = $price;
		$product->imagen = 'noimage';
		$product->insert();
		$pr = new DO_Producto;
		$pr->find();
		while ($pr->fetch()){
			if ($pr->nombre == $name and $pr->precio == $price){
				$category = new DO_Categoria;
				$category->tipo = $categorias;
				$category->producto_id_producto = $pr->id_producto;
				$category->insert();	
			}
		}
	unset($_POST['insertarend']);		
	}	
	//var_dump($_POST);
	//unset($_SESSION['delete']);
	header('Location: ../index.php');
}
//codigo del crono para el envio de mails al final del dia.
if (isset($_POST['enviacompras'])){
	
	$sale = new DO_Compra;
	echo '<pre>';
	//$timestamp = $_SERVER['REQUEST_TIME'];
	$fechahoy=date("Y-m-d");
	$sale->find();
		while ($sale->fetch()){
			//echo "$fechahoy  ** $sale->fecha //";
			if ($sale->fecha == $fechahoy and $sale->comprado == 1){
				$id_cliente=$sale->cliente_id_cliente;
				$id_producto = $sale->producto_id_producto;
				$precio_unitario = $sale->precio_unitario;
				$total_item = $sale->precio_total;
				$unidades = $sale->cantidad;
				$item = new DO_Producto;
				$item->find();
					while ($item->fetch()){
						if ($item->id_producto == $id_producto){
							$nombre_producto = $item->nombre;
						}
					}
				$client = new DO_Cliente;
				$client->find();
					while ($client->fetch()){
						if ($client->id_cliente == $id_cliente){
							$nombre_cliente = $client->nombre.' '.$client->apellido;
							$email= $client->email;
							
						}
					}
			$envio[$fechahoy][$id_cliente][$id_producto]['nombreproducto']=$nombre_producto;
			$envio[$fechahoy][$id_cliente][$id_producto]['nombrecliente']=$nombre_cliente;
			$envio[$fechahoy][$id_cliente][$id_producto]['preciounitario']=$precio_unitario;
			$envio[$fechahoy][$id_cliente][$id_producto]['totalitem']=$total_item;
			$envio[$fechahoy][$id_cliente][$id_producto]['unidades']=$unidades;
			$envio[$fechahoy][$id_cliente][$id_producto]['email']=$email ;
			
			}	
		}
		print_r($envio);
		//enviar mails
		echo '<pre>';
		foreach ($envio as $date=>$arregloclientes){
			
			foreach ($arregloclientes as $clienteid=>$arregloproductos){
				$body= '';
				$body = '<li>';
				$compratotal = 0;
				foreach ($arregloproductos as $productoid=>$arreglodatos){
					$compratotal += $arreglodatos['totalitem'];
					$body .='<ul>';
					$body .="Nombre Producto:$arreglodatos[nombreproducto]--Cantidad unidades:$arreglodatos[unidades]--Precio Total:$arreglodatos[totalitem]";
					$body .='</ul>';
					$datoscliente = $arreglodatos['nombrecliente'];
					
				}
				$body .="Total comprado en el dia de la fecha $date, por $datoscliente: $ $compratotal";
				$body .='</li>';
				$diremail = $arreglodatos['email'];
				echo $body;
				echo "/************************************************/";
				//envia mail
						
				$recipients = $diremail;
				$headers['From']    = 'webmail@ferreteriaweb.com.ar';
				$headers['To']      = $diremail;
				$headers['Subject'] = 'Facturacion de compra';
				//configuracion de parametros smtp dentro de $params['host'] etc.
				$params['sendmail_path'] = '/usr/lib/sendmail';
				/*
				$body = 'Test message';
		
				// Create the mail object using the Mail::factory method
				
				$mail_object = new Mail;
				$mail_object->factory('sendmail', $params);
				$mail_object->send($recipients, $headers, $body);*/
				echo "-->enviar-->";
			}
		}
		
	$link = "<br><a href='../index.php'>VOLVER AL SITIO</a>";	
	echo $link;
}

?>