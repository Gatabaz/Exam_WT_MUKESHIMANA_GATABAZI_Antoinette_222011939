<?php
include 'dbconnection.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $client_id=$_POST['client_id'];
    $counselor_id=$_POST['counselor_id'];
    $starttime=$_POST['starttime'];
    $endtime=$_POST['endtime'];   
   
    $sql="INSERT INTO appointment(client_id,counselor_id,starttime, endtime) VALUES('$client_id','$counselor_id','$starttime', '$endtime')";
    $result=$connection->query($sql);
    if ($result) {
        echo"Inserted Successfully";
        header('location:appointmentview.php');
        exit();
    }else{
        echo "Inserted fail";
      }
}

?>