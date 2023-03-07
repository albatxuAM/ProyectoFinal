<p>Polar area</p>
<div id="chart">
    <canvas id="myChart"></canvas>
  </div>
<script>
    var data = {
    datasets: [{
        data: [
            20,
            50,
            15,
            30,
            50, 
            85,
            50,
            74,
            37,
            64,
            100,
            70
        ],
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
    labels: [
        "Smart",
        "Hard",
        "Soft"
    ]
};
var ctx = $("#myChart");
new Chart(ctx, {
    data: data,
    type: 'polarArea'
});


    //  var ChartPolar = new Chart( document.getElementById('polarArea'), config, data, actions );
</script>