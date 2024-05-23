<?php
include 'dbconnection.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $user_id=$_POST['user_id'];
    $gender=$_POST['gender'];
    $yearbirth=$_POST['yearbirth'];
    $telephone=$_POST['telephone'];
    
   
    $sql="INSERT INTO clients(user_id,gender,yearbirth, telephone) VALUES('$user_id','$gender','$yearbirth', '$telephone')";
    $result=$connection->query($sql);
    if ($result) {
        echo"Inserted Successfully";
        header('location:clientview.php');
        exit();
    }else{
        echo "Inserted fail";
      }
}

?>