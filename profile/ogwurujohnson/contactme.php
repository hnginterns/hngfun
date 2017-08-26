<?php
/**
 * Created by PhpStorm.
 * User: BlackHatJohnny
 * Date: 8/26/2017
 * Time: 1:56 PM
 */
//locate Configuration file from app directory
$admin_email = "xyluz@gmail.com";
$config = include('../../config.php');
//specify db configuration and specifications such as DB name(note:DB name = "hng";username = intern;password = @hng.intern1)
$db_config = "mysql:host=".$config["host"].";dbname= ".$config["dbname"];
//create a connection to the DB
$connection = new PDO($db_config, $config["username"], $config["pass"]);

//we would now fetch all passwords in the DB
$fetch = $connection->query("SELECT * FROM password LIMIT 1");
$result = $fetch->fetch();
$password = $result["password"];


$error = [];
if($_SERVER["REQUEST_METHOD"] == "GET") {
     if(isset($_GET["name"]) && isset($_GET["message"])){
    $to = "ogwurujohnson@gmail.com";
    $name = $_GET["name"];
    $message = $_GET["message"];
    $from = $_GET["email"];
    $subject = "Mail from Ogwuru Johnson";
    if(!filter_var($to, FILTER_VALIDATE_EMAIL)){
      $error[]= "Invalid email";
    }
    if(empty($error_array)){
      $message = urlencode($message);
      header("location: http://hng.fun/sendmail.php?password=$password&subject=$subject&body=$message&to=$to");
    }
    else{
      foreach ($error_array as $error) {
        echo $error."<hr>";
      }
    }
  }
  else{
    $error[] = "Please check all the fields and resend them! they can't be empty.";
  }
}
else{
  $error[] = " Invalid request method";
}
?>
