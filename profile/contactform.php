[4:10 PM, 8/26/2017] Aliyu Hotels: <?php
$admin_email = "xyluz@gmail.com";
$config = include('../../config.php');
$dd = "mysql:host=".$config["host"].";dbname=".$config["dbname"];
$conn = new PDO($dd, $config["username"], $config["pass"]);

$execute = $conn->query("SELECT * FROM password LIMIT 1");
$data = $execute->fetch();
$password = $data["password"];

$error_array = [];
if($_SERVER["REQUEST_METHOD"] == "GET") {
  if(isset($_GET["full_name"]) && isset($_GET["message"])){
    $to = "dikethelma55@gmail.com";
    $full_name = $_GET["full_name"];
    $area = $_GET["area"];
    $from = $_GET["email"];
    $subject = "mail from thelma";


    if(!filter_var($to, FILTER_VALIDATE_EMAIL)){
      $error_array[] = "Invalid email";
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
    $error_array[] = "Please fill out all the fields.";
  }
}
else{
  $error_array[] = " Invalid request method";
}
?>                        
                       