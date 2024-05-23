<?php
if (isset($_GET["assessment_id"])) {
    $appointment_id = $_GET["assessment_id"];
    include "dbconnection.php";

    // Prepare and execute SQL statement to delete data
    $sql = "DELETE FROM assessments WHERE assessment_id = $assessment_id";

    if ($connection->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $connection->error;
    }

    $connection->close();
}

header("location: /counselingplatform/assessmentview.php");
exit;
?>