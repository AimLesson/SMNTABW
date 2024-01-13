<!-- forgot_password.php -->
<?php
include("header.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $username = $_POST['username'];
    $email= $_POST['email'];
    $tanggallahir = $_POST['tanggallahir'];
    $new_password = $_POST['new_password'];

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

    // SQL query to update the password in the 'user' table based on the username
    $sqlcek = "SELECT * FROM user WHERE username='$username' AND email='$email'AND tanggallahir='$tanggallahir'";

    $resultcek = $conn->query($sqlcek);

    if ($resultcek->num_rows > 0) {
            $sql = "UPDATE user SET password = '$new_password' WHERE username = '$username'";

                if ($conn->query($sql) === TRUE) {
            ?>
                    <script>
                        alert('Password Reset Successful!');
                        window.location.href = 'login.php';
                    </script>
                <?php
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }

    }else {
        ?>
        <script>
            alert('Data Tidak Ditemukan');
            window.location.href = 'forgot.php';
        </script>
    <?php
    }

    
    // Close the database connection
    $conn->close();
} else {
    // Display the form for the user to enter their username and new password
    ?>
    <div class="container mt-5">
        <div class="col-md-6 offset-3">
            <div class="card p-3">
                <h2>Forgot Password</h2>
                <form action="forgot.php" method="post">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="new_password" class="form-label">New Password</label>
                        <input type="password" class="form-control" id="new_password" name="new_password" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="tanggallahir" class="form-label">tanggal lahir</label>
                        <input type="date" class="form-control" id="tanggallahir" name="tanggallahir" required>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Reset Password</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-eESFCbZRHp5Au5OPiP8RL8I5AikU4pRMAVoMde5+87hhw1fr2F06S5x0npv3L0I" crossorigin="anonymous"></script>

<?php
}

?>