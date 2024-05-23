<?php
include 'dbconnection.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $fullname=$_POST['fullname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $hashed_password = password_hash($passwordInput, PASSWORD_DEFAULT);
   
    $sql="INSERT INTO users(fullname, email, password) VALUES('$fullname', '$email','$hashed_password')";
    $result=$connection->query($sql);
    if ($result) {
        echo"Inserted Successfully";
        header('location:login.php');
        exit();
    }else{
        echo "Inserted fail";
      }
}

?>