<?php
session_start();
include("header.php");

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Database connection parameters
$servername = "localhost";
$username_db = "root";
$password_db = "";
$dbname = "brinnew";

// Create connection
$conn = new mysqli($servername, $username_db, $password_db, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve user data from the form
$id_user = $_POST['id_user']; // Assuming you have a hidden field for id_user in your form
$username = $_POST['username'];
$password = $_POST['password'];
$name = $_POST['name'];
$contact = $_POST['contact'];
$instansi = $_POST['instansi'];

// Update user information in the database
$sql = "UPDATE user SET username = '$username', password = '$password', name = '$name', contact = '$contact', instansi = '$instansi' WHERE id_user = $id_user";

if ($conn->query($sql) === TRUE) {
    echo "User information updated successfully";
    header("location:dashboard.php");
} else {
    echo "Error updating user information: " . $conn->error;
}

// Close the database connection
$conn->close();
?>
