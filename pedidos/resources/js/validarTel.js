form1 = document.getElementById('form1');
form1.addEventListener('submit', function (e) {
    e.preventDefault();
    console.log("Formulario 1 enviado");
try {

    var tel1 = document.getElementById('tel1').value;
    var reg = new RegExp("^[6-9][0-9]{8}$");

    if (reg.test(tel1) == false) {
        throw "El teléfono no es válido";
    }

    this.submit();
} catch (er) {
    alert(er);
}
});