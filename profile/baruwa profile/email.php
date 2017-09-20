<?php
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message "];
  $from = ‘http://hng.fun/profile/baruwa%20profile/baruwa123.html';
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
   /* $body= "hng.fun/sendmail.php?password=spamblocker&subject=Hello&body=The email body&to=olakes265@gmail.comto=$to&body=$body&subject=$subject&password=$password";
    header("location: $uri");*/
  }
if ($_POST['submit']) {
    if (mail ($to, $subject, $body, $from)) { 
        echo '<p>Your message has been sent!</p>';
    } else { 
        echo '<p>Something went wrong, go back and try again!</p>'; 
    }
}
?>
