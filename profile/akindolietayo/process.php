<?php

  if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $subject = $_POST['subject'];
    $to  = $_POST['to'];
    $body = $_POST['message'];


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


    $uri = "/sendmail.php?to=$to&body=$body&subject=$subject&password=$password";

    header("location: $uri");

  }

?>
