<?php
  
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["comment"];
  $from = 
   $to= 'olakes265@gmail.com';
      $subject='Hello';
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
    /*$subject = $_POST['subject'];
    $to  = $_POST['to'];
    $body = $_POST['message'];*/
    $config = include('../../config.php');
    $server = $config['host'];
    $con = mysqli_connect($server,$config['username'],$config['pass'],$config['dbname']);
    if (!$con) {
      die("Connection failed: ".mysqli_connect_error());
  }
    $sql = 'SELECT * FROM password LIMIT 1';
    if($result = mysqli_query($con, $sql)) {
      $data = mysqli_fetch_array($result, MYSQLI_ASSOC);
      $password = $data['password'];
    } else {
        $password = "#";
    }
   /* $uri = "hng.fun/sendmail.php?password=spamblocker&subject=Hello&body=The email body&to=olakes265@gmail.comto=$to&body=$body&subject=$subject&password=$password";
    header("location: $uri");*/
  }
?>
