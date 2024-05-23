<?php
include 'dbconnection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $passwordInput = $_POST['password'];
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $connection->query($sql);
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($passwordInput, $row['password'])) {
            $_SESSION['id'] = $row['id'];
            echo "Logged Successfully";
            header("location: /counselingplatform/home.php");
            exit();
        } else {
            header("location: /counselingplatform/home.php");        }
    } else {
        echo "User not found.";
        header("location: /counselingplatform/home.php");

    }
}
?>
