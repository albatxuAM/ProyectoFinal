document.addEventListener("DOMContentLoaded", function(e) {
    var inputTotal = document.getElementById('total');
    if(inputTotal) {
      var totalCesta = 0;
      var subtotales = document.getElementsByTagName('td');

      for (let i = 0; i < subtotales.length; i++) {
        if (subtotales[i].className == 'text-center subtotal') {
          var importe = parseFloat(subtotales[i].innerText);
          totalCesta += importe;

        }
      }
      inputTotal.value = totalCesta + "€";
    }
  });