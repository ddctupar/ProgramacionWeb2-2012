// JavaScript Document


var login = window.document.getElementById("login");
window.document.login.username.focus();

function validarLogin(f) {
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

function Eliminar(obj){
	if (confirm('¿Estas seguro que deseas Eliminar el Item de la Lista?')){ 
       document.car.submit()
	   return true;
	}else{
	return false;
	} 
}

function Comprar(obj){
	if (confirm('¿Estas seguro que deseas proseguir el proceso de compra?')){ 
       document.car.submit()
	   return true;
	}else{
	return false;
	} 
}


function validarRegistro(fo) {
if (fo.clientenombre.value == '') {
alert('El campo \"Nombre\" no puede estar vacio');
fo.clientenombre.focus();
return false;
}
if (fo.clienteapellido.value == '') {
alert('El campo \"Apellido\" no puede estar vacio');
fo.clienteapellido.focus();
return false;
}
if (fo.clienteusername.value == '') {
alert('El campo \"Usuario\" no puede estar vacio');
fo.clienteusername.focus();
return false;
}
if (fo.clientepassword.value == '') {
alert('El campo \"Password\" no puede estar vacio');
fo.clientepassword.focus();
return false;
}

if (fo.clienteemail.value == '') {
alert('El campo \"E-Mail\" no puede estar vacio');
fo.clienteemail.focus();
return false;
}

return true;
}
