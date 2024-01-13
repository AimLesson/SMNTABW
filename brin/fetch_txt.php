<?php
// process_data.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the start date, end date, and end time from the form
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $end_time = $_POST['end_time'];

    // Redirect to the original page with the filter parameters
    header("Location: txt.php?start_date=$start_date&end_date=$end_date&end_time=$end_time");
    exit();
}
?>
