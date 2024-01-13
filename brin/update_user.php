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

$username = $_SESSION['username'];

// Fetch the user's current information from the database
$sql = "SELECT * FROM user WHERE username = '$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $id_user = $row['id_user'];
    $username = $row['username'];
    $password = $row['password'];
    $name = $row['name'];
    $contact = $row['contact'];
    $instansi = $row['instansi'];
} else {
    // Handle error if user data is not found
    echo "Error: User data not found.";
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
    <!-- Include your CSS stylesheets and other head elements -->
</head>

<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card p-3 mb-3">
                    <form action="process_update_user.php" method="post">
                        <div class="mb-3">
                            <input type="hidden" class="form-control" id="id_user" name="id_user" value="<?php echo $id_user; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">username:</label>
                            <input type="text" class="form-control" id="username" name="username" value="<?php echo $username; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">password:</label>
                            <input type="text" class="form-control" id="password" name="password" value="<?php echo $password; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" value="<?php echo $name; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="contact" class="form-label">Contact:</label>
                            <input type="text" class="form-control" id="contact" name="contact" value="<?php echo $contact; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="instansi" class="form-label">Instansi:</label>
                            <input type="text" class="form-control" id="instansi" name="instansi" value="<?php echo $instansi; ?>" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Update Information</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Include your scripts and other body elements -->

</body>

</html>