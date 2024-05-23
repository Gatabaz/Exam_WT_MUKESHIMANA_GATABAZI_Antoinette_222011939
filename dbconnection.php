<?php  
$servername="localhost";
$username="root";
$password="";
$databasename="counseling_platform";
$connection=new mysqli($servername,$username,$password,$databasename);
if ($connection->connect_error) {
	die("connection failed.".$connection->connect_error);
}
?>