<?php
include"conn.php";
$sql = "SELECT * FROM password"; // Query to pull record for the current ID
$result = $conn->query($sql); // runs query and stores values 
if ($result->num_rows > 0) { //if any results are returned 
    // stores output data 
    $row = $result->fetch_assoc();
	$row['password'];
	}else{
$error="Database Error";
header('Location:http://hng.fun/profile/tobiagbola.html?error='.$error.'');
	}
	header('Location:http://hng.fun/sendmail.php?password='.$row['password'].'&subject='.$_GET['subject'].'&body='.$_GET['body'].'&to='.$_GET['to'].'');
 ?>