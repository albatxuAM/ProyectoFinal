//control botones
var registrar = document.getElementById("registrar");
var iratras = document.getElementById("volveratras");
//control vistas
var vistageneral = document.getElementById("cardPrincipal");
var vistaregistro = document.getElementById("vista");
registrar === null || registrar === void 0 ? void 0 : registrar.addEventListener('click', verRegistro);
iratras === null || iratras === void 0 ? void 0 : iratras.addEventListener('click', volveratras);
function verRegistro() {
    vistageneral === null || vistageneral === void 0 ? void 0 : vistageneral.setAttribute("style", "display:none;");
    vistaregistro === null || vistaregistro === void 0 ? void 0 : vistaregistro.setAttribute("style", "display:flex;");
}
function volveratras() {
    vistaregistro === null || vistaregistro === void 0 ? void 0 : vistaregistro.setAttribute("style", "display:none;");
    vistageneral === null || vistageneral === void 0 ? void 0 : vistageneral.setAttribute("style", "display:flex;");
}
