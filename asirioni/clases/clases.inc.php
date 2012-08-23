<?php  

class Articulo {
	private $id_articulo;
	private $fecha;
	private $titulo;
	private $cuerpo;
	private $imagen;
    
	public function setId($id_articulo){
	$this->id_articulo=$id_articulo;
	}
	public function getId(){
	return $this->id_articulo;
	}
	public function setTitulo($titulo){
	$this->titulo=$titulo;
	}
	public function getTitulo(){
	return $this->titulo;
	}
	public function setCuerpo($cuerpo){
	$this->cuerpo=$cuerpo;
	}
	public function getCuerpo(){
	return $this->cuerpo;
	}
	public function setFecha($fecha){
	$this->fecha=$fecha;
	}
	public function getFecha(){
	return $this->fecha;
	}
	public function setImagen($imagen){
	$this->imagen=$imagen;
	}
	public function getImagen(){
	return $this->imagen;
	}
}

class Producto {
	private $id_producto;
	private $id_categoria;
	private $nombre;
	private $descripcion;
	private $imagen;
    
	public function setId($id_producto){
	$this->id_producto=$id_producto;
	}
	public function getId(){
	return $this->id_producto;
	}
	public function setCategoria($categoria){
	$this->categoria=$categoria;
	}
	public function getCategoria(){
	return $this->categoria;
	}
	public function setNombre($nombre){
	$this->nombre=$nombre;
	}
	public function getNombre(){
	return $this->nombre;
	}
	public function setDescripcion($descripcion){
	$this->descripcion=$descripcion;
	}
	public function getDescripcion(){
	return $this->descripcion;
	}
	public function setImagen($imagen){
	$this->imagen=$imagen;
	}
	public function getImagen(){
	return $this->imagen;
	}
}
class Categoria {
	private $id_categoria;
	private $nombre;
    
	public function setId($id_categoria){
	$this->id_categoria=$id_categoria;
	}
	public function getId(){
	return $this->id_categoria;
	}
	public function setNombreCat($nombre){
	$this->nombre=$nombre;
	}
	public function getNombreCat(){
	return $this->nombre;
	}
}
class Relacion {
	private $id_relacion;
	private $id_producto;
	private $id_articulo;
	    
	public function setId($id_relacion){
	$this->id_relacion=$id_relacion;
	}
	public function getId(){
	return $this->id_relacion;
	}
	public function setIdProd($id_producto){
	$this->id_producto=$id_producto;
	}
	public function getIdProd(){
	return $this->id_producto;
	}
	public function setIdArt($id_articulo){
	$this->id_articulo=$id_articulo;
	}
	public function getIdArt(){
	return $this->id_articulo;
	}
}



class Contactos{
private $id_producto;
	private $idcontactos;
	private $emisorcont;
	private $titulocont;
	private $contenidocont;
	private $emailcont;
	
    
	public function setId($idcontactos){
	$this->idcontactos=$idcontactos;
	}
	public function getId(){
	return $this->idcontactos;
	}
	public function setEmisorCont($emisorcont){
	$this->emisorcont=$emisorcont;
	}
	public function getEmisorCont(){
	return $this->EmisorCont;
	}
	public function setTituloCont($titulocont){
	$this->titulocont=$titulocont;
	}
	public function getTituloCont(){
	return $this->titulocont;
	}
	public function setContenidoCont($contenidocont){
	$this->contenidocont=$contenidocont;
	}
	public function getContenidoCont(){
	return $this->ContenidoCont;
	}
	public function setEmailCont($emailcont){
	$this->emailcont=$emailcont;
	}
	public function getEmailCont(){
	return $this->emailcont;
	}
}


class MySQL{  
	private $conexion;  
	private $total_consultas;  
  
	public function MySQL(){  
	if(!isset($this->conexion)){  
	$this->conexion = (mysql_connect("localhost","root","vertrigo")) or die(mysql_error());  
	mysql_select_db("masluzdb",$this->conexion) or die(mysql_error());  
	}  
	}  
	public function consulta($consulta){  
	$this->total_consultas++;  
	$resultado = mysql_query($consulta,$this->conexion);  
	if(!$resultado){  
	echo 'MySQL Error: ' . mysql_error();  
	exit;  
	}  
	return $resultado;   
	}  
	public function fetch_array($consulta){   
	return mysql_fetch_array($consulta);  
	}  
	public function num_rows($consulta){   
	return mysql_num_rows($consulta);  
	}  	
	public function getTotalConsultas(){  
	return $this->total_consultas;  
	}  
	public function mostrararticulos(){
	$db = new MySQL();
	$consulta = $db->consulta("SELECT * FROM articulo");
	if($db->num_rows($consulta)>0){
	while($resultados = $db->fetch_array($consulta)){ 
	$art = new Articulo();
	$art->setId($resultados["id_articulo"]);
	$art->setTitulo($resultados["titulo"]);
	$art->setCuerpo($resultados["cuerpo"]); 
	$art->setImagen($resultados["imagen"]);	
	$arr[]=$art;
	}
	}
	return $arr;
	}
  
	public function mostrararticulo($id_art){
	$db = new MySQL();
	$consulta = $db->consulta("SELECT * FROM articulo WHERE id_articulo=$id_art");
	if($db->num_rows($consulta)>0){
	while($resultados = $db->fetch_array($consulta)){ 
	$art = new Articulo();
	$art->setId($resultados["id_articulo"]);
	$art->setTitulo($resultados["titulo"]);
	$art->setCuerpo($resultados["cuerpo"]); 
	$art->setImagen($resultados["imagen"]);		
		}
	}
	return $art;
	}
  
	public function mostrarproducto($id_prod){
	$db = new MySQL();
	$consulta = $db->consulta("SELECT * FROM producto WHERE id_producto=$id_prod");
	if($db->num_rows($consulta)>0){
	while($resultados = $db->fetch_array($consulta)){ 
	$prod = new Producto();
	$prod->setId($resultados["id_producto"]);
	$prod->setNombre($resultados["nombre"]);
	$prod->setDescripcion($resultados["descripcion"]); 	
	$prod->setImagen($resultados["imagen"]); 	
	$prod->setCategoria($resultados["id_categoria"]); 	
		}
	}
	return $prod;
	}
  
	public function mostrartodosproductos(){
	$db = new MySQL();
	$consulta = $db->consulta("SELECT * FROM producto");
	if($db->num_rows($consulta)>0){
	while($resultados = $db->fetch_array($consulta)){ 
	$art = new Producto();
	$art->setId($resultados["id_producto"]);
	$art->setNombre($resultados["nombre"]);
	$art->setDescripcion($resultados["descripcion"]); 	
	$art->setImagen($resultados["imagen"]); 	
	$art->setCategoria($resultados["id_categoria"]); 	
	
	$arr[]=$art;
	}
	}
	return $arr;
	}
  
	public function mostrarproductosxcategoria($cat){
	$db = new MySQL();
	$consulta = $db->consulta("SELECT * FROM producto WHERE id_categoria='$cat'");
	if($db->num_rows($consulta)>0){
	while($resultados = $db->fetch_array($consulta)){ 
	$prod = new Producto();
	$prod->setId($resultados["id_producto"]);
	$prod->setNombre($resultados["nombre"]);
	$prod->setDescripcion($resultados["descripcion"]); 	
	$prod->setImagen($resultados["imagen"]); 	
	$arr[]=$prod;
	}
	}
	return $arr;
	}
  
        public function relacion(){
	$db = new MySQL();
	$consulta = $db->consulta("SELECT * FROM relacionprodarticulo");
	if($db->num_rows($consulta)>0){
	while($resultados = $db->fetch_array($consulta)){ 
	$rel = new Relacion();
	$rel->setId($resultados["id_relacion"]);
	$rel->setIdProd($resultados["id_producto"]);
	$rel->setIdArt($resultados["id_articulo"]);
	$arr[]=$rel;
	}
	}
	return $arr;
	}
	
        public function rel_Producto($Idprod){
	$db = new MySQL();
	$consulta = $db->consulta("SELECT * FROM relacionprodarticulo WHERE id_producto='$Idprod'");
	if($db->num_rows($consulta)>0){
	while($resultados = $db->fetch_array($consulta)){ 
	$rel = new Relacion();
	$rel->setId($resultados["id_relacion"]);
	$rel->setIdProd($resultados["id_producto"]);
	$rel->setIdArt($resultados["id_articulo"]);
	$arr[]=$rel;
	}
	}
	return $arr;
	}

	public function rel_Articulo($Idarti){
	$db = new MySQL();
	$consulta = $db->consulta("SELECT * FROM relacionprodarticulo WHERE id_producto='$Idarti'");
	if($db->num_rows($consulta)>0){
	while($resultados = $db->fetch_array($consulta)){ 
	$rel = new Relacion();
	$rel->setId($resultados["id_relacion"]);
	$rel->setIdProd($resultados["id_producto"]);
	$rel->setIdArt($resultados["id_articulo"]);
	$arr[]=$rel;
	}
	}
	return $arr;
	}

	
  	public function mostrartodascategorias(){
	$db = new MySQL();
	$consulta = $db->consulta("SELECT * FROM categoria");
	if($db->num_rows($consulta)>0){
	while($resultados = $db->fetch_array($consulta)){ 
	$cat = new Categoria();
	$cat->setId($resultados["id_categoria"]);
	$cat->setNombreCat($resultados["nombre"]);
	$arr[]=$cat;
	}
	}
	return $arr;
	}
  
  	public function insertarContacto($emisorcont,$titulocont,$contenidocont,$emailcont){
		$db = new MySQL();
		$insertar = $db->consulta("INSERT INTO contacto (idcontactos,emisorcont,titulocont,contenidocont,emailcont) VALUES ('','$emisorcont','$titulocont','$contenidocont','$emailcont')");
	}
  
  
  
  
  }?>
