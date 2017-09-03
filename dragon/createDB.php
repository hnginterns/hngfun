
<?php
 // require(../config.php);
  
  $servername = "localhost";
$username = "root";
$password = "@hng.fun";
$dbname = "hng";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE pair (
id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
pair_name VARCHAR(30) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();

?>



