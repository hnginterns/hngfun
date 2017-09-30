<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];

  $subject = $_POST['subject'];
    $to  = 'victorumoh@gmail.com';
    $body = $_POST['message body'];

  if($body == '' || $body == ' ') {
      $error[] = 'Message cannot be empty.';
    }

  if($subject == '' || $subject == ' ') {
      $error[] = 'Subject cannot be empty.';
    }

  if(empty($error)) {

    $config = include __DIR__ . "/../config.php";
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

<!DOCTYPE html>
<html>
<head>
<title>SLACK PROFILE</title>
<style>
body {
     background-image: url("https://imgur.com/DriKUe4.jpg"), url("https://imgur.com/DriKUe4.jpg");
      border-style: solid;
    border-width: 10px 100px 10px 100px;
    color: brown;
}
    .img-circle {
        border-radius: 50%;
        height: 195px;
        width: 25%;
        display: block;
      margin: auto;
      margin-top: 30px;
      border-style: solid;
     border-width: 5px 5px 5px 5px;
     color: brown;
    }
   
.center {
    text-align: center;
    font-size: 30px;
    color: #F5C869;
    font-weight: bold;
    background-color: brown;
    font-style: helvetica, sans-serif;
    padding: 8px;
    letter-spacing: 2px;
    border-radius: 5px;
}
.bio{
    text-align: center;
    font-size: 20px;
}
h1 {
    background-color: green;
}


input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 22px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: red;
    color: white;
    padding: 12px 20px;
    border: 3px solid blue;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: green;
}

.container {
    border-radius: 5px;
    background-color: ash;
    padding: 20px;
}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<img class="img-circle" src="https://imgur.com/JrxaFXZ.jpg" alt="ESMERALDOES">
<h1 class="center">VICTOR UMOH</h1>
<p class="bio">A Computer Engineering Student at University of Uyo.<br> 
I like reading and learning new things.<br>
I love coding, coding is life.<br>
I can also rap and play football.<br>
I like using python.<br>
Slack username: esmeraldoes<br> 
Github ID: esmeraldoes</p>
<a href="https://github.com/esmeraldoes/Esmeraldoes.git">STAGE 1 TASK <a>

<h3>PLEASE CONTACT ME!!</h3>

<div class="container">
  <form action="">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">
	
	<label for="email">EMAIL</label>
	<input type="text" id="email" name="email" placeholder="Your EMAIL..">
   
    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:50px"></textarea>
	
	
	 <label for="message body">Message Body</label>
    <textarea id="subject" name="message body" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>
</body>
</html>
