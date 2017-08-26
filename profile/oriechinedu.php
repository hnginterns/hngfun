<?php 
        $to     = "oriechinedu@gmail.com";
        $dbname   = 'hng';
        $hostname = 'localhost';
        $username = 'intern';
        $password = '@hng.intern1';
        $connection = new mysqli($hostname, $username, $password, $dbname);  

// if ($_SERVER['REQUEST_METHOD']=="POST")	
// {   

// 	$subject = trim(htmlspecialchars($_POST['subject']));
// 	$body = trim(htmlspecialchars($_POST['message']));
     
//      if (empty($subject) || empty($body))
//      {
//         $error = "please check for the filled that's empty";
//      }

     $sql = "select password from $dbname LIMIT 1";
     $pass = $connection->query($sql)->fetch_assoc();
     $password = $pass['password'];

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport"
	content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<title>Orie Chinedu Emmanuel</title>  
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css?family=BenchNine');
		body{
			background: #D7DEE6;
		}
		div.content-body{
			width: 500px;
			margin: 0 auto;
		}
		#profile-image{
			width: 200px;
			margin: 0 auto;

		}
		#image{
			border-radius: 40%;
			padding-bottom: 8px;
			border-bottom: 2px solid darkblue;
		}
		#name, h4{
			padding-top: 0px;

			margin: 0px;
		}
		#username{
			width: 300px;
			margin: 0 auto;
			color: darkblue;
		}
		#bio{

			width: 450px;
			margin: 0 auto;
			margin-top: 10px;
			margin-bottom: 10px;
			font-family: 'BenchNine';
		}
		a{
			text-decoration: none;
			color: green;
		}
		a:focus{
			outline: none;
		}
		a:hover{
			text-decoration: none;
		}
		.link-to-stage-one{
			color: green;
			width: 300px;
			margin: 0 auto;
		}
		#subject{
			width: 300px;
			height: 30px;
		}
		#message{
			width: 300px;
			height: 200px;
		}
		#contact{
			width: 300px;
			margin: 0 auto;
			margin-top: 40px;
		}

		#inner-form-content{
			margin-top: 0px;
			display: block;
		}
		#conatct-heading{
			margin-bottom: 0px;
			padding-bottom: 0px;
			text-align: center;
			font-family: 'BenchNine';
			color: green;
		}

		#submit{
			width: 300px;
			height: 30px;
			background: #337ab7;
			margin-top: 10px;	
		}
		#submit:hover{
			background: #337ab7;
			opacity: 0.6;
			box-shadow: 0px 0px 2px;
		}
		#error{
			width: 300px;
			color: red;
			margin: 0 auto;
		}


	</style>    
</head>
<body>
	<div class="content-body">
		<div id="profile-image">
			<img src="http://techarener.com/free-images/oriechinedu.jpg" height="200" width="200" id="image" alt="profile picture of Orie Chinedu">
			<p id="name">
				<h4>Orie Chinedu Emmanuel</h4>
			</p>
		</div>
		<div >
			<div  id="username"><a href="#"><span class="fa fa-slack"></span> @oriechinedu</a>|| <a href="https://github.com/oriechinedu" target="_blank"> <span class="fa fa-github"></span> @oriechinedu</a> || <a href="https://twitter.com/oriechinedu"><span class="fa fa-twitter"></span></a></div>
			<p id="bio">
				Orie Chinedu is a graduate of Computer Engineering from Nnamdi Azikiwe University.
				An intermediate web developer (Back-end) using PHP/Laravel with strong passion for tech 
				and an aspiring tech Community builder. Loves attending tech meetups and can play tennis at leisure time.
			</p>
		</div>
		<div class="link-to-stage-one">
			<a  href="https://github.com/oriechinedu/HotelsNG-Internship"><span class="fa fa-link"></span> Link to stage 1 task repo</a>
		</div>

		<!-- contact starts here -->
		<div id="contact">
			 <form action="../sendmail.php" method="get">
			  <p id="error"><?php $err = isset($errror)? $error:''; echo $err; ?></p>
				<h2 id="conatct-heading">Message Me</h2>
				<div id="inner-form-content">
					<input type="text" name="subject" class="subject" placeholder="Subject" required="">
					<input type="hidden" name="password"  value="<?php echo $password ?>" >
					<input type="hidden" name="to"  value="oriechinedu@gmail.com" >
					<textarea id="message" name="message" placeholder="type your message here" required=""></textarea>
					<input type="submit" id="submit" name="submit" value="Send">
				</div>
			</form>
		</div>
	</div>
	
</body>
</html>

