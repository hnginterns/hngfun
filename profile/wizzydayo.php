
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
    <style>
    

/* Layout */

body {
    font:100px 12px/1.6em Arial, Helvetica, sans-serif;
        width: 95%;
        height: 90% ;
	color:#2a3845;
	margin:0;
	padding:0;
	background:#FFFFFF;
}

p {
	margin:0;
	padding:0;
}

#wrapper {
	margin:0 auto;
	width: 100%;
	border-left:1px solid #f0e9eb;
	border-right:1px solid #f0e9eb;
}

#header {
	margin:0 1px;
}

#bg {
	height:50px;
	background:url('http://img840.imageshack.us/img840/9886/87926428.gif') repeat-x;
}

#main-content { 
	margin:0 auto;
        border: 1px solid #f0e9eb;
}

#main-image {
	text-align:center;
        
}

#left-column {
	width:55%;
	padding:0 30px 30px;
	float:left;
}

#right-column {
	width:35%;
	float:right;
}

.sidebar {
	width:218px;
	margin:0 auto;
	padding:10px 25px;
	background:url('http://img404.imageshack.us/img404/3092/shadowh.jpg') no-repeat top;
}

#footer {
	background:#f7f7f7;
	border-top:1px solid #f0e9eb;
	padding:10px 15px;
	clear:both;
}
#stage {
  border : solid 2px blue ;
  

  }

/* Global Styling */

a:visited, a:link {
	color:#a43b55;
	text-decoration:underline;
	background:none;
}

a:hover {
	color:#a43b55;
	text-decoration:none;
	background:none;
}

h1 {
	color:#7a2e40;
	margin:0 0 10px;
	padding-bottom:10px;
	font:normal 17px Georgia, serif;
	border-bottom:1px solid #efece7;
}

h2 {
	color:#7a2e40;
	margin:20px 0 10px;
	padding-bottom:10px;
	font:normal 17px Georgia, serif;
	border-bottom:1px solid #efece7;
}

h3 {
	color:#7a2e40;
	margin:10px 0;
	padding-bottom:10px;
	font:bold 14px Arial, Helvetica, sans-serif;
	border-bottom:1px solid #efece7;
}

ul {
	padding:0;
	margin:0 0 0 17px;
	list-style:square url('http://img525.imageshack.us/img525/1890/bulletr.gif');
}

.box {
	background:#f7f7f7;
	border:1px solid #f0e9eb;
	padding:15px;
}

#nav {
	background:#06a;
	padding:10px 20px;
	text-align:right;
	color:#f6dde3;
}

#nav a {
	margin: 0 10plink {
	text-decoration:none;
	color:#f6dde3;
}

#nav a:hover {
	text-decoration:underline;
	color:#f6dde3;
}

#logo {
	margin-bottom:20px;
	font:normal 18px Georgia, serif;
	color:#fa7393;
}
 </style>
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
	      <h3> 
You can download my android app <a href = " https://github.com/wizzydayo/hello-world/raw/master/wizzydayo.apk "> here </a> 
<h3>
<hr>
	      
	      
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

 
