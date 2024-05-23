<?php
if (isset($_GET["recovery_id"])) {
    $recovery_id = $_GET["recovery_id"];
    include "dbconnection.php";

    // Prepare and execute SQL statement to delete data
    $sql = "DELETE FROM recovery WHERE recovery_id = $recovery_id";

    if ($connection->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $connection->error;
    }

    $connection->close();
}

header("location: /counselingplatform/recoveryview.php");
exit;
?>