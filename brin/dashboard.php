<?php
session_start();
include("header.php");

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];
$name = $_SESSION['name'];
$instansi = $_SESSION['instansi'];

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

// Close the database connection
$conn->close();


?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <div class="card p-3 mb-3">
                <div class="row">
                    <div class="col-md-5">
                        <img class="logo mt-5" style="width: 200px" src="img/logo.png" alt="" />
                    </div>
                    <div class="col-md-7">
                        <div class="card p-3 mt-3 mb-2">
                            <h5>Nama : <?php echo $name; ?></h4>
                                <h5>Instansi : <?php echo $instansi; ?></h4>
                        </div>
                        <div class="d-grip gap-2 d-md-block">
                            <button type="button" class="btn btn-danger" onclick="window.location.href='logout.php'">Logout</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card p-3 mb-3">
                <form action="fetch_xlsx.php" method="post">
                    <div class="mb-3">
                        <label for="start_date" class="form-label">Start Date:</label>
                        <input type="hidden" id="username" name="username" value="<?php echo $username ?>;">
                        <input type="datetime-local" class="form-control" id="start_date" name="start_date" required>
                    </div>
                    <div class="mb-3">
                        <label for="end_date" class="form-label">End Date:</label>
                        <input type="datetime-local" class="form-control" id="end_date" name="end_date" required>
                    </div>
                    <button type="submit" name="xlsx" class="btn btn-success">XLSX </button>
                    <button type="submit" name="txt" class="btn btn-primary">TXT </button>
                </form>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card p-3 mb-3">
                <h3 id="voltageTitle">Voltage : </h3>
                <?php include('chartV.php'); ?>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card p-3 mb-3">
                <h3 id="amperageTitle">Amperage : </h3>
                <?php include('chartA.php'); ?>
            </div>
        </div>

        <div class="col-md-6 mx-auto">
            <div class="card p-3 mb-3">
                <h3>Instansi</h3>
                <?php include('pie.php'); ?>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    // Example function to update the titles with real-time data
    function updateTitles() {
        // Assume you have real-time data in variables: voltageData and amperageData
        var voltageData = getRealTimeVoltageData();
        var amperageData = getRealTimeAmperageData();

        // Update the titles with the real-time data
        $("#voltageTitle").text("Voltage: " + voltageData);
        $("#amperageTitle").text("Amperage: " + amperageData);
    }

    // Example function to get real-time voltage data
    function getRealTimeVoltageData() {
        // Replace this with your logic to fetch real-time voltage data
        return "-30 V"; // Example data
    }

    // Example function to get real-time amperage data
    function getRealTimeAmperageData() {
        // Replace this with your logic to fetch real-time amperage data
        return "10 A"; // Example data
    }

    // Call the updateTitles function periodically (e.g., every 5 seconds)
    setInterval(updateTitles, 5000);
</script>

</body>

</html>