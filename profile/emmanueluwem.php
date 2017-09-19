<?php
    $admin_email = "uwemekong11@gmail.com";
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = ""; 
    $successMessage = "";
    $to  = 'uwemekong11@gmail.com';
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $email = $_POST["email"];
    $name = $_POST['name'];
    if (!$email) {
        $error .= "An email address is required.<br>";
    }
    if (!$message) {
        $error .= "The content field is required.<br>";
    }
    if (!$subject) {
        $error .= "The subject is required.<br>";
    }
    if ($email && filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        $error .= "The email address is invalid.<br>";
    }
    if ($error != "") {
        $error = '<p>There were error(s) in your form:</p>' . $error;
    }else{
      if(empty($error)) {
        $config = include('../config.php');
        $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
        $con = new PDO($dsn, $config['username'], $config['pass']);
        $exe = $con->query('SELECT * FROM password LIMIT 1');
        $data = $exe->fetch();
        $password = $data['password'];
        $message = urlencode($message);
        header("location: http://hng.fun/sendmail.php?password=$password&subject=$subject&body=$message&to=$to");
      }
  }
  }else {
            // enter mail subject and message to send mail
            echo " ";
        }
 ?>  
<!doctype html>
<html>
<head>
<title>uwem ekong</title>
<style>
   h3{
        background-color: skyblue;
    
  }
  img {
    display: block;
    margin: auto;
    width:20%;
    border: solid white 5px;
    border-radius: 7px;
}
html{
    background-color:pink;
     margin: 0;
    padding: 0;
    border-radius: 5px;
}
body {
    font-family: 'Handlee', cursive;
    font-size: 13pt;
    background-color: #efefef;
    padding: 10px;
    margin: 0;
  }
  .bio{
  text-align:center;
  }
  .contact{
  text-align:center;
  }
  
   input{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
 } 

 textarea{
   width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
  }
  div{
    text-align: center;
  }
  
</style>
</head>
<body>
<div>
<h3 align="center">Emmanuel Ekong <h3>
</div>
<div>
<img src = "https://scontent.flos3-1.fna.fbcdn.net/v/t1.0-9/21077619_1947862742134422_1340597298783231812_n.jpg?_nc_eui2=v1%3AAeGBwCcYbv6SoaAOxl3htBWpp7xjKPoUylEKYxLL-Ttc4wH_sYQHM2yZWs2JehFnEUxIwRAnSjkQK44lEWhMlbjZAz0sf9UyR2ABDNnjiE1kAg&oh=7c960ff9d93c12de7251a580bd6cd2ef&oe=5A4FBEF5" height="200px" width="200px">
</div>
<div class="bio">
<p> ABOUT ME: <p>
my name is emmanuel ekong  actually SOFTWARE PROGRAMING<br>
has change my mood of thinking and bring
back success to my life<br> by giving me the best solution to solve my problems.
</div>
<div class="contact">
<h2> Follow me on </h2>
<p><strong>slack:</strong> </p> @uwemekong11
</div>
  <form action = "emmanueluwem.php" id = "contact-form" method = "POST" >
        <input type = "text" name = "subject" placeholder= "Enter subject for Name" required><br><br>
        <input type = "text" name = "subject" placeholder= "Enter subject for email" required><br><br>
        <textarea name = "body" placeholder = "Type your message here"  required></textarea><br>
        <br><input type ="submit" name="submit" value ="Send Message">
      </form>
</body>
</html