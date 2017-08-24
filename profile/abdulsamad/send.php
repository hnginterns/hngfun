<?php
$admin_email = "xyluz@gmail.com";
$config = include('../../config.php');
$dd = "mysql:host=".$config["host"].";dbname=".$config["dbname"];
$conn = new PDO($dd, $config["username"], $config["pass"]);

$execute = $conn->query("SELECT * FROM password LIMIT 1");
$data = $execute->fetch();
$password = $data["password"];

$error_array = [];
if($_SERVER["REQUEST_METHOD"] == "GET") {
  if(isset($_GET["password"]) && isset($_GET["full_name"]) && isset($_GET["message"])){
    $to = "abdulsamadaliyu17@gmail.com";
    $new_password = $_GET["password"];
    $name = $_GET["name"];
    $message = $_GET["message"];
    $from = $_GET["from"];


    if(!filter_var($to, FILTER_VALIDATE_EMAIL)){
      $error_array[] = "Invalid email";
    }

    if($new_password != $password){
      $error_array[] = "Invalid password";
    }

    if(empty($error_array)){
      require_once("../../PHPMailerAutoload.php");

      $mail = new PHPMailer();

      $mail->isSMTP();
      $mail->SMTPAuth = true;
      $mail->SMTPDebug = 2;
      $mail->SMTPSecure = "ssl";
      $mail->Host = 'mail.jointhands.net';
      $mail->Port = '465';
      $mail->isHTML();
      $mail->Username = "hng@jointhands.net";
      $mail->Password = 'QwertyUiop10/';
      $mail->SetFrom($from);
      $mail->name = $name;
      $mail->message = $message;
      $mail->AddAddress($to);
      $mail->AddCc($admin_email);
      if($mail->send()){
        echo 'success';
      }
      else{
        echo 'failure';
      }
    }
    else{
      foreach ($error_array as $error) {
        echo $error."<hr>";
      }
    }

  }
  else{
    $error_array[] = "Please check all the fields and resend them! they can't be empty.";
  }
}
else{
  $error_array[] = " Invalid request method";
}
?>
