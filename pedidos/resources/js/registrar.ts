const registrar:HTMLElement =<HTMLElement> document.getElementById("registrar");
const vista:HTMLDivElement = <HTMLDivElement>document.getElementById("vista");
registrar?.addEventListener('click',verRegistro);
var cardPrincipal:HTMLElement =<HTMLElement> document.getElementById('cardPrincipal');



function verRegistro():void {
    var x = registrar;
    if (x.innerHTML=='atras') {
      vista?.setAttribute("style", "display:none;");
        x.innerHTML='nuevo usuario';
    } else {
        vista?.setAttribute("style", "display:block;");
       // cardPrincipal.setAttribute('style','display:none;');
        x.innerHTML='atras';
    }
    vista?.classList.toggle('d-flex');
}





