<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Pie Chart Example</title>
</head>
<body>
    <div style="text-align: center;">
        <canvas id="myPieChart" width="400" height="400"></canvas>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Fetch data from PHP script
            fetch('piechart.php')
                .then(response => response.json())
                .then(data => {
                    // Extract labels and data for the chart
                    const labels = data.map(item => item.instansi);
                    const values = data.map(item => item.count);

                    // Create pie chart
                    const ctx = document.getElementById('myPieChart').getContext('2d');
                    const myPieChart = new Chart(ctx, {
                        type: 'pie',
                        data: {
                            labels: labels,
                            datasets: [{
                                data: values,
                                backgroundColor: [
                                    'rgba(255, 99, 132, 0.7)',
                                    'rgba(54, 162, 235, 0.7)',
                                    'rgba(255, 206, 86, 0.7)',
                                    // Add more colors as needed
                                ],
                            }],
                        },
                    });
                });
        });
    </script>
</body>
</html>
