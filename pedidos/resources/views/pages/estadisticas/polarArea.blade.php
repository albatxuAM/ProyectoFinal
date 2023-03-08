{{-- <p>Pedidos por tipo de producto</p> --}}
<p>Productos por tipo de pedido</p>
<div id="chart">
    <canvas id="myChart"></canvas>
  </div>
<script>
    var categoria = <?php echo json_encode($categoria); ?>;
    var productosTipo = <?php echo json_encode($productosTipo); ?>;

    var data = {
    datasets: [{
        data: productosTipo,
        backgroundColor: [
            "#FF6384",
            "#4BC0C0",
            "#FFCE56",
            "#E7E9ED",
            "#36A2EB",
            "#FF6384",
            "#4BC0C0",
            "#FFCE56",
            "#E7E9ED",
            "#36A2EB"
        ],
        label: 'My dataset' // for legend
    }],
    labels: categoria
};
var ctx = $("#myChart");
new Chart(ctx, {
    data: data,
    type: 'polarArea'
});


    //  var ChartPolar = new Chart( document.getElementById('polarArea'), config, data, actions );
</script>