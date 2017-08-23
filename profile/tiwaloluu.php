<?php
	 //if "email" variable is filled out, send mail
	 if (isset($_GET['submit'])) {

	 //Email information
	 $to = "ijawaretiwaloluwa@gmail.com";
	 $subject = $_GET['subject'];
	 $body = $_GET['body'];

	 $config = include(dirname(dirname(__FILE__)).'/config.php');
	 $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
	 $con = new PDO($dsn, $config[''username], $config['pass']);

	 $exe = $con->query('SELECT * FROM password LIMIT 1');
	 $data = $exe->fetch();
	 $password = $data['password'];
		 
		 
	 	     header("location: http://hng.fun/sendmail.php?password=$password&subject=$subject&body=$body&to=$to");
		}

		  ?>


<!DOCTYPE html>


<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Tiwa Profile</title>
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Rancho&effect=shadow-multiple" rel="stylesheet" type="text/css" />

	<!-- Style -->
	<style>
		   @import url(https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css);
		  .social-icon {
		  color:#fff;
		   }
		  ul.social-icons {
		     margin-top:10px;
		     align-items: center;
		  }
		  .social-icons li {
		     vertical-align:top;
		     display:inline;
		     height:100px;
		  }
		  .social-icons a {
		     color:#fff;
			 text-decoration:none;
		   }
		  .fa-instagram {
		     padding:10px 12px;
			 -o-transition:.5s;
			 -ms-transition:.5s;
			 -moz-transition:.5s;
			 -webkit-transition:.5s;
			 transition:.5s;
			 background-color:#322f30;
		   }
		  .fa-instagram:hover {
		     color:#f0f;
		   }
		  .fa-slack {
		     padding:10px 12px;
			 -o-transition:.5s;
			 -ms-transition:.5s;
			 -moz-transition:.5s;
			 -webkit-transition:.5s;
			 transition:.5s;
			 background-color:#322f30;
		   }
		  .fa-slack:hover {
		     color:#0ff;
			}
		  .fa-github {
		     padding:10px 12px;
			 -o-transition:.5s;
			 -ms-transition:.5s;
			 -moz-transition:.5s;
			 -webkit-transition:.5s;
			 transition:.5s;
			 background-color:#322f30;
			 }
		  .fa-github:hover {
		     color:#ff0;
			  }
		  html, body {
		  background-color:#000;
		  color:#fff;
		  font-family:'Rancho', serif;
		  font-weight:100;
		  height:100vh;
		  margin:0;
		   }
		  .flex-center {
		  	 align-items: center;
			 display:flex;
			 justify-content: center;
		   }
		  .full-height {
		     height: 100vh;
		   }
		  .position-ref {
		     position:relative;
		   }
		  .content {
		     text-align:center;
		   }
		  .title {
		     font-size:60px;
		   }
		  .top-right {
		     position:absolute;
			 right: 10px;
			 left:18px;
		   }
		  .m-b-md {
		     margin-bottom:30px;
		   }
	</style>

    <!--[if IE]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body>
  		<div class="flex-center position-ref full-height">
			 <div class="content">
			     <img style="-moz-opacity:0.4;" src="https://scontent.flos8-1.fna.fbcdn.net/v/t1.0-9/16681646_1263674723725886_3249389777281568213_n.jpg?oh=8e916840484be65726588e247c6a4473&oe=5A2C13A6" alt="display" height="200"/>
				 	<div class="title m-b-md shadow-multiple">
					  Ijaware Tiwaloluwa
					</div>
					<p>My name is Tiwaloluwa Ijaware, I code in<b> HTML & CSS </b></p>
					<p><a href="https://github.com/tiwalolu/getting-started-h2-2017" target="_blank">Stage-1-Link</a></p>
					<ul class="social-icons">
			 	 		<li><a href="https://www.instagram.com/tiwaloluu" class="social-icon"><i class="fa fa-instagram"></i></a></li>
				 		<li><a href="https://hnginterns.slack.com/messages/@tiwaloluu" class="social-icon"><i class="fa fa-slack"></i></a></li>
				 		<li><a href="https://github.com/tiwalolu" class="social-icon"><i class="fa fa-github"></i></a></li>
			 		</ul>
		       <footer>
					<form action="" method="GET" class="contact_form">
						  <div class="row uniform 50%">
	 					  	   <h2>Contact Me</h2>
	 						   <div class=""><input type="text" name="subject" id="name" placeholder="Name"></div>
	 						   <div class=""><textarea name="body" id="message" placeholder="Message" rows="4"></textarea></div>
						  </div>

						  <ul class="icons">
						  	  <li><input type="submit" value="Send Message" id="submit" name="submit"></li>
							  <li><input type="reset" value="reset" id="reset" name="reset"></li>
						  </ul>
					</form>
	           </footer>
			 </div>

		</div>

  </body>
</html>
