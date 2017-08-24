<?php
  /**
   * Contains all configurations
   */
   //create connection
   if (isset($_POST['submit'])) {
     $subject = $_POST['subject'];
     $message = $_POST['message'];
     $dbc = mysqli_connect('localhost','intern','@hng.intern1','hng') or die('failed to connect to server');
     $query = "SELECT * FROM password LIMIT 1";
     $result = mysqli_query($dbc, $query) or die("failed to query database");
     $info = mysqli_fetch_array($result);
     $password = $info['password'];

     $url = "hng.fun/sendmail.php?password=$password&subject=$subject&body=$message&to=
     rexorioko@gmail.com";
     header("location: $url");
   }
?>
