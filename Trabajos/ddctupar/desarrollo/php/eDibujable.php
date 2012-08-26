<?php

Class eDibujable{
	
	private $_RutaCss = "css/estilos.css";
	
	
	public function Registro(){
		
		$registro = "<table width='466' border='1' cellspacing='0' cellpadding='0'>
  <tbody>
    <tr>
      <td height='25' align='center' valign='middle'  class='whitefont'>
        <strong>Registrate para iniciar tu compra</strong>
      </td>
    </tr>
    <tr>
      <td bgcolor='#FFFFFF' class='cordes'>
        <form id='registroForm'  method='post' name='registroForm' action='php/function.registra.cliente.php' onSubmit='return validarFormulario(this)' >
          <table width='100%' border='0' cellspacing='0' cellpadding='2'>
            <tbody>
              <tr>
                <td colspan='3'> </td>
              </tr>
              <tr>
                <td width='30%'>
                  <strong>* Nombre</strong>
                </td>
                <td width='40%'>
                  <input name='nombre' type='text' class='campo' id='nombre'>
                </td>
                <td width='30%'>
                  
                </td>
              </tr>
              <tr>
                <td>
                  <strong>* Apellido</strong>
                </td>
                <td>
                  <input name='apellido' type='text' class='campo' id='apellido'>
                </td>
                <td>
                  
                </td>
              </tr>
              <tr>
                <td>
                  <strong>* Usuario</strong>
                </td>
                <td>
                  <input name='usuario' type='text' class='campo' id='usuario'>
                </td>
                <td>
                  
                </td>
              </tr>
              <tr>
                <td>
                  <strong>* Password</strong>
                </td>
                <td>
                  <input name='pass' type='password' class='campo' id='pass'>
                </td>
                <td>
                  
                </td>
              </tr>
            
             
              
              
              
              <tr>
                <td>
                  <strong>* Email</strong>
                </td>
                <td>
                  <input name='email' type='text' class='campo' id='email'>
                </td>
                <td>
                  
                </td>
              </tr>
              
              <tr>
                <td colspan='2' align='center'>
                  <input class='bgbuttonbcr' name='submitButton' type='submit' value='Registrarse' id='submitButton'>
                  <!--<input class='bgbuttonbcr' name='limpiar' type='reset' value='Restablecer' id='limpiar'>-->
                </td>
              </tr>
              <tr>
                <td colspan='2' align='center'>
                  (*) Campos 
                  <strong>obligatorios</strong>
                </td>
              </tr>
            </tbody>
          </table>
        </form>
      </td>
    </tr>
    <tr>
      <td>
        <img src='imags/registro_1.gif' width='466' height='11'>
      </td>
    </tr>
  </tbody>
</table>";
echo $registro;
	
	}
	
	public function RecuadroLogIn(){
		
		
		
		$login="<div id='login'>
        			<form action='php/function.login.php' method='post' name='login' onSubmit='return validarFormulario(this)'> 
            			<input name='username' type='text'> Usuario
                		<input name='password' type='password'> Contraseña <br>
                		<input align='middle' name='login' type='submit' value='Ingresar'>
					</form>
				</div>";
		echo $login;
	}
	
	public function RecuadroBienvenida($id_cliente){
		$bienvenida="<div id='login'>
						Hola $_SESSION[username] <br></br> <a  href='php/function.logout.php?id=$id_cliente'>Cerrar Sesion</a>
					</div>";
		echo $bienvenida;
	}
	
	
	public function RecuadroCarrito(){
		
		
		//var_dump($_SESSION);
		if (isset($_SESSION['carrito']['cantidad_total'])){
		$cant = $_SESSION['carrito']['cantidad_total'];
		}
		else
		{
		$cant = 0;
		}
		$carrito="<div id='carrito'>
						Llevas cargados $cant productos <br></br>
						".$this->Getlistado()."
						 
						 <a href='AQUI LA URL'><button><font color='#cc0000'><strong>Comprar</strong></font></button>
						 <a href='AQUI LA URL'><button><font color='#cc0000'><strong>Borrar Item</strong></font></button>
					</div>";
		echo $carrito;
	}
	
	public function Getlistado(){
		
		if (isset($_SESSION['carrito']['listado'])){
		
		$listado = $_SESSION['carrito']['listado'];
		
		//var_dump($listado);
		
		$lista = "<ul>";
		for ($i=0;$i<count($listado);$i++){
		
			$lista .= "
					<li>
						<input name='item' type='checkbox' value='' />-".$listado[$i]['cantidad']."-".$listado[$i]['nombre_producto']."-$".$listado[$i]['precio_unitario']."
					</li>
				
				";
		}
		$lista .= "</ul>";
		return $lista;
		}
	}
	
	public function Header(){
		
			$header="<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 												  'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<link rel='stylesheet' href='".$this->_RutaCss."' type='text/css' />
<link rel='shortcut icon' href='imagenes/favicon.jpg'>
<meta name='keywords' content='ferreteria,comprar'/>
<title>:::Ferreteria.com.ar:::</title>
</head>
<html>
<body>


";
		echo $header;
	}
	
	
	public function FrameSuperior($ancho){
		
		
		
		
		$aux="
		
		<div id='framesuperior'>
		
				
				<img src='imagenes/fondo.png' height='150' width='".$ancho."' />
												
							
		</div>";
		echo $aux;	
		
	}
	
	
	public function Footer(){
		
		
			$aux="<div id='footer'>
						-Version 2.0 2012 - Trabajo Practico Programacion Web -TUPAR-UNICEN-
								<ul class='menufooter'>
									<li><a href='#'>Avisos Legales</a></li>
									<li><a href='#'>Nosotros</a></li>
									<li><a href='#'>Publicite en nuestro sitio</a></li>
									
									
								
								
								</ul>								
								
				</div>
				
				
				</body>
				</html>		";
				echo $aux;
	
	
	
	}
	
	public function Menu(){
	
			$aux="
			<div id='menu'>
					<ul class='menuhorizontal'>
        				<li><a href='index.php'>Principal</a></li>
           				 <li><a href='index.php'>Quienes Somos</a></li>
            			<li><a href='index.php'>Como Comprar</a></li>
           				 <li><a href='index.php'>Envios</a></li>
           				 <li><a href='index.php'>Contactenos</a></li>
       				 </ul>									
								
			</div>
				
			";
			echo $aux;
		
	}
	
	
	public function RecuadroProducto($arreglo){
		
		$recuadro="<li><div id='producto'>
                		<div class='tituloproducto'>".$arreglo['nombre']."
                        	
                        </div>
                        <div class='imagenproducto'>
                        	<a href='#'><img src='".$arreglo['imagen']."' width='200' height='100'></img></a>
                        </div>
                        <div >
                        <form method='post' action='php/function.agrega.listado.php'>
						
                        	<table class='seccioncompra' border='0'>
  								<tr>
   								 		<td >Codigo</td>
  								 		 <td>".$arreglo['id_producto']."</td>
										 <input name='id_producto' type='hidden' value='".$arreglo['id_producto']."'>
 								 </tr>
                                 
                                 <tr>
   								 		<td>Precio</td>
  								 		 <td>$".$arreglo['precio']."</td>
 								 </tr>
								 
                                 <tr>
   								 		<td><input name='enviar'   value='Elegir' title='Seleccione para cargar al carrito de compras' type='submit' /></td>
  								 		 <td><select name='cantidad' id='cantidad'>
                	                                    	                    <option value='1'   >
                	                      1               	                        </option>
                	                                    	                    <option value='2' >
                	                      2               	                        </option>
                	                                    	                    <option value='3' >
                	                      3               	                        </option>
                	                                    	                    <option value='4' >
                	                      4               	                        </option>
                	                                    	                    <option value='5' >
                	                      5               	                        </option>
                	                                    	                    <option value='6' >
                	                      6               	                        </option>
                	                                    	                    
                	                      
                	                                  	                    </select></td>
 								 </tr>
							</table>
                        	</form>
                        </div>
                        
                        
                        
                        
                        
                	</div>
                </li>";
				
				echo $recuadro;
				
	
	}
	
	
}




?>