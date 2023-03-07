<p>Polar area</p>
<div id="chart">
    <canvas id="line"></canvas>
</div>

<script>
    var ctx = document.getElementById("line");
    var myChart = new Chart(ctx, {
    type: "line",
    data: {
        datasets: [
        {
            data: [20, 50, 100, 75, 25, 0],
            label: "Left dataset",
            pointRadius: 0,

            // This binds the dataset to the left y axis
            yAxisID: "left-y-axis"
        },
        {
            data: [25, 55, 80, 70, 125, 0],
            label: "Right dataset",

            // This binds the dataset to the right y axis
            yAxisID: "right-y-axis"
        }
        ],
        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"]
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

</script>