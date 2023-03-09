
const fotoFile :HTMLInputElement =<HTMLInputElement> document.getElementById("fotoFile");
const imagen: HTMLImageElement =<HTMLImageElement> document.getElementById("previoImagen");
fotoFile?.addEventListener('change',cambioPrevio);

function cambioPrevio():void {
    const file = fotoFile.files;
    if (file) {
        imagen.src = window.URL.createObjectURL(this.files[0])
    }
}
