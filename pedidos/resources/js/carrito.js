 document.addEventListener("DOMContentLoaded", function(e) {
    var inputTotal = document.getElementById('total');
    // console.log(inputTotal);
    var totalCesta = 0;
    var subtotales = document.getElementsByTagName('td');
    
    if(inputTotal && subtotales){
      for (let i = 0; i < subtotales.length; i++) {
        if (subtotales[i].className == 'text-center subtotal') {
          var importe = parseFloat(subtotales[i].innerText);
          totalCesta += importe;
  
        }
      }
      inputTotal.value = totalCesta.toFixed(2) + "€";
    }


  })
