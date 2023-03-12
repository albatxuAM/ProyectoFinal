    //validate fecha for not past dates and not sundays and saturdays
    var form = document.getElementById('formPedido');
    if(form)
        form.addEventListener('submit', function(e) {
            try {
                e.preventDefault();
                var valueDate = document.getElementById('input').value;
                
                if(!Date.parse(valueDate))
                    throw ('Selecione una fecha');

                var fecha = new Date(valueDate);
                var dia = new Date();

                if (fecha < dia) {
                    throw ('La fecha seleccionada no es válida');
                } else if (fecha.getDay() == 0 || fecha.getDay() == 6) {
                    //fecha no puede ser fin de semana
                    throw ('La fecha seleccionada no es válida');
                }
                
                var observaciones = document.getElementById('observaciones');
                if(!observaciones && observaciones.value)
                    throw ('Ingrese una observación');

                this.submit();

            } catch (er) {
                alert(er);
            }
        });