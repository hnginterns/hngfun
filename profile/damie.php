<?php
//this is a sample script that will be pulled and pushed from github
//and later connect to the database
$host     = "localhost";
$username ="root";
$password ="";
//create connection
$conn = new mysqli($host, $username ,$password);
//check connection
if ($conn->connect_error) {
	# code...
	die("connection failed". $conn->coonect_error);
}
echo "Hello World, i am testing this!";
$conn->close();
?>