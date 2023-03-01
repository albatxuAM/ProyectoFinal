console.log("asdf");
var botones = document.querySelectorAll('.btn');
botones.forEach(function(button){
    button.addEventListener('click', function(){
        var id = button.getAttribute('id');
        enviarDatos(id);
    });
});

function enviarDatos(id){
    alert('Datos');
    fetch('/carrito',{
        method: 'POST',
        body: JSON.stringify({
            id: id
        }),
        headers: {
            'Content-Type': 'application/json'
        }
    .then(function(response){
        return response.json();
    })
    .then(function(data){
        console.log(data);
    })
    .catch(function(error){
        console.log(error);
    })
});
}
