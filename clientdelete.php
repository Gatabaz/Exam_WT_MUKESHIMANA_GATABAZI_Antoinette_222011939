<?php
if (isset($_GET["client_id"])) {
    $client_id = $_GET["client_id"];
    include "dbconnection.php";

    // Prepare and execute SQL statement to delete data
    $sql = "DELETE FROM clients WHERE client_id = $client_id";

    if ($connection->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $connection->error;
    }

    $connection->close();
}

header("location: /counselingplatform/clientview.php");
exit;
?>