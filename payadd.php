<?php
include 'dbconnection.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $client_id=$_POST['client_id'];
    $amount=$_POST['amount'];
       
   
    $sql="INSERT INTO payments(client_id, amount) VALUES('$client_id','$amount')";
    $result=$connection->query($sql);
    if ($result) {
        echo"Inserted Successfully";
        header('location:paymentview.php');
        exit();
    }else{
        echo "Inserted fail";
      }
}

?>