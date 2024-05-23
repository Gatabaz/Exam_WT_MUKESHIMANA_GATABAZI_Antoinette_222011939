<?php
if (isset($_GET["appointment_id"])) {
    $appointment_id = $_GET["appointment_id"];
    include "dbconnection.php";

    // Prepare and execute SQL statement to delete data
    $sql = "DELETE FROM appointment WHERE appointment_id = $appointment_id";

    if ($connection->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $connection->error;
    }

    $connection->close();
}

header("location: /counselingplatform/appointmentview.php");
exit;
?>