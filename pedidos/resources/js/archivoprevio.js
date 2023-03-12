var fotoFile = document.getElementById("fotoFile");
var imagen = document.getElementById("previoImagen");
fotoFile === null || fotoFile === void 0 ? void 0 : fotoFile.addEventListener('change', cambioPrevio);
function cambioPrevio() {
    var file = fotoFile.files;
    if (file) {
        imagen.src = window.URL.createObjectURL(this.files[0]);
    }
}
