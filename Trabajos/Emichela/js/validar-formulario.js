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
if (f.email.value == '') {
alert('El campo \"E-Mail\" no puede estar vacio');
f.email.focus();
return false;
}
if (f.comentarios.value == '') {
alert('El campo \"Comentarios\" no puede estar vacio');
f.comentarios.focus();
return false;
}
return true;
}