
<?php

  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];
    $subject = $_POST['subject'];
    $to  = 'wizitendo10@gmail.com';
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



<!DOCTYPE html>
<html>
<head>
    <title>WISDOM ALPHONSUS | PROFILE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="wizzydayo.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="wrapper">
    
	<div id="header">
		
  <div id="nav"><a href="index.html">Home</a> | <a href="#">About Me</a> | <a href="#">Contact Me</a> | </div>
		
  <div id="bg">

  </div>
	
  </div>
	
	<div id="main-content">
		
        <div id="left-column">
			
        <div id="logo">
			
         <h1>Welcome to Wisdom's Profile </h1>
      		
	<h2>MY DETAILS</h2>
  
   </div>
   <div>
        <p>NAME:WISDOM ANTHONY ALPHONSUS</p>
             <br>
        <p>SLACK USERNAME: wizzydayo</p>
             <br>
   <p id=stage>Check my <b style= "color : blue ">STAGE1</b> test project  <a href="http://www.github.com/wizzydayo/hnginterns"> here </a>.</p>
			      
       </div> 
  <br>
  <br>
  <hr>
      <div> 
  <h1>Contact Me</h1>
        <?php if(isset($error) && !empty($error)): ?>
          <blockquote style="text-align: left;padding:5px;background: #fcf6f6; border-left:15px solid red;">
            <ul style='list-style:none;'>
              <?php
                foreach ($error as $key => $value) {
                  echo "<li>$value</li>";
                }
              ?>
            </ul>
          </blockquote>
        <?php endif; ?>
        
   <form  action="index.php" method="POST">
          <label>Subject</label> <br>
          <input type="text" name="subject" placeholder="Subject" required>
          <br>
          <br>
          <label>Your Message</label>
          <textarea name="message" rows="8" cols="30" placeholder="Your Message Here" required></textarea>

          <button type="submit" name="submit" color="blue"> Send Message</button>
      </form>
    </div>
    </div>




       <div id="right-column">
      
     <div id="main-image"><img src=" https://raw.githubusercontent.com/wizzydayo/hello-world/master/wizzydayo.JPG" width="200" height="188" /></div>
			
      <div class="sidebar">
				
         <h3> Biography</h3>
				<p style="text-align : center ;"> 
     I am from Akwa-ibom state,Nigeria . I completed my high school from Spark Academy in lagos state...... Currently schooling in the university of Uyo, a student of Mechanical and Aerospace Engineering .
      
        
                          </p>
                      
		<h3>Find Me on</h3>
		<div class="box">
	<ul>
		<li><a href="http://facebook.com/wisdom.alphonsus.010">FACEBOOK</a></li>
                <li><a href="http://github.com/wizzydayo">GITHUB</a></li>
						
	</ul>
				</div>
			</div>
		</div>
	
        </div>
	<div id="footer">
		 Made by wizzydayo. No rights reserved.<br/>
		
	</div>
</div>

</body>

 
