//control botones
const registrar:HTMLElement =<HTMLElement> document.getElementById("registrar");
const iratras:HTMLElement =<HTMLElement> document.getElementById("volveratras");
//control vistas
const vistageneral:HTMLDivElement = <HTMLDivElement>document.getElementById("cardPrincipal");
const vistaregistro:HTMLDivElement = <HTMLDivElement>document.getElementById("vista");
registrar?.addEventListener('click',verRegistro);
iratras?.addEventListener('click',volveratras);

function verRegistro():void {
        vistageneral?.setAttribute("style", "display:none;");
        vistaregistro?.setAttribute("style", "display:flex;");
}
function volveratras():void{
    vistaregistro?.setAttribute("style", "display:none;");
    vistageneral?.setAttribute("style", "display:flex;");
}
