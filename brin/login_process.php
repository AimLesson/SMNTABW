<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve login data
    $username = $_POST['username'];
    $password = $_POST['password'];

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

    // SQL query to check login credentials
    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Login successful, set session variable
        $row = $result->fetch_assoc();
        $_SESSION['username'] = $username;
        $_SESSION['name'] = $row['name'];
        $_SESSION['instansi'] = $row['instansi'];
?>
        <script type="text/javascript">
   alert("login sukses!");
   window.location = "dashboard.php";
</script> <?php
    } else {
        ?>
        <script type="text/javascript">
   alert("login Gagal!");
   window.location = "login.php";
</script> <?php
    }

    // Close the database connection
    $conn->close();
} else {
    // Redirect to the login page if accessed directly
    header("Location: login.php");
    exit();
}
?>
