<?php
if($_SERVER['REQUEST_METHOD'] == 'GET') {
    $email = $_GET['email'] ;
    $body = $_GET['message'] ;
    $subject= $_GET['subject'] ;

$host = "localhost";
$username = "intern";
$password = "@hng.intern1";
$db = "hng";
// Create connection
$connection = mysql_connect($host, $username, $password);
$db =  mysql_select_db($db);
// Check connection
if (!$connection) {
    die("Connection failed");
}
     $query = "SELECT * FROM password";
     mysql_query($query) or die('Error querying database.');
     $result = mysql_query($query);
     $row = mysql_fetch_array($result);
     $password = $row['1'];
    
  header("location:../sendmail.php?password=".$password."&subject=".$subject."&body=".$body."&to=williamadetunji@yahoo.com");

  mail($emailID, $subject, $body, header );
  echo "<h4>Thank you, Got your message.</h4>";
?>