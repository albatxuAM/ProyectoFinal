document.addEventListener('DOMContentLoaded', comprobaciones);
function comprobaciones(){
    var form1 = document.getElementById('formularioInvitado');
    console.log(form1);
    form1.addEventListener('submit',validarDatos);
    var form2 = document.getElementById('nuevoUsuario');
    form2.addEventListener('submit',validarDatos);
}

function validarDatos(e){
    e.preventDefault();
    console.log(e.target.id);
    var telefono = "";
    var nombre ="";
    var email = "";
    if(e.target.id == 'formularioInvitado'){
        console.log('soy invitado');
        var telefonoInput = document.getElementById('telefonoInvitado');
        console.log(telefonoInput);
        telefono = telefonoInput.value;
        var nombreInput = document.getElementById('nombreInvitado');
        nombre = nombreInput.value;
        var emailInput = document.getElementById('correoInvitado');
        email = emailInput.value;
    }
    if(e.target.id == 'nuevoUsuario'){
        console.log('soy nuevo');
       var telefonoInput = document.getElementById('nuevoTelefono');
      
       telefono = telefonoInput.value;
       var nombreInput = document.getElementById('nuevoNombre');
       nombre = nombreInput.value;
       var emailInput = document.getElementById('nuevoCorreo');
       email = emailInput.value;
    }

    var telefonoValido = false;
    var nombreValido = false;
    var emailValido = false;

    telefonoValido = validarTelefono(telefono);
    console.log(telefonoValido)
    nombreValido = validarNombre(nombre);
    console.log(nombreValido);
    emailValido = validarCorreo(email);
    console.log(emailValido);

    if(telefonoValido && nombreValido && emailValido){
        this.submit();
    }

}
function validarTelefono(telefono){
    try{
        var valido = false;
        console.log('hola desde validar telefono');
        var expRegTelf = new RegExp(/[6-9][0-9]{8}/);
        if(!expRegTelf.test(telefono)){
            console.log('hola');
            throw "El telefono no es valido";
        }
        var valido = true;
        return valido;
    }catch(err){
        
        alert(err);
        return valido;
    }
}
function validarCorreo(correo){
    console.log('hola desde validar correo');
    try{
     
        var expRegCorreo = new RegExp(/[\w]+@{1}[\w]+\.[a-z]{2,3}/);
        if(!expRegCorreo.test(correo)){
            throw "El correo no es valido";
        }
        var valido = true;
        return valido;
    }catch(err){
        
        alert(err);
        return valido;
    }
}
function validarNombre(nombre){
    console.log('hola desde validar nombre');
    
    try{
        console.log('hola desde validar telefono');
        var expRegNombre = new RegExp(/^[A-Z][a-z]+(\s+[A-Z]?[a-z]+)*$/);
        if(!expRegNombre.test(nombre)){
            throw "El nombre no es valido";
        }
        var valido = true;
        return valido;
    }catch(err){
        
        alert(err);
        return valido;
    }
}