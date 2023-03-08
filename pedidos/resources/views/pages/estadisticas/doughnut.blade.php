<p>Pedidos por estado</p>
<canvas id="estadoPedidos" width="400" height="400"></canvas>
<script>
    var estados = <?php echo json_encode($estados); ?>;
    var pedidos = <?php echo json_encode($pedidos); ?>;
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
</script>