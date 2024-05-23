<?php
include 'dbconnection.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $client_id=$_POST['client_id'];
    $counselor_id=$_POST['counselor_id'];
    $reportText=$_POST['reportText'];
    $reportdate=$_POST['reportdate'];   
   
    $sql="INSERT INTO reports(client_id,counselor_id,reportText, reportdate) VALUES('$client_id','$counselor_id','$reportText', '$reportdate')";
    $result=$connection->query($sql);
    if ($result) {
        echo"Inserted Successfully";
        header('location:reportview.php');
        exit();
    }else{
        echo "Inserted fail";
      }
}

?>