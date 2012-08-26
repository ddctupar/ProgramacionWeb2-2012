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
                     	
                     </td>
                     
    				<td class="framecentral" width="60%" align="center">
                    
									
									 
   
					<?php 
						$pagina->Registro();
						
						
					?>				
						
                   		
								
								
				
                
                </td>
   					 <td class="frameder" width="20%">
                     
                     </td>
 			</tr>
			</table>

		
					
				
		
					
				
			
		</div>
		</center>
        
<script type="text/javascript">
function validarFormulario(f) {
if (f.nombre.value == '') {
alert('El campo \"Nombre\" no puede estar vacio');
f.nombre.focus();
return false;
}
if (f.apellido.value == '') {
alert('El campo \"Apellido\" no puede estar vacio');
f.apellido.focus();
return false;
}
if (f.usuario.value == '') {
alert('El campo \"Usuario\" no puede estar vacio');
f.usuario.focus();
return false;
}
if (f.pass.value == '') {
alert('El campo \"Password\" no puede estar vacio');
f.pass.focus();
return false;
}

if (f.email.value == '') {
alert('El campo \"E-Mail\" no puede estar vacio');
f.email.focus();
return false;
}

return true;
}
</script>

<?php		
$pagina->Footer();


?>