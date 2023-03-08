

// var estados = <?php echo json_encode($estados); ?>;
// var pedidos = <?php echo json_encode($pedidos); ?>;

var graficoEstadoPedidos = document.getElementById("estadoPedidos");
if(graficoEstadoPedidos) {
    fetch('estadisticas/productosPedido', {
        method: 'GET',
    })
        .then(response => response.json())
        .then(data => {
            var estados = data['estados'];
            var pedidos = data['pedidos'];
            
            var ctx = document.getElementById("estadoPedidos");
            var estadoPedidos = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: estados,
                    datasets: [{
                    label: 'Estado pedidos',
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
            var mes = data['mes'];
            var pedidos = data['data'];
            
            var ctx = document.getElementById("line");
            var line = new Chart(ctx, {
                type: "line",
            data: {
                datasets: [
                {
                    data: pedidos,
                    label: "Pedidos",
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
                        position: "left",
                        ticks: {
                            stepSize: 1
                        }
                    }
                ]
                }
            }
            });
    });
}

var ventasSemana = document.getElementById("ventasSemana");
if(ventasSemana) {
    fetch('estadisticas/ventasSemana', {
        method: 'GET',
    })
        .then(response => response.json())
        .then(data => {
            var dataPast = data['dataPast'];
            var dataCurr = data['dataCurr'];
            
            var ctx = document.getElementById("ventasSemana");
            var line = new Chart(ctx, {
                type: "line",
                data: {
                    datasets: [
                    {
                        data: dataPast,
                        label: "Semana pasada",
                        pointRadius: 0,
            
                        // This binds the dataset to the left y axis
                        yAxisID: "left-y-axis"
                    },
                    {
                        data: dataCurr,
                        label: "Esta semana",
            
                        // This binds the dataset to the right y axis
                        yAxisID: "right-y-axis"
                    }
                    ],
                    labels: ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"]
                },
                options: {
                    scales: {
                    yAxes: [
                        {
                            id: "left-y-axis",
                            type: "linear",
                            position: "left",
                            // ticks: {
                            //     stepSize: 1
                            // }
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