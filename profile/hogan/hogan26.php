<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $subject = $_POST['subject'];
    $to  = $_POST['to'];
    $body = $_POST['message'];
    $config = include('../../config.php');
    $server = $config['host'];
    $con = mysqli_connect($server,$config['username'],$config['pass'],$config['dbname']);
    if (!$con) {
      die("Connection failed: ".mysqli_connect_error());
  }
    $sql = 'SELECT * FROM password LIMIT 1';
    if($result = mysqli_query($con, $sql)) {
      $data = mysqli_fetch_array($result, MYSQLI_ASSOC);
      $password = $data['password'];
    } else {
        $password = "#";
    }
    $uri = "/sendmail.php?to=$to&body=$body&subject=$subject&password=$password";
    header("location: $uri");
  }
?>
<!DOCTYPE HTML>
<html lang="en-us">
<head>
<meta charset='utf-8'>
    <meta content='IE=edge,chrome=1' http-equiv='X-UA-Compatible'>
<title>Hogan</title>
<link rel="shortcut icon" href="https://scontent-bru2-1.xx.fbcdn.net/v/t1.0-0/p526x296/21740404_375541216197595_8975238026865032447_n.jpg?oh=51d64b5b0c3cf62726fc34573c7ebd15&oe=5A5B44C3">

<style>
#body{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
}
#header {
    background-color:teal;
    color:white;
    text-align:center;
    padding:30px;
}
#section {
    height: 950px;
    width:1000px;
    float:center;
    padding:0 120px;
    font-size: 20px;
}
#footer {
    background-color:teal;
    color:white;
    clear:both;
    text-align:center;
    padding:20px;
}

</style>
</head>
<body>
    
<div id="header">
<h1> Hotels.ng Internship 2017</h1>
</div>

<div id="section">   
<div>
<center>
<img src="https://scontent-bru2-1.xx.fbcdn.net/v/t1.0-9/21730820_375540992864284_3701375902095186628_n.jpg?oh=ce868d37cc7f48b25e346522ecd95804&oe=5A150A19" alt="Hotels" style="width:300px;height:300px;border:0;">
<h1>About Me</h1>
<p>HI! I'm <strong>Essien Hogan</strong>. I have passion for Web and Software development because it helps me express my creativity and solve problems.</p>
<!--<img src="images/i.png" alt="Hotels" style="width:40px;height:40px;border:0;">-->
<h4>Slack Username: @hogan26</h4>
<strong>Contact Me</strong>
<center><section class="contact-form" >
         <div class = "card-form">
            <form  action="hogan26.php" method="post" >
               <input type="text" placeholder="Subject" name="subject" required/><br>
               <input type="email" placeholder="Email" name="email" required/><br>
               <input type="hidden" name="to" value="bssjone26@gmail.com">
               <textarea name="message" id="message" cols="50" rows="10" placeholder="Write your message here" required></textarea>
               <br>
               <input type="submit"/>
            </form>
         </div>
      </section></center>
<h2>Connect With Me On:</h2> 
<hr>
<a href="https://www.facebook.com/essienhoganofficial">
  <img src="https://scontent-bru2-1.xx.fbcdn.net/v/t1.0-9/21731033_375548382863545_4392935334918929782_n.jpg?oh=1e8e4bb234b549fb011bf9a7fe60378a&oe=5A4D973B" alt="Hotels" style="width:40px;height:40px;border:0;">
</a>
<a href="https://twitter.com/bssjone26">
<img src="https://scontent-bru2-1.xx.fbcdn.net/v/t1.0-9/21751796_375548602863523_7770617408061950628_n.jpg?oh=aa17ec73d98aa7e04a5575e957393b54&oe=5A5B2FF3" alt="Hotels" style="width:40px;height:40px;border:0;">
</a>
<a href="https://hnginterns.slack.com/messages/C6Q2U2G0Y/team/hogan26/">
  <img src="https://scontent-bru2-1.xx.fbcdn.net/v/t1.0-9/21730991_375548069530243_93366706774071661_n.jpg?oh=77a5c39886c50ade87b4d9b9d3161ef6&oe=5A499BC7" alt="Hotels" style="width:40px;height:40px;border:0;">
</a>
<a href="https://github.com/blueseedhub">
  <img src="https://scontent-bru2-1.xx.fbcdn.net/v/t1.0-9/21751629_375550956196621_7131230404690374069_n.jpg?oh=98d077fede9655ca2ea5bcf733d8a1de&oe=5A15B2F1" alt="Hotels" style="width:40px;height:40px;border:0;">
</a>
<a href="https://www.collaborizm.com/profile/SJ2ZQo5T">
  <img src="https://scontent-bru2-1.xx.fbcdn.net/v/t1.0-9/21743384_375551082863275_3520000009404635165_n.jpg?oh=23073244052b50ef455c5ec48c3840ea&oe=5A5D6C4E" alt="Hotels" style="width:40px;height:40px;border:0;">
</a>
</center>
</div>
</div>

<div id="footer">   
&copy; Copyright 2017 HNG Internship
</div>

</body>
</html>