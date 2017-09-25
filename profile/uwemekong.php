<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];
   $subject = $_POST['subject'];
    $to  = 'uwemekong11@gmail.com';
    $body = $_POST['body'];
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
<!doctype html>
<html>
<head>
<title>uwem ekong</title>
<style>
   h3{
        background-color:pink;
    
  }
  img {
    display: block;
    margin: auto;
    width:20%;
    border: solid pink 8px;
    border-radius: 7px;
}
html{
    background-color:pink;
     margin: 0;
    padding: 0;
    border-radius: 5px;
}
body {
    font-family: 'time new roma';
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
   <a class="button" href="https://github.com/emmanuel1995">Github</a>
   <a class="button" href="https://drive.google.com/open?id=0B-SiESDyF5oKM0tBQWZ6cl93UzA" style="margin-left: 20px;">My App</a>
</div>
  <form action = "uwemekong.php" id = "contact-form" method = "POST" >
        <input type = "text" name = "subject" placeholder= "Enter subject for email" required><br><br>
        <input type="email"  name="email"    placeholder="Your email.." required>
        <textarea name = "body" placeholder = "Type your message here"  required></textarea><br>
        <br><input type ="submit" name="submit" value ="Send Message">
      </form>
</body>
</html