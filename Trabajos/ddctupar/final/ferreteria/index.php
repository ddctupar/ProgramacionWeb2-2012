<?php
include_once('config.php');
include_once ('HTML/Template/Sigma.php');
require_once 'DataObjects/Categoria.php';
require_once 'DataObjects/Producto.php';
require_once 'DataObjects/Cliente.php';
require_once 'DataObjects/Compra.php';
require_once 'Mail.php';
session_start();

//Creo una instancia del objeto Sigma
$tpl = new HTML_Template_Sigma('.');
//Cargo el archivo del template
$error=$tpl->loadTemplateFile("/templates/principal.html");
//Carga cuadro de categorias
//esta restriccion es para que cuando sea administrador no cargue las categorias.
if (!isset($_SESSION['admin'])){
	//Creo una instancia del objeto Categoria
	$categorias = new DO_Categoria;
	//Cargo categorias
	$categorias->groupBy('tipo');
	$categorias->find();
	while ($categorias->fetch()){
		$tpl->setVariable('tipo',$categorias->tipo);
		$tpl->parse('categorias');
	}
}
//Si se efectua una compra carga la facturacion en lugar del listado de productos
if (isset($_SESSION['compra'])){
	//Creo una instancia del objeto Compra
	$compra = new DO_Compra;
	//Cargo compra
	$total = 0;
	$totalacumulado = 0;
	$compra->find();
		while ($compra->fetch()){
			if ($compra->cliente_id_cliente == $_SESSION['idcliente'] and $compra->comprado == 1 and $compra->fecha == date("Y-m-d")){
				$total += (float)$compra->precio_total;
				$prod = new DO_Producto;
				$prod->find();
					while ($prod->fetch()){
						if ($compra->producto_id_producto == $prod->id_producto){
						$nombre = $prod->nombre;
						$preciounitario = $prod->precio;					
						}
					}
				$tpl->setVariable('facturacantidad',$compra->cantidad);
				$tpl->setVariable('facturapreciounitario',$preciounitario);
				$tpl->setVariable('facturaprecio',$compra->precio_total);
				$tpl->setVariable('facturaidproducto',$compra->producto_id_producto);
				$tpl->setVariable('facturanombreproducto',$nombre);
				$tpl->setVariable('facturapreciototal',$total);
				$totalacumulado += $total;
				$tpl->setVariable('facturatotal',$totalacumulado);
				$tpl->setVariable('facturafecha',$compra->fecha);
				$tpl->parse('factcompra');
			}
		}
		unset($_SESSION['compra']);
}
//Si en cambio es administrador carga su interface
elseif (isset($_SESSION['administrador'])){
	//echo "admin";
	$tpl->setVariable('Titulo','Seccion Administrador -LISTA DE PRODUCTOS GUARDADOS EN LA BASE DE DATOS-');
	$producto = new DO_Producto;
			//Cargo productos
			$producto->find();
				while ($producto->fetch()) {
					$tpl->setVariable('adminnombre',$producto->nombre);
  					$tpl->setVariable('admincodigo',$producto->id_producto);
  					$tpl->setVariable('adminprecio',$producto->precio);
					$tpl->setVariable('admindescripcion',$producto->descripcion);
					$cat = new DO_Categoria;
					$cat->find();
					while ($cat->fetch()) {
						if ($producto->id_producto == $cat->producto_id_producto){
							$tpl->setVariable('admincategoria',$cat->tipo);
						}
					}
  					$tpl->parse('administradorlistaproductos');
				}
	$tpl->parse('administrador');
	//pregunto para cargar el panel de edicion o carga de productos
	if (isset($_SESSION['admin'])){
		if (isset($_SESSION['edit'])){
			$tpl->setVariable('productname',$_SESSION['item']['nombre']);
			$tpl->setVariable('productprice',$_SESSION['item']['precio']);
			$tpl->setVariable('productcategory',$_SESSION['item']['categoria']);
			$tpl->setVariable('productdescription',$_SESSION['item']['descripcion']);
			$tpl->setVariable('image',$_SESSION['item']['imagen']);
			$tpl->setVariable('id',$_SESSION['item']['id']);
			$tpl->parse('administradorEditar');
			unset($_SESSION['edit']);
		}
		if (isset($_SESSION['insert'])){
			$tpl->setVariable('productname','Nombre');
			$tpl->setVariable('id',$_SESSION['idproductoinsert']);
			$tpl->parse('administradorInsertar');
			unset($_SESSION['insert']);
		}
	}
	//unset($_SESSION['administrador']);	
}
//si no... comienza carga normal de productos y categorias
else
{
	//preguntamos si esta seteadda la variable nombrecategoria la cual se setea haciendo click en el recuadro de categorias
	if (isset($_GET['nombrecategoria'])){
		// carga los productos de la categoria seleccionada
		$categorias1 = new DO_Categoria;
		//$categorias1->query("SELECT * FROM {$categorias1->__table} WHERE tipo = '$_GET[nombrecategoria]'");
		$categorias1->tipo = $_GET['nombrecategoria'];
		$categorias1->find();
		while ($categorias1->fetch()){
			//Creo una instancia del objeto producto
			$producto = new DO_Producto;
			//Cargo productos
			//$producto->query("SELECT * FROM {$producto->__table} WHERE id_producto = $categorias1->producto_id_producto");
			$producto->id_producto = $categorias1->producto_id_producto;
			$producto->find();
				while ($producto->fetch()) {
					$tpl->setVariable('nombre',$producto->nombre);
  					$tpl->setVariable('codigo',$producto->id_producto);
  					$tpl->setVariable('precio',$producto->precio);
					$tpl->setVariable('imagenproducto',$producto->imagen);
  					//$tpl->parse('productos');
				}
			$tpl->parse('productos');
		}
	$tpl->clearVariables();
	}
	//si no hay categoria seleccionada carga el listado normal de productos
	else
	{
	//Creo una instancia del objeto producto
	$producto = new DO_Producto;
	$producto->find();
		while ($producto->fetch()) {
  			$tpl->setVariable('nombre',$producto->nombre);
  			$tpl->setVariable('codigo',$producto->id_producto);
  			$tpl->setVariable('precio',$producto->precio);
			$tpl->setVariable('idcategoria',$producto->categoria_id_categoria);
			$tpl->setVariable('desc',$producto->descripcion);
			$tpl->setVariable('imagenproducto',$producto->imagen);
  			$tpl->parse('productos');
  		}
	$tpl->clearVariables();
	}
}
//Si no hay seteos carga normal prosigue cargando el cuadro de login y el carro de compras.
if (!isset($_SESSION['registrarse'])){
	//Creo una instancia del objeto cliente
	$cliente = new DO_Cliente;
	//Si esta seteada la variable global $_SESSION con el nombre del cliente carga su interface con el nombre
	if (isset($_SESSION['nombrecliente'])){
		$nombrecliente = $_SESSION['nombrecliente'];
		$cliente->find();
			while ($cliente->fetch()) {
  				$tpl->setVariable('nombrecliente',$nombrecliente);
  			}
		//Comienza carga del carro de compras
		if ( !isset($_SESSION['administrador']) ){
			//Creo una instancia del objeto Compra
			$compra = new DO_Compra;
			//Cargo compra
			$total = 0;
			$compra->find();
				while ($compra->fetch()){
					if ($compra->cliente_id_cliente == $_SESSION['idcliente'] and $compra->comprado == 0){
						$total += (float)$compra->precio_total;
						$prod = new DO_Producto;
						$prod->find();
						while ($prod->fetch()){
							if ($compra->producto_id_producto == $prod->id_producto){
								$nombre = $prod->nombre;					
							}
						}
					$tpl->setVariable('listadocantidad',$compra->cantidad);
					$tpl->setVariable('listadoprecio',$compra->precio_total);
					$tpl->setVariable('listadoidproducto',$compra->producto_id_producto);
					$tpl->setVariable('listadonombreproducto',$nombre);
					$tpl->setVariable('listadopreciototal',$total);
					$tpl->parse('listado');
					}
				}
		}
	//Si NO esta seteada la variable global $_SESSION con el nombre del cliente carga el cuadro de login normal para poder iniciar sesion.
	}else{
	$tpl->setVariable('username','noname');
  	$tpl->parse('noregistrado');
	}
}
//var_dump($_SESSION);

//Muestra el template
$tpl->show();

?>1