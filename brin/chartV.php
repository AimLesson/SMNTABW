<?php
$koneksi = mysqli_connect("localhost", "root", "", "brinnew");
$query   = mysqli_query($koneksi, "SELECT username, timestamp, voltage, amperage FROM data where username='$_SESSION[username]'");

// Fetch data into arrays
$bulan       = [];
$penghasilan = [];

while ($data = mysqli_fetch_array($query)) {
    $bulan[]       = $data['timestamp'];
    $penghasilan[] = $data['voltage'];
}
?>

<html>
<head>
    <title>Belajarphp.net - ChartJS</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.bundle.js"></script>
    <style type="text/css">
    </style>
</head>
<body>
    <div class="container">
        <canvas id="myChart" width="100" height="100"></canvas>
    </div>
    <script>
        var ctx = document.getElementById("myChart");
        var myChart = new Chart(ctx, {
            type: 'line', // Change type to 'line'
            data: {
                labels: <?php echo json_encode($bulan); ?>,
                datasets: [{
                    label: 'Voltage Data',
                    data: <?php echo json_encode($penghasilan); ?>,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1,
                    fill: false // Set fill to false for a line chart
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
</body>
</html>
