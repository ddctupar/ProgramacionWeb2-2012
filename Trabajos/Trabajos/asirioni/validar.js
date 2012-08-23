function Validar(form) {
if (form.nom.value=="") {
    alert("Por favor escriba su Nombre completo");
    form.nom.focus();
    return false;
    }
if (form.mail.value=="") {
    alert("Por favor escriba su direcci\xF3n de correo electr\xF3nico");
    form.mail.focus();
    return false;
    }
if (form.titulo.value=="") {
    alert("Por favor escriba el asunto de su Mensaje");
    form.titulo.focus();
    return false;
    }
if (form.texto.value=="") {
    alert("Por favor escriba su Mensaje.");
    form.texto.focus();
    return false;
    }
}
