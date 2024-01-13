<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "brinnew";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Replace 'your_table' and 'instansi' with your actual table name and column name
$sql = "SELECT instansi, COUNT(*) as count FROM user GROUP BY instansi";
$result = $conn->query($sql);

$data = array();
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

$conn->close();

echo json_encode($data);
?>
