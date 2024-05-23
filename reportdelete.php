<?php
if (isset($_GET["report_id"])) {
    $report_id = $_GET["report_id"];
    include "dbconnection.php";

    // Prepare and execute SQL statement to delete data
    $sql = "DELETE FROM reports WHERE report_id = $report_id";

    if ($connection->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $connection->error;
    }

    $connection->close();
}

header("location: /counselingplatform/reportview.php");
exit;
?>