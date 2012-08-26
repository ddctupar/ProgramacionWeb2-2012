

<?php

require_once('php/eDibujable.php');
require_once('php/DBMMySqlAcces.php');
require_once('php/Cliente.php');

session_start();

$pagina = new eDibujable;
$pagina->Header();
$ancho = 1366;
$pagina->FrameSuperior($ancho);
$pagina->Menu();


?>

<center>
		<div id='container'>
        		
               <table  id="tablacentral" width="1200" border="0">
 				 <tr>
   					 <td class="frameizq"  width="20%" valign="top">
                     	<ul>
									
                                    <h2 style="font-size:24px; font-family:Arial, Helvetica, sans-serif ">Categorias</h2><br />
                                    <?php
									$dbm = new DBMySqlAcces;
									
									$dbm->Listar_categorias();
									
									
									
									
									?>
									
									<!-- <div class="speech-bubble"> ... el texto a mostrar ... </div> -->
								
								
						</ul>	
                     </td>
                     
    				<td class="framecentral" width="60%" align="center">
                    <ul  id="productosdestacados">
                    <h2 style="font-size:24px; font-family:Arial, Helvetica, sans-serif ">Productos Destacados</h2><br />
									
									<?php
									if (!isset($_GET['idcategoria'])){
									$dbm = new DBMySqlAcces;
									$miarreglo = $dbm->CincoProductosDestacados();
									for ($i=0;$i<count($miarreglo);$i++){
									
										$pagina->RecuadroProducto($miarreglo[$i]);
										
									}
									}else{
										$dbm = new DBMySqlAcces;
										$miarreglo = $dbm->ProductosCategoria($_GET['idcategoria']);
										for ($i=0;$i<count($miarreglo);$i++){
									
										$pagina->RecuadroProducto($miarreglo[$i]);
										
										}
										
									}
									?>
									
									
								
								
					</ul>
                </td>
   					 <td class="frameder" width="20%" valign="top">
                     <ul>
									
                                    
                                    <?php 
									
									if (isset($_SESSION['username'])){
										
										$pagina->RecuadroBienvenida($_SESSION['objeto'][0]);
										$pagina->RecuadroCarrito();
									}
										
									else{
										
										$pagina->RecuadroLogIn();
									}
									
									?>
									
									
								
								
						</ul>	
                     </td>
 			</tr>
			</table>

		
					
				
		
					
				
			
		</div>
		</center>
        
<script type="text/javascript">
function validarFormulario(f) {
if (f.username.value == '') {
alert('El campo \"Usuario\" no puede estar vacio');
f.username.focus();
return false;
}

if (f.password.value == '') {
alert('El campo \"Contraseña\" no puede estar vacio');
f.password.focus();
return false;
}

return true;
}
</script>




<?php		
$pagina->Footer();


?>
