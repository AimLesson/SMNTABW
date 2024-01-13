document.addEventListener('DOMContentLoaded', function () {
    // Assume you have a PHP variable $userId containing the user's identifier.
    // You should fetch the data based on the logged-in user from the database.
    // For this example, I'll use dummy data.

    var voltageData = [/* Your voltage data array */];
    var amperageData = [/* Your amperage data array */];

    // Prepare data for Chart.js
    var voltageChartData = {
        labels: voltageData.map((_, index) => index), // X-axis labels
        datasets: [
            {
                label: 'Voltage',
                borderColor: 'rgba(75, 192, 192, 1)',
                data: voltageData,
            },
        ],
    };

    var amperageChartData = {
        labels: amperageData.map((_, index) => index), // X-axis labels
        datasets: [
            {
                label: 'Amperage',
                borderColor: 'rgba(255, 99, 132, 1)',
                data: amperageData,
            },
        ],
    };

    // Chart configuration
    var chartConfig = {
        type: 'line',
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                x: {
                    type: 'linear',
                    position: 'bottom',
                },
                y: {
                    type: 'linear',
                    position: 'left',
                },
            },
        },
    };

    // Create the Voltage chart
    var voltageCtx = document.getElementById('voltageChart').getContext('2d');
    new Chart(voltageCtx, { ...chartConfig, data: voltageChartData });

    // Create the Amperage chart
    var amperageCtx = document.getElementById('amperageChart').getContext('2d');
    new Chart(amperageCtx, { ...chartConfig, data: amperageChartData });
});