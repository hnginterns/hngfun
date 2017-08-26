<?php
$servername = "localhost";
$username = "intern";
$password = "@hng.intern1";
$dbname = "hng";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    //die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";
 ?>