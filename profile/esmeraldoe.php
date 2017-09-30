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
<style>
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
</head>
<body>

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
