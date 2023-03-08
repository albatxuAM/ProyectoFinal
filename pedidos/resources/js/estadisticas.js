

// var estados = <?php echo json_encode($estados); ?>;
// var pedidos = <?php echo json_encode($pedidos); ?>;

var graficoEstadoPedidos = document.getElementById("estadoPedidos");
if(graficoEstadoPedidos) {
    fetch('estadisticas/productosPedido', {
        method: 'GET',
    })
        .then(response => response.json())
        .then(data => {
            debugger
            var estados = data['estados'];
            var pedidos = data['pedidos'];
            
            var ctx = document.getElementById("estadoPedidos");
            var estadoPedidos = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: estados,
                    datasets: [{
                    label: '# of Tomatoes',
                    data: pedidos,
                    backgroundColor: [
                        'rgba(108, 117, 125, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(26, 135, 83, 0.2)',
                        'rgba(220, 53, 68, 0.2)',
                        'rgba(10, 110, 253, 0.2)'
                    ],
                    borderColor: [
                        'rgba(108, 117, 125, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(26, 135, 83, 1)',
                        'rgba(220, 53, 68, 1)',
                        'rgba(10, 110, 253, 1)'
                    ],
                    borderWidth: 1
                    }]
                },
                options: {
                    //cutoutPercentage: 40,
                    responsive: false,
            }
        });
    });
}

var line = document.getElementById("line");
if(line) {
    fetch('estadisticas/ventas', {
        method: 'GET',
    })
        .then(response => response.json())
        .then(data => {
            debugger
            var mes = data['mes'];
            var pedidos = data['data'];
            
            var ctx = document.getElementById("line");
            var line = new Chart(ctx, {
                type: "line",
            data: {
                datasets: [
                {
                    data: pedidos,
                    label: "Left dataset",
                    pointRadius: 0,

                    // This binds the dataset to the left y axis
                    yAxisID: "left-y-axis"
                }
                ],
                labels: mes
            },
            options: {
                scales: {
                yAxes: [
                    {
                    id: "left-y-axis",
                    type: "linear",
                    position: "left"
                    },
                    {
                    id: "right-y-axis",
                    type: "linear",
                    position: "right",
                    gridLines: {
                        display: false
                    },
                    ticks: {
                        padding: 10,
                        stepSize: 1,
                        fontSize: 9,
                        autoSkip: false,
                        callback: (value) => {
                        console.log(value);
                        return value === 75 ? "test" : "";
                        }
                    }
                    }
                ]
                }
            }
            });
    });
}