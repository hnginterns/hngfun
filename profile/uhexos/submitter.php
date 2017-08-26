<?php
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;}

$name = $email = $message= $subject= "";

$server = "46.101.104.14";
$user = "intern";
$password = "@hng.intern1";
$database = "hng";

$connection = mysqli_connect($server, $user, $password,$database) or die("Connection failed: " . $connection->connect_error);

$sql = "SELECT * FROM password LIMIT 1";
$output = $connection->query($sql);
$pass_key = mysqli_fetch_array($output)["password"];
  
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $name = test_input($_GET["name"]);
    $email = test_input($_GET["email"]);
    $subject = test_input($_GET['subject']);
    $message = test_input($_GET["message"]);
  }
  
  header('http://hng.fun/sendmail.php?password=$password&subject=$subject&body=$message&to=uhexos@gmail.com');
?>