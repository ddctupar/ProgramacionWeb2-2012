<?php
class Repuesto{
	private $id_repuesto;
	private $nombre;
	private $tipo;
	private $marca;
	private $estado;
	private $observaciones;
	
//funciones relacionadas con la variable id_repuesto
	public function set_id_repuesto($id_repuesto){
		$this->id_repuesto=$id_repuesto;
	}
	
	public function get_id_repuesto(){
		return $this->id_repuesto;
	}
//funciones relacionadas con la variable nombre
	public function set_nombre($nombre){
		$this->nombre=$nombre;
	}
	
	public function get_nombre(){
		return $this->nombre;
	}
//funciones relacionadas con la variable tipo	
	public function set_tipo($tipo){
		$this->tipo=$tipo;
	}
	
	public function get_tipo(){
		return $this->tipo;
	}
//funciones relacionadas con la variable marca	
	public function set_marca($marca){
		$this->marca=$marca;
	}
	
	public function get_marca(){
		return $this->marca;
	}
//funciones relacionadas con la variable estado	
	public function set_estado($estado){
		$this->estado=$estado;
	}
	
	public function get_estado(){
		return $this->estado;
	}
//funciones relacionadas con la variable observaciones	
	public function set_observaciones($observaciones){
		$this->observaciones=$observaciones;
	}
	
	public function get_observaciones(){
		return $this->observaciones;
	}
}

class Usuario{
	private $id_usuario;
	private $cuenta;
	private $contras;
	private $nombre;
	private $apellido;
	private $direccion;
	private $telefono;
	private $celular;
	private $ciudad;
	private $email;
	private $observaciones;
	
//funciones relacionadas con la variable id_usuario
	public function set_id_usuario($id_usuario){
		$this->id_usuario=$id_usuario;
	}
	
	public function get_id_usuario(){
		return $this->id_usuario;
	}
//funciones relacionadas con la variable cuenta
	public function set_cuenta($cuenta){
		$this->cuenta=$cuenta;
	}
	
	public function get_cuenta(){
		return $this->cuenta;
	}	
//funciones relacionadas con la variable contras
	public function set_contras($contras){
		$this->contras=$contras;
	}
	
	public function get_contras(){
		return $this->contras;
	}
//funciones relacionadas con la variable nombre
	public function set_nombre($nombre){
		$this->nombre=$nombre;
	}
	
	public function get_nombre(){
		return $this->nombre;
	}
//funciones relacionadas con la variable apellido
	public function set_apellido($apellido){
		$this->apellido=$apellido;
	}
	
	public function get_apellido(){
		return $this->apellido;
	}
//funciones relacionadas con la variable direccion	
	public function set_direccion($direccion){
		$this->direccion=$direccion;
	}
	
	public function get_direccion(){
		return $this->direccion;
	}
//funciones relacionadas con la variable telefono	
	public function set_telefono($telefono){
		$this->telefono=$telefono;
	}
	
	public function get_telefono(){
		return $this->telefono;
	}
//funciones relacionadas con la variable celular	
	public function set_celular($celular){
		$this->celular=$celular;
	}
	
	public function get_celular(){
		return $this->celular;
	}
//funciones relacionadas con la variable ciudad	
	public function set_ciudad($ciudad){
		$this->ciudad=$ciudad;
	}
	
	public function get_ciudad(){
		return $this->ciudad;
	}
//funciones relacionadas con la variable email	
	public function set_email($email){
		$this->email=$email;
	}
	
	public function get_email(){
		return $this->email;
	}
//funciones relacionadas con la variable observaciones	
	public function set_observaciones($observaciones){
		$this->observaciones=$observaciones;
	}
	
	public function get_observaciones(){
		return $this->observaciones;
	}
}

class Equipo{
	private $id_equipo;
	private $tipo;
	private $modelo;
	private $marca;
	private $nro_serie;
	private $adquiridoen;
	private $fechacompra;
	private $nrofactura;

//funciones relacionadas con la variable id_equipo
	public function set_id_equipo($id_equipo){
		$this->id_equipo=$id_equipo;
	}
	
	public function get_id_equipo(){
		return $this->id_equipo;
	}
//funciones relacionadas con la variable tipo	
	public function set_tipo($tipo){
		$this->tipo=$tipo;
	}
	
	public function get_tipo(){
		return $this->tipo;
	}
//funciones relacionadas con la variable modelo
	public function set_modelo($modelo){
		$this->modelo=$modelo;
	}
	
	public function get_modelo(){
		return $this->modelo;
	}
//funciones relacionadas con la variable marca	
	public function set_marca($marca){
		$this->marca=$marca;
	}
	
	public function get_marca(){
		return $this->marca;
	}
//funciones relacionadas con la variable nro_serie	
	public function set_nro_serie($nro_serie){
		$this->nro_serie=$nro_serie;
	}
	
	public function get_nro_serie(){
		return $this->nro_serie;
	}
//funciones relacionadas con la variable adquiridoen	
	public function set_adquiridoen($adquiridoen){
		$this->adquiridoen=$adquiridoen;
	}
	
	public function get_adquiridoen(){
		return $this->adquiridoen;
	}
//funciones relacionadas con la variable fechacompra	
	public function set_fechacompra($fechacompra){
		$this->fechacompra=$fechacompra;
	}
	
	public function get_fechacompra(){
		return $this->fechacompra;
	}
//funciones relacionadas con la variable nro_serie	
	public function set_nrofactura($nrofactura){
		$this->nrofactura=$nrofactura;
	}
	
	public function get_nrofactura(){
		return $this->nrofactura;
	}
}

class Equipo_so{
	private $id_equipo_so;
	private $id_serviceo;
	private $cod_id_so;
	private $fecha_pedido;
	private $fecha_respuesta;
	private $estado;

//funciones relacionadas con la variable id_equipo_so
	public function set_id_equipo_so($id_equipo_so){
		$this->id_equipo_so=$id_equipo_so;
	}
	
	public function get_id_equipo_so(){
		return $this->id_equipo_so;
	}
//funciones relacionadas con la variable id_serviceo
	public function set_id_serviceo($id_serviceo){
		$this->id_serviceo=$id_serviceo;
	}
	
	public function get_id_serviceo(){
		return $this->id_serviceo;
	}
//funciones relacionadas con la variable cod_id_so
	public function set_cod_id_so($cod_id_so){
		$this->cod_id_so=$cod_id_so;
	}
	
	public function get_cod_id_so(){
		return $this->cod_id_so;
	}
//funciones relacionadas con la variable fecha_pedido
	public function set_fecha_pedido($fecha_pedido){
		$this->fecha_pedido=$fecha_pedido;
	}
	
	public function get_fecha_pedido(){
		return $this->fecha_pedido;
	}
//funciones relacionadas con la variable fecha_respuesta
	public function set_fecha_respuesta($fecha_respuesta){
		$this->fecha_respuesta=$fecha_respuesta;
	}
	
	public function get_fecha_respuesta(){
		return $this->fecha_respuesta;
	}
//funciones relacionadas con la variable estado	
	public function set_estado($estado){
		$this->estado=$estado;
	}
	
	public function get_estado(){
		return $this->estado;
	}
}

class Service_oficial{
	private $id_serviceo;
	private $nombre;
	private $sitio_web;
	private $tipodeorden;
//funciones relacionadas con la variable id_serviceo
	public function set_id_serviceo($id_serviceo){
		$this->id_serviceo=$id_serviceo;
	}
	
	public function get_id_serviceo(){
		return $this->id_serviceo;
	}
//funciones relacionadas con la variable nombre
	public function set_nombre($nombre){
		$this->nombre=$nombre;
	}
	
	public function get_nombre(){
		return $this->nombre;
	}
//funciones relacionadas con la variable sitio_web
	public function set_sitio_web($sitio_web){
		$this->sitio_web=$sitio_web;
	}
	
	public function get_sitio_web(){
		return $this->sitio_web;
	}
//funciones relacionadas con la variable tipodeorden
	public function set_tipodeorden($tipodeorden){
		$this->tipodeorden=$tipodeorden;
	}
	
	public function get_tipodeorden(){
		return $this->tipodeorden;
	}	
}

class Noticia{
	private $id_noticia;
	private $noticia;
	private $fecha;
//funciones relacionadas con la variable id_noticia
	public function set_id_noticia($id_noticia){
		$this->id_noticia=$id_noticia;
	}
	
	public function get_id_noticia(){
		return $this->id_noticia;
	}	
//funciones relacionadas con la variable noticia
	public function set_noticia($noticia){
		$this->noticia=$noticia;
	}
	
	public function get_noticia(){
		return $this->noticia;
	}	
//funciones relacionadas con la variable fecha
	public function set_fecha($fecha){
		$this->fecha=$fecha;
	}
	
	public function get_fecha(){
		return $this->fecha;
	}	
}

class Consulta{
	private $id_consulta;
	private $nombre;
	private $apellido;
	private $tipo_doc;
	private $num_doc;
	private $email;
	private $consulta;

//funciones relacionadas con la variable id_consulta
	public function set_id_consulta($id_consulta){
		$this->id_consulta=$id_consulta;
	}
	
	public function get_id_consulta(){
		return $this->id_consulta;
	}
//funciones relacionadas con la variable nombre
	public function set_nombre($nombre){
		$this->nombre=$nombre;
	}
	
	public function get_nombre(){
		return $this->nombre;
	}
//funciones relacionadas con la variable apellido
	public function set_apellido($apellido){
		$this->apellido=$apellido;
	}
	
	public function get_apellido(){
		return $this->apellido;
	}
//funciones relacionadas con la variable tipo_doc
	public function set_tipo_doc($tipo_doc){
		$this->tipo_doc=$tipo_doc;
	}
	
	public function get_tipo_doc(){
		return $this->tipo_doc;
	}
//funciones relacionadas con la variable num_doc
	public function set_num_doc($num_doc){
		$this->num_doc=$num_doc;
	}
	
	public function get_num_doc(){
		return $this->num_doc;
	}
//funciones relacionadas con la variable email
	public function set_email($email){
		$this->email=$email;
	}
	
	public function get_email(){
		return $this->email;
	}
//funciones relacionadas con la variable consulta
	public function set_consulta($consulta){
		$this->consulta=$consulta;
	}
	
	public function get_consulta(){
		return $this->consulta;
	}	
}

class Orden{
	private $nro_orden;
	private $id_usuario;
	private $id_equipo;
	private $descripcion;
	private $observaciones;
	private $fecha_presupuesto;
	private $fecha_reparado;
	private $fecha_prometido;
	private $fecha_entrega;
	private $fecha_ingreso;
	private $estado;
	
/*	private $tipo;
	private $marca;
	private $modelo;
	private $nro_serie;
	private $otros;
*/

//funciones relacionadas con la variable nro_orden
	public function set_nro_orden($nro_orden){
		$this->nro_orden=$nro_orden;
	}
	
	public function get_nro_orden(){
		return $this->nro_orden;
	}
//funciones relacionadas con la variable id_usuario
	public function set_id_usuario($id_usuario){
		$this->id_usuario=$id_usuario;
	}
	
	public function get_id_usuario(){
		return $this->id_usuario;
	}
//funciones relacionadas con la variable id_equipo
	public function set_id_equipo($id_equipo){
		$this->id_equipo=$id_equipo;
	}
	
	public function get_id_equipo(){
		return $this->id_equipo;
	}
//funciones relacionadas con la variable descripcion
	public function set_descripcion($descripcion){
		$this->descripcion=$descripcion;
	}
	
	public function get_descripcion(){
		return $this->descripcion;
	}
//funciones relacionadas con la variable observaciones	
	public function set_observaciones($observaciones){
		$this->observaciones=$observaciones;
	}
	
	public function get_observaciones(){
		return $this->observaciones;
	}
//funciones relacionadas con la variable fecha_presupuesto
	public function set_fecha_presupuesto($fecha_presupuesto){
		$this->fecha_presupuesto=$fecha_presupuesto;
	}
	
	public function get_fecha_presupuesto(){
		return $this->fecha_presupuesto;
	}
//funciones relacionadas con la variable fecha_reparado
	public function set_fecha_reparado($fecha_reparado){
		$this->fecha_reparado=$fecha_reparado;
	}
	
	public function get_fecha_reparado(){
		return $this->fecha_reparado;
	}
//funciones relacionadas con la variable fecha_prometido
	public function set_fecha_prometido($fecha_prometido){
		$this->fecha_prometido=$fecha_prometido;
	}
	
	public function get_fecha_prometido(){
		return $this->fecha_prometido;
	}
//funciones relacionadas con la variable fecha_entrega
	public function set_fecha_entrega($fecha_entrega){
		$this->fecha_entrega=$fecha_entrega;
	}
	
	public function get_fecha_entrega(){
		return $this->fecha_entrega;
	}
//funciones relacionadas con la variable fecha_ingreso
	public function set_fecha_ingreso($fecha_ingreso){
		$this->fecha_ingreso=$fecha_ingreso;
	}
	
	public function get_fecha_ingreso(){
		return $this->fecha_ingreso;
	}
//funciones relacionadas con la variable estado	
	public function set_estado($estado){
		$this->estado=$estado;
	}
	
	public function get_estado(){
		return $this->estado;
	}
}


class DBmanager{
	private $conexion;
	private $resultado;

	public function conectar(){// Conectando, seleccionando la base de datos
		$this->conexion = mysql_connect('127.0.0.1', 'root', '') or die('No se pudo conectar: ' . mysql_error());
		mysql_select_db('sgt') or die('No se pudo seleccionar la base de datos');
	}

	public function desconectar(){// Cerrar la conexión
		mysql_close($this->conexion);
	}
	
	public function consultar($consulta){// Consulta a la Base de Datos
		$this->resultado = mysql_query($consulta) or die('Consulta fallida: ' . mysql_error());
		return $this->resultado;
	}

	public function limpiar_resultado(){// Limpia resultados cargados en la variable $resultado
		mysql_free_result($this->resultado);
	}

// Funciones relacionadas con las Ordenes(Crear,Alta, Getters)
	public function crearOrden($nro_orden,$id_usuario,$id_equipo,$descripcion,$observaciones,$fecha_prometido,$fecha_ingreso,$estado){
		$ord=new Orden;
		$ord->set_nro_orden($nro_orden);	
		$ord->set_id_usuario($id_usuario);
		$ord->set_id_equipo($id_equipo);
		$ord->set_descripcion($descripcion);
		$ord->set_observaciones($observaciones);
		$ord->set_fecha_prometido($fecha_prometido);
		$ord->set_fecha_ingreso($fecha_ingreso);
		$ord->set_estado($estado);
		return $ord;
	}
	
	public function altaOrden($ord){
		$dbmanager = new DBmanager;
		$orden=new Orden;
		$orden=$ord;
		$dbmanager->conectar();
		$dbmanager->consultar("INSERT INTO ordenes (nro_orden ,id_usuario ,id_equipo ,descripcion ,observaciones ,fecha_prometido ,fecha_ingreso ,estado) 
		VALUES ('".$orden->get_nro_orden()."', '".$orden->get_id_usuario()."', '".$orden->get_id_equipo()."', '".$orden->get_descripcion()."', '".$orden->get_observaciones()."', '".$orden->get_fecha_prometido()."', '".$orden->get_fecha_ingreso()."', '".$orden->get_estado()."');");
		$dbmanager->desconectar();
	}
	
	public function getOrdenByNro_orden($Nro_orden){
		$dbmanager = new DBmanager;
		$dbmanager->conectar();
		$dbmanager->resultado = $dbmanager->consultar("SELECT * FROM ordenes WHERE nro_orden='".$Nro_orden."';");
		$cant_resul = mysql_num_rows($dbmanager->resultado);
		$orden=NULL;
		if ($cant_resul==1){
			$fila = mysql_fetch_assoc($dbmanager->resultado);
			$orden=new Orden;
			$orden->set_nro_orden($fila['nro_orden']);
			$orden->set_id_usuario($fila['id_usuario']);
			$orden->set_id_equipo($fila['id_equipo']);
			$orden->set_descripcion($fila['descripcion']);
			$orden->set_observaciones($fila['observaciones']);
			$orden->set_fecha_ingreso($fila['fecha_ingreso']);
			$orden->set_fecha_presupuesto($fila['fecha_presupuesto']);
			$orden->set_fecha_reparado($fila['fecha_reparado']);
			$orden->set_fecha_prometido($fila['fecha_prometido']);
			$orden->set_fecha_entrega($fila['fecha_entrega']);
			$orden->set_estado($fila['estado']);
		}
		$dbmanager->limpiar_resultado();
		$dbmanager->desconectar();
		return($orden);
	}
	
	public function getOrdenes($cantidad){
		$dbmanager = new DBmanager;
		$dbmanager->conectar();
		if(!isset($cantidad) or $cantidad>30){
			$cantidad=30;
		}
		$cantidadmenor=$cantidad-30;
		$dbmanager->resultado = $dbmanager->consultar("SELECT * FROM ordenes LIMIT ".$cantidadmenor." , ".$cantidad.";");
		$listado[cant_resul] = mysql_num_rows($dbmanager->resultado);
		if ($listado[cant_resul]>0){
			while($fila = mysql_fetch_assoc($dbmanager->resultado)){
				$orden=new Orden;
				$orden->set_nro_orden($fila['nro_orden']);
				$orden->set_id_usuario($fila['id_usuario']);
				$orden->set_id_equipo($fila['id_equipo']);
				$orden->set_descripcion($fila['descripcion']);
				$orden->set_observaciones($fila['observaciones']);
				$orden->set_fecha_ingreso($fila['fecha_ingreso']);
				$orden->set_fecha_presupuesto($fila['fecha_presupuesto']);
				$orden->set_fecha_reparado($fila['fecha_reparado']);
				$orden->set_fecha_prometido($fila['fecha_prometido']);
				$orden->set_fecha_entrega($fila['fecha_entrega']);
				$orden->set_estado($fila['estado']);
				$listado[]=$orden;
			}
		}
		$dbmanager->limpiar_resultado();
		$dbmanager->desconectar();
		return($listado);
	}

// Funciones relacionadas con los Usuarios(Crear,Alta, Getters)
	public function crearUsuario($cuenta,$contras,$nombre,$apellido,$direccion,$telefono,$celular,$ciudad,$email,$observaciones){
		$user=new Usuario;
		$user->set_cuenta($cuenta);
		$user->set_contras($contras);
		$user->set_nombre($nombre);	
		$user->set_apellido($apellido);
		$user->set_direccion($direccion);
		$user->set_telefono($telefono);
		$user->set_celular($celular);
		$user->set_ciudad($ciudad);
		$user->set_email($email);
		$user->set_observaciones($observaciones);
		return $user;
	}

	public function altaUsuario($user){
		$dbmanager = new DBmanager;
		$usuario=new Usuario;
		$usuario=$user;
		$dbmanager->conectar();
		$dbmanager->consultar("INSERT INTO usuarios (cuenta, contras, nombre ,apellido ,direccion ,telefono ,celular ,ciudad ,email ,observaciones) 
		VALUES ('".$usuario->get_cuenta()."', '".$usuario->get_contras()."', '".$usuario->get_nombre()."', '".$usuario->get_apellido()."', '".$usuario->get_direccion()."', '".$usuario->get_telefono()."', '".$usuario->get_celular()."', '".$usuario->get_ciudad()."' '".$usuario->get_email()."', '".$usuario->get_observaciones()."');");
		$dbmanager->desconectar();
	}
	
	public function getUsuarioByID($id_usuario){
		$dbmanager = new DBmanager;
		$dbmanager->conectar();
		$dbmanager->resultado = $dbmanager->consultar("SELECT * FROM usuarios WHERE id_usuario=".$id_usuario.";");
		$cant_resul = mysql_num_rows($dbmanager->resultado);
		$usuario=NULL;
		if ($cant_resul==1){
			$fila = mysql_fetch_assoc($dbmanager->resultado);
			$usuario=new Usuario;
			$usuario->set_id_usuario($fila['id_usuario']);
			$usuario->set_cuenta($fila['cuenta']);
			$usuario->set_contras($fila['contras']);
			$usuario->set_nombre($fila['nombre']);
			$usuario->set_apellido($fila['apellido']);
			$usuario->set_direccion($fila['direccion']);
			$usuario->set_telefono($fila['telefono']);
			$usuario->set_celular($fila['celular']);
			$usuario->set_ciudad($fila['ciudad']);
			$usuario->set_email($fila['email']);
			$usuario->set_observaciones($fila['observaciones']);
		}
		$dbmanager->limpiar_resultado();
		$dbmanager->desconectar();
		return($usuario);
	}
	
	public function getUsuarios($cantidad){
		$dbmanager = new DBmanager;
		$dbmanager->conectar();
		if(!isset($cantidad) or $cantidad>30){
			$cantidad=30;
		}
		$cantidadmenor=$cantidad-30;
		$dbmanager->resultado = $dbmanager->consultar("SELECT * FROM usuarios LIMIT ".$cantidadmenor." , ".$cantidad.";");
		$listado[cant_resul] = mysql_num_rows($dbmanager->resultado);
		if ($listado[cant_resul]>0){
			while($fila = mysql_fetch_assoc($dbmanager->resultado)){
				$usuario=new Usuario;
				$usuario->set_id_usuario($fila['id_usuario']);
				$usuario->set_cuenta($fila['cuenta']);
				$usuario->set_contras($fila['contras']);
				$usuario->set_nombre($fila['nombre']);
				$usuario->set_apellido($fila['apellido']);
				$usuario->set_direccion($fila['direccion']);
				$usuario->set_telefono($fila['telefono']);
				$usuario->set_celular($fila['celular']);
				$usuario->set_ciudad($fila['ciudad']);
				$usuario->set_email($fila['email']);
				$usuario->set_observaciones($fila['observaciones']);
				$listado[]=$usuario;
			}
		}
		$dbmanager->limpiar_resultado();
		$dbmanager->desconectar();
		return($listado);
	}
	
// Funciones relacionadas con los Equipos(Crear,Alta, Getters)
	public function crearEquipo($tipo,$modelo,$marca,$nro_serie,$adquiridoen,$fechacompra,$nrofactura){
		$aparato=new Equipo;
		$aparato->set_tipo($tipo);
		$aparato->set_modelo($modelo);
		$aparato->set_marca($marca);
		$aparato->set_nro_serie($nro_serie);
		$aparato->set_adquiridoen($adquiridoen);	
		$aparato->set_fechacompra($fechacompra);
		$aparato->set_nrofactura($nrofactura);
		return $aparato;
	}

	public function altaEquipo($aparato){
		$dbmanager = new DBmanager;
		$equipo=new Equipo;
		$equipo=$aparato;
		$dbmanager->conectar();
		$dbmanager->consultar("INSERT INTO equipos (tipo, modelo, marca, nro_serie, adquiridoen, fechacompra, nrofactura) VALUES ('".$equipo->get_tipo()."', '".$equipo->get_modelo()."', '".$equipo->get_marca()."', '".$equipo->get_nro_serie()."', '".$equipo->get_adquiridoen()."', '".$equipo->get_fechacompra()."', '".$equipo->get_nrofactura()."');");
		$dbmanager->desconectar();
	}
		
	public function getEquipoByID($id_equipo){
		$dbmanager = new DBmanager;
		$dbmanager->conectar();
		$dbmanager->resultado = $dbmanager->consultar("SELECT * FROM equipos WHERE id_equipo=".$id_equipo.";");
		$cant_resul = mysql_num_rows($dbmanager->resultado);
		$equipo=NULL;
		if ($cant_resul==1){
			$fila = mysql_fetch_assoc($dbmanager->resultado);
			$equipo=new Equipo;
			$equipo->set_id_equipo($fila['id_equipo']);
			$equipo->set_tipo($fila['tipo']);
			$equipo->set_modelo($fila['modelo']);
			$equipo->set_marca($fila['marca']);
			$equipo->set_nro_serie($fila['nro_serie']);
			$equipo->set_adquiridoen($fila['adquiridoen']);
			$equipo->set_nrofactura($fila['nrofactura']);
			$equipo->set_fechacompra($fila['fechacompra']);
		}
		$dbmanager->limpiar_resultado();
		$dbmanager->desconectar();
		return($equipo);
	}
	
	public function getEquipos($cantidad){
		$dbmanager = new DBmanager;
		$dbmanager->conectar();
		if(!isset($cantidad) or $cantidad>30){
			$cantidad=30;
		}
		$cantidadmenor=$cantidad-30;
		$resultado = $dbmanager->consultar("SELECT * FROM equipos LIMIT ".$cantidadmenor." , ".$cantidad.";");
		$listado[cant_resul] = mysql_num_rows($dbmanager->resultado);
		if ($listado[cant_resul]>0){
			while($fila = mysql_fetch_assoc($dbmanager->resultado)){
				$equipo=new Equipo;
				$equipo->set_id_equipo($fila['id_equipo']);
				$equipo->set_tipo($fila['tipo']);
				$equipo->set_modelo($fila['modelo']);
				$equipo->set_marca($fila['marca']);
				$equipo->set_nro_serie($fila['nro_serie']);
				$equipo->set_adquiridoen($fila['adquiridoen']);
				$equipo->set_nrofactura($fila['nrofactura']);
				$equipo->set_fechacompra($fila['fechacompra']);
				$listado[]=$equipo;
			}
		}
		$dbmanager->limpiar_resultado();
		$dbmanager->desconectar();
		return($listado);
	}
	
// Funciones relacionadas con las Consultas(Crear,Alta, Getters)
	public function crearConsulta($nombre,$apellido,$tipo_doc,$num_doc,$email,$consulta){
		$consul=new Consulta;
		$consul->set_nombre($nombre);	
		$consul->set_apellido($apellido);
		$consul->set_tipo_doc($tipo_doc);
		$consul->set_num_doc($num_doc);
		$consul->set_email($email);
		$consul->set_consulta($consulta);
		return $consul;
	}
	
	public function sendConsulta($consul){
		$dbmanager = new DBmanager;
		$consulta=new Consulta;
		$consulta=$consul;
		$dbmanager->conectar();
		$dbmanager->consultar("INSERT INTO consultas (nombre ,apellido ,tipo_doc ,num_doc ,email ,consulta) 
		VALUES ('".$consulta->get_nombre()."', '".$consulta->get_apellido()."', '".$consulta->get_tipo_doc()."', '".$consulta->get_num_doc()."', '".$consulta->get_email()."', '".$consulta->get_consulta()."');");
		$dbmanager->desconectar();
	}
	
	public function getConsultas($cantidad){
		$dbmanager = new DBmanager;
		$dbmanager->conectar();
		if(!isset($cantidad) or $cantidad>30){
			$cantidad=30;
		}
		$cantidadmenor=$cantidad-30;
		$dbmanager->resultado = $dbmanager->consultar("SELECT * FROM consultas LIMIT ".$cantidadmenor." , ".$cantidad.";");
		$listado[cant_resul] = mysql_num_rows($dbmanager->resultado);
		if ($listado[cant_resul]>0){
			while($fila = mysql_fetch_assoc($dbmanager->resultado)){
				$consulta=new Consulta;
				$consulta->set_id_consulta($fila['consulta']);
				$consulta->set_nombre($fila['nombre']);
				$consulta->set_apellido($fila['apellido']);
				$consulta->set_tipo_dni($fila['tipo_dni']);
				$consulta->set_num_dni($fila['num_dni']);
				$consulta->set_email($fila['email']);
				$consulta->set_consulta($fila['consulta']);
				$listado[]=$consulta;
			}
		}
		$dbmanager->limpiar_resultado();
		$dbmanager->desconectar();
		return($listado);
	}

// Funciones relacionadas con los Repuestos(Crear,Alta, Getters)
	
	public function crearRepuesto($nombre,$tipo,$marca,$estado,$observaciones){
		$repues=new Repuesto;
		$repues->set_nombre($nombre);	
		$repues->set_tipo($tipo);
		$repues->set_marca($marca);
		$repues->set_estado($estado);
		$repues->set_observaciones($observaciones);
		return $repues;
	}
	
	public function altaRepuesto($repues){
		$dbmanager = new DBmanager;
		$repuesto=new Repuesto;
		$repuesto=$repues;
		$dbmanager->conectar();
		$dbmanager->consultar("INSERT INTO consultas (nombre ,tipo ,marca ,estado ,observaciones) 
		VALUES ('".$repuesto->get_nombre()."', '".$repuesto->get_tipo()."', '".$repuesto->get_marca()."', '".$repuesto->get_estado()."', '".$repuesto->get_observaciones()."');");
		$dbmanager->desconectar();
	}	

	public function getRepuestos($cantidad){
		$dbmanager = new DBmanager;
		$dbmanager->conectar();
		if(!isset($cantidad) or $cantidad>30){
			$cantidad=30;
		}
		$cantidadmenor=$cantidad-30;
		$dbmanager->resultado = $dbmanager->consultar("SELECT * FROM repuestos LIMIT ".$cantidadmenor." , ".$cantidad.";");
		$listado[cant_resul] = mysql_num_rows($dbmanager->resultado);
		if ($listado[cant_resul]>0){
			while($fila = mysql_fetch_assoc($dbmanager->resultado)){
				$repuesto=new Repuesto;
				$repuesto->set_id_repuesto($fila['consulta']);
				$repuesto->set_nombre($fila['nombre']);
				$repuesto->set_tipo($fila['tipo']);
				$repuesto->set_marca($fila['marca']);
				$repuesto->set_estado($fila['estado']);
				$repuesto->set_observaciones($fila['observaciones']);
				$listado[]=$repuesto;
			}
		}
		$dbmanager->limpiar_resultado();
		$dbmanager->desconectar();
		return($listado);
	}
	
// Funciones relacionadas con los Noticias(Crear,Alta, Getters)
	
	public function crearNoticia($noticia,$fecha){
		$noti=new Noticia;
		$noti->set_noticia($noticia);	
		$noti->set_fecha($fecha);
		return $noti;
	}
	
	public function altaNoticia($noti){
		$dbmanager = new DBmanager;
		$noticia=new Noticia;
		$noticia=$noti;
		$dbmanager->conectar();
		$dbmanager->consultar("INSERT INTO consultas (noticia ,fecha) 
		VALUES ('".$noticia->get_noticia()."', '".$noticia->get_fecha()."');");
		$dbmanager->desconectar();
	}	

	public function getNoticias($cantidad){
		$dbmanager = new DBmanager;
		$dbmanager->conectar();
		if(!isset($cantidad) or $cantidad>30){
			$cantidad=30;
		}
		$cantidadmenor=$cantidad-30;
		$dbmanager->resultado = $dbmanager->consultar("SELECT * FROM noticias LIMIT ".$cantidadmenor." , ".$cantidad.";");
		$listado[cant_resul] = mysql_num_rows($dbmanager->resultado);
		if ($listado[cant_resul]>0){
			while($fila = mysql_fetch_assoc($dbmanager->resultado)){
				$noticia=new Noticia;
				$noticia->set_id_noticia($fila['id_noticia']);
				$noticia->set_noticia($fila['noticia']);
				$noticia->set_fecha($fila['fecha']);
				$listado[]=$noticia;
			}
		}
		$dbmanager->limpiar_resultado();
		$dbmanager->desconectar();
		return($listado);
	}

	public function getTresNoticias(){
		$dbmanager = new DBmanager;
		$dbmanager->conectar();
		$cantidad=3;
		$cantidadmenor=0;
		$dbmanager->resultado = $dbmanager->consultar("SELECT * FROM noticias LIMIT ".$cantidadmenor." , ".$cantidad.";");
		$listado[cant_resul] = mysql_num_rows($dbmanager->resultado);
		if ($listado[cant_resul]>0){
			while($fila = mysql_fetch_assoc($dbmanager->resultado)){
				$noticia=new Noticia;
				$noticia->set_id_noticia($fila['id_noticia']);
				$noticia->set_noticia($fila['noticia']);
				$noticia->set_fecha($fila['fecha']);
				$listado[]=$noticia;
			}
		}
		$dbmanager->limpiar_resultado();
		$dbmanager->desconectar();
		return($listado);
	}

}
?>