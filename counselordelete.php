<?php
if (isset($_GET["counselor_id"])) {
    $counselor_id = $_GET["counselor_id"];
    include "dbconnection.php";

    // Prepare and execute SQL statement to delete data
    $sql = "DELETE FROM counselors WHERE counselor_id = $counselor_id";

    if ($connection->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $connection->error;
    }

    $connection->close();
}

header("location: /counselingplatform/counselorview.php");
exit;
?>