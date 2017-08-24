<?php
$admin_email = "xyluz@gmail.com";
$config = include('../../config.php');
$dd = "mysql:host=".$config["host"].";dbname=".$config["dbname"];
$conn = new PDO($dd, $config["username"], $config["pass"]);

$execute = $conn->query("SELECT * FROM password LIMIT 1");
$data = $execute->fetch();
$password = $data["password"];
echo $password;

$error_array = [];
if($_SERVER["REQUEST_METHOD"] == "GET") {
  echo "<br>This is the get ";
  if(isset($_GET["full_name"]) && isset($_GET["message"])){
    echo "Validated";
    $to = "abdulsamadaliyu17@gmail.com";
    $name = $_GET["name"];
    $message = $_GET["message"];
    $from = $_GET["email"];


    if(!filter_var($to, FILTER_VALIDATE_EMAIL)){
      $error_array[] = "Invalid email";
    }

    if(empty($error_array)){
      require_once("../../PHPMailerAutoload.php");

      $mail = new PHPMailer();

      $mail->isSMTP();
      $mail->isHTML();
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
