<?php
//if(isset($_GET['to'])){}
include"conn.php";
$sql = "SELECT * FROM password"; // Query to pull record for the current ID
$result = $conn->query($sql); // runs query and stores values 
if ($result->num_rows > 0) { //if any results are returned 
    // stores output data 
    $row = $result->fetch_assoc();
	echo $row;
	}
 ?>