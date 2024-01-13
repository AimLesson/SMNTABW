<?php
session_start();
header("Content-type: text/plain");
header("Content-Disposition: attachment; filename=Data.txt");

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
    $endDateTime = $_GET['end_date'] . ' ' . $_GET['end_time'];
    $filterCondition = " WHERE timestamp BETWEEN '$startDateTime' AND '$endDateTime' and username='$_SESSION[username]'"; 
}

// Fetch data from the table with the filter condition
$sql = "SELECT data_id, username, timestamp, voltage, amperage FROM data" . $filterCondition;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data in a plain-text table
    while ($row = $result->fetch_assoc()) {
        echo "Data ID: " . $row['data_id'] . "\t";
        echo "Username: " . $row['username'] . "\t";
        echo "Timestamp: " . $row['timestamp'] . "\t";
        echo "Voltage: " . $row['voltage'] . "\t";
        echo "Amperage: " . $row['amperage'] . "\n";
    }
} else {
    echo "No data found";
}

$conn->close();
?>
