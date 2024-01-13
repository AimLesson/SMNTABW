<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $instansi = $_POST['instansi'];
    $email = $_POST['email'];
    $tanggallahir = $_POST['tanggallahir'];

    // You should perform input validation and password hashing here

    // Database connection parameters
    $servername = "localhost"; // Replace with your database server name
    $username_db = "root"; // Replace with your database username
    $password_db = ""; // Replace with your database password
    $dbname = "brinnew"; // Replace with your database name

    // Create connection
    $conn = new mysqli($servername, $username_db, $password_db, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to insert data into the 'user' table
    $sql = "INSERT INTO user (username, password, name, contact, instansi, email, tanggallahir) VALUES ('$username', '$password', '$name', '$contact', '$instansi', '$email', '$tanggallahir')";

    if ($conn->query($sql) === TRUE) {
        ?>
        <script>
            alert('registration succesfull');
            window.location.href='login.php';
        </script>
        <?php
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
} else {
    // Redirect to the registration page if accessed directly
    header("Location: register.php");
    exit();
}
?>