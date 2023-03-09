

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
                    // responsive: false,
            }
        });
    });
}

var graficoEstadoPedidosPendiente = document.getElementById("productosPedidoPendiente");
if(graficoEstadoPedidosPendiente) {
    fetch('estadisticas/productosPedidoPendiente', {
        method: 'GET',
    })
        .then(response => response.json())
        .then(data => {
            var estados = data['estados'];
            var pedidos = data['pedidos'];
            
            var ctx = document.getElementById("productosPedidoPendiente");
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
                    // responsive: false,
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
                    // This binds the dataset to the left y axis
                    yAxisID: "left-y-axis",
                    borderColor: "rgba(255, 128, 64, 1)",
                    backgroundColor: "rgba(245, 105, 37, 0.2)"
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
                        data: dataCurr,
                        label: "Esta semana",
                        // This binds the dataset to the left y axis
                        yAxisID: "left-y-axis",
                        borderColor: "rgba(145, 8, 163, 1)",
                        backgroundColor: "rgba(145, 8, 163, 0.2)",
                    },
                    {
                        data: dataPast,
                        label: "Semana pasada",
                        // This binds the dataset to the right y axis
                        yAxisID: "right-y-axis",
                        borderColor: "rgba(163, 8, 42, 1)",
                        backgroundColor: "rgba(163, 8, 42, 0.2)"
                    }
                    ],
                    labels: ["Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado", "Domingo"]
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
                                    ticks: {
                                        stepSize: 1
                                    }
                                }
                            }
                        ]
                    }
                }
            });
    });
}

var graficoProductosTipo = document.getElementById("productosTipo");
if(graficoProductosTipo) {
    fetch('estadisticas/productosTipo', {
        method: 'GET',
    })
        .then(response => response.json())
        .then(data => {
            var categoria = data['categoria'];
            var productosTipo = data['productosTipo'];
            
            var data = {
            datasets: [{
                data: productosTipo,
                backgroundColor: [
                    "#F26052",  
                    "#8C6D8C",
                    "#57A7AF",
                    "#6BC2C7",
                    "#8CAA8A",
                    "#FBDB87",
                    "#F0A457"
                ],
                label: 'Categorias' // for legend
            }],
            labels: categoria
        };

        var ctx = document.getElementById("productosTipo");
        new Chart(ctx, {
            data: data,
            type: 'polarArea'
        });
    });
}