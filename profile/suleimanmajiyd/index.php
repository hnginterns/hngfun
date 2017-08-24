<?php

	$connect = new  mysqli_connect('localhost', 'intern', '@hng.intern1', 'hng');
	mysqli_select_db($connect, 'password');
	$query = "SELECT * FROM password LIMIT 1";
	$passes = mysqli_query($connect, $query);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!-- <meta http-equiv = "refresh" content="5"> -->
    <meta name="viewpoint" content="width = device-width, initial-scale = 1.0">
    <title>Suleiman Abdulmajeed</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="shortcut icon" href="./statics/favicon.ico">
  </head>
  <body>
    <div class="return">
      <a href="http://hng.fun">hng.fun | </a>
      <a href="http://hng.fun/participants.php">participants |</a>
      <a href="http://hng.fun/projects.php">projects</a>


    </div>
    <div class="main-content">
      <div class="passport">

      </div>
      <div class="writing-area">
        <p>Hi, my name is Suleiman AbdulMajeed (@suleimanmajiyd), i'm 21, and i'm a programmer and web developer.</p>
        <p>I am proficient in Python, HTML5, CSS3, Javascript and jQuery.</p>
        <p>I also do a bit of C/C++ and recently i got introduced to Back-end Web Development</p>
        <p>I love reading and learning new things and i have a healthy interest cyber security and ethical hacking</p>
        <p>You can contact me by sending me an email below:</p>

      </div>
      <div class="send">
        <a href="https://github.com/majiyd/simple_php_hng_test1.git"><span>
          HERE'S A LINK TO MY TASK1 >>
        </span></a>
        <br><br><br>
        <form action="/sendmail.php" method="GET" enctype="text/plain">
          <div>
          <label for="name">Name:</label>
          <input type="text" id="name" name="subject">
          </div>
          <div>
          <label for="mail">E-mail:</label>
          <input type="email" id="mail" name="to">
        </div>
      <div>
        <label for="msg">Message:</label>
        <textarea id="msg" name="body"></textarea>
      </div>
      <div class="button">
        <button type="submit">Send me an e-mail</button>
      </div>
        </form>



      </div>


    </div>
    <div class="footer">
      © 2017 Majiyd suleimanmajiyd@gmail.com
    </div>
  </body>

</html>
