<?php
include 'dbconnection.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $user_id=$_POST['user_id'];
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $birthDay=$_POST['birthDay'];
    $country=$_POST['country'];
    $city=$_POST['city'];
     $telephone=$_POST['telephone'];
    
   
    $sql="INSERT INTO profile(user_id,firstname, lastname, birthDay, country, city, telephone) VALUES('$user_id','$firstname','$lastname','$birthDay','$country','$city','$telephone')";
    $result=$connection->query($sql);
    if ($result) {
        echo"Inserted Successfully";
        header('location:profileview.php');
        exit();
    }else{
        echo "Inserted fail";
      }
}

?>