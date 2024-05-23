<?php
include 'dbconnection.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $user_id=$_POST['user_id'];
    $telephone=$_POST['telephone'];
    $specialization=$_POST['specialization'];
    
   
    $sql="INSERT INTO counselors(user_id, telephone, specialization) VALUES('$user_id', '$telephone','$specialization')";
    $result=$connection->query($sql);
    if ($result) {
        echo"Inserted Successfully";
        header('location:counselorview.php');
        exit();
    }else{
        echo "Inserted fail";
      }
}

?>