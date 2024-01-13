<?php
session_start();
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data.xls");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>export</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <?php
    // Replace this with your database connection code
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "brinnew";

    $conn = new mysqli($host, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Filter condition based on the submitted form data
    $filterCondition = "";
    if (isset($_GET['start_date']) && isset($_GET['end_date'])) {
        $startDateTime = $_GET['start_date'];
        $endDateTime = $_GET['end_date'];
        $filterCondition = " WHERE timestamp BETWEEN '$startDateTime' AND '$endDateTime' and username='$_SESSION[username]'";
    }

    // Fetch data from the table with the filter condition
    $sql = "SELECT data_id, username, timestamp, voltage, amperage FROM data" . $filterCondition;
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data in a Bootstrap table
        echo '<table class="table table-striped">';
        echo '<thead>';
        echo '<tr>';
        echo '<th>Data ID</th>';
        echo '<th>Username</th>';
        echo '<th>Timestamp</th>';
        echo '<th>Voltage</th>';
        echo '<th>Amperage</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';

        while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $row['data_id'] . '</td>';
            echo '<td>' . $row['username'] . '</td>';
            echo '<td>' . $row['timestamp'] . '</td>';
            echo '<td>' . $row['voltage'] . '</td>';
            echo '<td>' . $row['amperage'] . '</td>';
            echo '</tr>';
        }

        echo '</tbody>';
        echo '</table>';
    } else {
        echo "No data found";
    }

    $conn->close();
    ?>

</div>

<!-- Bootstrap JS (optional, but required for some features) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
