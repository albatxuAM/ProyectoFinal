var registrar = document.getElementById("registrar");
var vista = document.getElementById("vista");
registrar === null || registrar === void 0 ? void 0 : registrar.addEventListener('click', verregistro);
function verregistro() {
    var x = registrar;
    if (x.innerHTML == 'atras') {
        vista === null || vista === void 0 ? void 0 : vista.setAttribute("style", "display:none;");
        x.innerHTML = 'nuevo usuario';
    }
    else {
        vista === null || vista === void 0 ? void 0 : vista.setAttribute("style", "display:block;");
        x.innerHTML = 'atras';
    }
    vista === null || vista === void 0 ? void 0 : vista.classList.toggle('d-flex');
}
