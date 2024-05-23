<?php
include 'dbconnection.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $client_id=$_POST['client_id'];
    $planDescription=$_POST['planDescription'];
    $startDate=$_POST['startDate'];
    $end_date=$_POST['end_date'];   
   
    $sql="INSERT INTO recovery(client_id,planDescription,startDate, end_date) VALUES('$client_id','$planDescription','$startDate', '$end_date')";
    $result=$connection->query($sql);
    if ($result) {
        echo"Inserted Successfully";
        header('location:recoveryview.php');
        exit();
    }else{
        echo "Inserted fail";
      }
}

?>