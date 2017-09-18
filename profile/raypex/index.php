<<<<<<< HEAD
<!DOCTYPE html>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];
    $subject = $_POST['subject'];
    $to  = 'raypex2@gmail.com';
    $body = $_POST['message'];
    if($body == '' || $body == ' ') {
        $error[] = 'Message cannot be empty.';
    }
    if($subject == '' || $subject == ' ') {
        $error[] = 'Subject cannot be empty.';
    }
    if(empty($error)) {
        $config = include(dirname(dirname(dirname(__FILE__))).'/config.php');
        $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
        $con = new PDO($dsn, $config['username'], $config['pass']);
        $exe = $con->query('SELECT * FROM password LIMIT 1');
        $data = $exe->fetch();
        $password = $data['password'];
        $uri = "/sendmail.php?to=$to&body=$body&subject=$subject&password=$password";
        header("location: $uri");
    }
}
?>



<html lang ="en">
<head>
<meta charset ="utf-8">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 100%;
  margin: auto;
  background-color: #bfff00;
  text-align: center;
  font-family: arial;
}


.container {
  padding: 0 16px;
}

.container::after {
  content: "";
  clear: both;
  display: table;
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
</style>

<style>

input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: #ff4040;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #00ffff;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}

</style>

<title> Ray's Profile at Hotels.ng Internship</title>
</head>
<body>

<div class="card">
	<h2 style="text-align:center">Ray's Profile at Hotels.ng Internship</h2>

  <div class="container">
  	<img src="http://i.imgur.com/UrkycNV.jpg" alt="Ray" style="width:300px">
    <h1>RAY OKAAH</h1>
    <p>I am a Java / Android Enthusiast. 200 level student of The University of Port Harcourt, Rivers state Nigeria.</p>
	<p> Slack username: raypex </p>
	<p> My stage 1 test project is <a href="https://github.com/raypex/hngtest">here</a> </p>
	<p> My android app can be downloaded <a href="http://www.cha.forexbroke.com/ContactRay.apk"> here </a>
    <div style="margin: 24px 0;">
      <a href="http://www.github.com/raypex"><i class="fa fa-github"></i></a> 
      <a href="http://www.twitter.com/dear_ray"><i class="fa fa-twitter"></i></a> 
   </div>
  
  </div>
  
  
  <h3>Contact Me</h3>

<div class="container">
  <form method ="POST">
    <label for="subject">SubJect</label>
    <input type="text" id="fname" name="subject" placeholder="Subject..">


    <label for="subject">Your Message</label>
    <textarea id="subject" name="message" placeholder="Write something.. it's better than just starring... - Ray" style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>
</div>

</body>
</html>
=======
<!DOCTYPE html>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];
    $subject = $_POST['subject'];
    $to  = 'raypex2@gmail.com';
    $body = $_POST['message'];
    if($body == '' || $body == ' ') {
        $error[] = 'Message cannot be empty.';
    }
    if($subject == '' || $subject == ' ') {
        $error[] = 'Subject cannot be empty.';
    }
    if(empty($error)) {
        $config = include(dirname(dirname(dirname(__FILE__))).'/config.php');
        $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
        $con = new PDO($dsn, $config['username'], $config['pass']);
        $exe = $con->query('SELECT * FROM password LIMIT 1');
        $data = $exe->fetch();
        $password = $data['password'];
        $uri = "/sendmail.php?to=$to&body=$body&subject=$subject&password=$password";
        header("location: $uri");
    }
}
?>



<html lang ="en">
<head>
<meta charset ="utf-8">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 100%;
  margin: auto;
  background-color: #bfff00;
  text-align: center;
  font-family: arial;
}


.container {
  padding: 0 16px;
}

.container::after {
  content: "";
  clear: both;
  display: table;
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
</style>

<style>

input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: #ff4040;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #00ffff;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}

</style>

<title> Ray's Profile at Hotels.ng Internship</title>
</head>
<body>

<div class="card">
	<h2 style="text-align:center">Ray's Profile at Hotels.ng Internship</h2>

  <div class="container">
  	<img src="http://i.imgur.com/UrkycNV.jpg" alt="Ray" style="width:300px">
    <h1>RAY OKAAH</h1>
    <p>I am a Java / Android Enthusiast. 200 level student of The University of Port Harcourt, Rivers state Nigeria.</p>
	<p> Slack username: raypex </p>
	<p> My stage 1 test project is <a href="https://github.com/raypex/hngtest">here</a> </p>
	<p> My android app can be downloaded <a href="http://www.cha.forexbroke.com/ContactRay.apk"> here </a>
    <div style="margin: 24px 0;">
      <a href="http://www.github.com/raypex"><i class="fa fa-github"></i></a> 
      <a href="http://www.twitter.com/dear_ray"><i class="fa fa-twitter"></i></a> 
   </div>
  
  </div>
  
  
  <h3>Contact Me</h3>

<div class="container">
  <form method ="POST">
    <label for="subject">SubJect</label>
    <input type="text" id="fname" name="subject" placeholder="Subject..">


    <label for="subject">Your Message</label>
    <textarea id="subject" name="message" placeholder="Write something.. it's better than just starring... - Ray" style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>
</div>

</body>
</html>
>>>>>>> 1ba0f097f4a2ccdb6ac5e0e2d67dfc9f708c1ed1
