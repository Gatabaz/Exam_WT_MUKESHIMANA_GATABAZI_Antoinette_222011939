<?php
include 'dbconnection.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $client_id=$_POST['client_id'];
    $counselor_id=$_POST['counselor_id'];
    $assessmentDate=$_POST['assessmentDate'];
    $score=$_POST['score'];  
    $result=$_POST['result'];  
   
    $sql="INSERT INTO assessments(client_id,counselor_id,assessmentDate, score, result) VALUES('$client_id','$counselor_id','$assessmentDate','$score', '$result')";
    $result=$connection->query($sql);
    if ($result) {
        echo"Inserted Successfully";
        header('location:assessmentview.php');
        exit();
    }else{
        echo "Inserted fail";
      }
}

?>