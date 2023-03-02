var botones = document.querySelectorAll('.carrito');
var boton = document.getElementById("mostrar").addEventListener("click", mostrar);
botones.forEach(function (button) {
    button.addEventListener('click', function () {
        var id = button.getAttribute('id');
        guardarDatos(id);
    });
});

function guardarDatos(id) {
    var productos = sessionStorage.getItem('carrito');
    console.log(JSON.parse(productos));

    var carrito = {
        item: id
    };
    if (productos == null) {
        sessionStorage.setItem('carrito', JSON.stringify(carrito));
    }
    else {
        sessionStorage.setItem('carrito', JSON.stringify(productos)+JSON.stringify(carrito));
    }
}
function mostrar(){
    console.log("mostrar");
    var m1 = sessionStorage.getItem('carrito');
    console.log(JSON.parse(toString(m1)));
}