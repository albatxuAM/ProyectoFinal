@extends('layouts.layout')
@section('content')

    {{-- <div class="container">
        <p class="text-center fs-3 lead">Pedidos por mes</p>
        <canvas id="grafico"></canvas>
    </div> --}}

    <p>Pedidos por estado</p>
    <canvas id="myChart" width="400" height="400"></canvas>

    <script>
        debugger;
        var estados = <?php echo json_encode($estados); ?>;
        var pedidos = <?php echo json_encode($pedidos); ?>;

        var ctx = document.getElementById("myChart");
        var myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: estados,
            datasets: [{
            label: '# of Tomatoes',
            data: pedidos,
            backgroundColor: [
                'rgba(255, 99, 132, 0.5)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)'
            ],
            borderWidth: 1
            }]
        },
        options: {
            //cutoutPercentage: 40,
            responsive: false,

        }
        });
    </script>
@endsection