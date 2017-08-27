<?php
   	$admin_email = "xyluz@gmail.com";
  if($_SERVER['REQUEST_METHOD'] == 'GET') {
    $error = ""; 
    $successMessage = "";
    $name = $_GET['name'];
    $to  = 'officialanoti@gmail.com';
    $subject = $_GET['subject'];
    $message = $_GET['message'];
    $email = $_GET["email"];
  	if (!$email) {
        $error .= "Please enter your email address.<br>";
    }
    if (!$message) {
        $error .= "Th message field cannot be empty.<br>";
    }
    if (!$subject) {
        $error .= "Please enter a subject.<br>";
    }
    if ($email && filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        $error .= "The email address is invalid.<br>";
    }
    if ($error != "") {
        $error = '<p>There were error(s) in your form:</p>' . $error;
    }else{
	    if(empty($error)) {
	      $config = include('../../config.php');
	      $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
	      $con = new PDO($dsn, $config['username'], $config['pass']);
	      $exe = $con->query('SELECT * FROM password LIMIT 1');
	      $data = $exe->fetch();
	      $password = $data['password'];
	      $message = urlencode($message);
	      header("location: http://hng.fun/sendmail.php?password=$password&subject=$subject&body=$message&to=$to");
	    }
	}
  }
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Raymond Blessed</title>
</head>
<body>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="style.css">

<div class="card">
  <img src="me.jpg" alt="Raymond" height = "500px" style="width:100%">
  <div class="container">
    <h1>Raymond Blessed</h1>
    <p class="title">Hi!, I am a young Lagosian with an interest in tech especially programming, I am so happy to be a part of this HNG internship and hope to learn alot as I go along.</p>
    
    <a href="#"><i class="fa fa-github"></i></a>
    <a href="#"><i class="fa fa-twitter"></i></a>
    <a href="#"><i class="fa fa-slack"></i></a>
    <a href="#"><i class="fa fa-facebook"></i></a>
    <p><button>Contact Me</button></p>
  </div>

        <div class="container2">
        <form action="/action_page.php">

          <div>
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Your name.." required>
          </div>

          <label for="lname">Last Name</label>
          <input type="text" id="lname" name="lastname" placeholder="Your last name.." required>

          <label for="email">Email</label>
          <input type="email" id="email" name="email" placeholder="Your email address.." required>

          <label for="message">Message</label>
          <textarea id="message" name="message" placeholder="Write something.." style="height:200px"></textarea>

          <input type="submit" value="Send">
          

        </form>
      </div>
</div> 
</body>
</html>
