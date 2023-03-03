const registrar = document.getElementById("registrar") as HTMLButtonElement;
const vista = document.getElementById("vista");
registrar.addEventListener('click',verregistro);


function verregistro():void {
    var x = registrar;
    if (x.innerHTML=='atras') {
      vista?.setAttribute("style", "display:none;");
        x.innerHTML='nuevo usuario';
    } else {
        vista?.setAttribute("style", "display:block;");
        x.innerHTML='atras';
    }
    
}


