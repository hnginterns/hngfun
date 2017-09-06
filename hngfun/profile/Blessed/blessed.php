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
<style>
.card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    max-width: 600px;
    margin: auto;
    text-align: center;
}

.container {
    padding: 0 16px;
}

.form_container {
  margin: 0;
}

.title {
    color: grey;
    font-size: 18px;
}

button {
    border: none;
    outline: 0;
    display: inline-block;
    padding: 8px;
    color: white;
    background-color: #000;
    text-align: center;
    cursor: pointer;
    width: 100%;
    font-size: 18px;
}

a {
    text-decoration: none;
    font-size: 22px;
    color: black;
}

button:hover, a:hover {
    opacity: 0.7;
}

.login-box {
  background-color: ddd;
  max-width: 340px;
  margin: 0 auto;
  position: relative;
  top: 80px;
  padding-bottom: 30px;
  border-radius: 5px;
  box-shadow: 0 5px 50px rgba(0,0,0,0.4);
  text-align: center;
}

.login-box .box-header {
  background-color: #665851;
  margin-top: 0;
  border-radius: 5px 5px 0 0;
}

.login-box label {
  font-weight: 700;
  font-size: .8em;
  color: #888;
  letter-spacing: 1px;
  text-transform: uppercase;
  line-height: 2em;
}

.login-box input {
  margin-bottom: 20px;
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 2px;
  font-size: .9em;
  color: #888;
}

.login-box input:focus {
  outline: none;
  border-color: #665851;
  transition: 0.5s;
  color: #665851;
}
textarea {
    width: 70%;
    height: 150px;
    padding: 12px 20px;
    border: 1px solid #ccc;
    border-radius: 2px;
    resize: none;
}

buttons {
  margin-top: 0px;
  border: 0;
  border-radius: 2px;
  color: white;
  padding: 10px;
  text-transform: uppercase;
  font-weight: 400;
  font-size: 0.7em;
  letter-spacing: 1px;
  background-color: #665851;
  cursor:pointer;
  outline: none;
}

.login-box button:hover {
  opacity: 0.7;
  transition: 0.5s;
}

.login-box button:hover {
  opacity: 0.7;
  transition: 0.5s;
}
</style>

<div class="card">
  <img src="me.jpg" alt="Raymond" height = "500px" style="width:100%">
  <div class="container">
    <h1>Raymond Blessed</h1>
    <p class="title">Hi!, I am a young Lagosian with an interest in tech especially programming, I am so happy to be a part of this HNG internship and hope to learn alot as I go along.</p>
    <a href='http://bit.ly/2wwZv6q'>See My Android App</a>
    <a href="#"><i class="fa fa-github"></i></a>
    <a href="#"><i class="fa fa-twitter"></i></a>
    <a href="#"><i class="fa fa-slack"></i></a>
    <a href="#"><i class="fa fa-facebook"></i></a>
    <p><button>Contact Me</button></p>
  </div>
  <div class="form_container">
    <div class="login-box animated fadeInUp">
      <form method="GET" >
	<label for="name">Full Name</label>
	<br/>
	<input type="text" id="fullname" name = "name" placeholder="Your Name">
	<br/>
	<label for="email">Email</label>
	<br/>
	<input type="email" id="email" name = "email" placeholder=" example@hng.fun">
	<br/>
	<label for="subject">Subject</label>
	<br/>
	<input type="text" id="subject" name = "subject" placeholder="Subject">
	<br/>
	<label for="message">Message</label>
	<br/>
	<textarea id="message" rows="4" cols="50" name="message" placeholder ="Enter text here..."></textarea>
	<button type="submit">Send Message</button>						
      </form>		
    </div>
  </div>

</div> 
</body>
</html>
