    //validate fecha for not past dates and not sundays and saturdays
    var form = document.getElementById('form');

    form.addEventListener('submit', function(e) {
        try {
            e.preventDefault();
            var fecha = document.getElementById('input').value;
            var fecha = new Date(fecha);
            var dia = new Date();

            if (fecha < dia) {
                throw ('La fecha seleccionada no es válida');

            } else if (fecha.getDay() == 0 || fecha.getDay() == 6) {
                throw ('La fecha seleccionada no es válida');
            }
            this.submit();
        } catch (er) {
            alert(er);
        }
    });