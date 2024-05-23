<?php
include 'dbconnection.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $client_id=$_POST['client_id'];
    $counselor_id=$_POST['counselor_id'];
    $duration_minutes=$_POST['duration_minutes'];
    $notesText=$_POST['notesText'];   
   
    $sql="INSERT INTO sessions(client_id,counselor_id,duration_minutes, notesText) VALUES('$client_id','$counselor_id','$duration_minutes','$notesText')";
    $result=$connection->query($sql);
    if ($result) {
        echo"Inserted Successfully";
        header('location: sessionview.php');
        exit();
    }else{
        echo "Inserted fail";
      }
}

?>