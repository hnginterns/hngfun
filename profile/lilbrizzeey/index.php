<?php
	$servername = "localhost";
	$username = "intern";
	$password = "@hng.intern1";
	$dbname = "hng";
	
	$conn = new mysqli($servername, $username, $password, $dbname);
    mysqli_select_db($conn, 'password');
    $query = "SELECT * FROM password LIMIT 1";
    $result = mysqli_query($conn, $query);
		
 ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chukwuma David</title>
	<link href="https://fonts.googleapis.com/css?family=Amatic+SC:700|Coming+Soon|Dosis|Inconsolata|Josefin+Sans|Julius+Sans+One|Monoton|Raleway|Special+Elite" rel="stylesheet">
    
		
	<style>
		p{
			font-family: 'Raleway';
			color: #000;
			font-size: 20px;
		}
		
		h2{
			font-family: 'Julius Sans One', sans-serif;
			letter-spacing: 5px;
			color: #000;
		}
		
		body{
			background-color: #FEEED4;
			color: #fefefe;
		}
		
		img {
			display: inline-block;
			vertical-align: middle;
			padding-bottom: 60px;
			height: 173px;
			width: 230px;
			}
		.icon{
			width: 24px;
			height: 24px;
			margin-top: 57px;
			display: ruby-text;
		}
		.picture{
			transform: rotate(270deg);
		}
			
		.container{
			margin-top: 100px;
			margin-right: auto;
			margin-left: auto;
			width: 75%;
			background-image: url(http://res.cloudinary.com/lilbrizzeey/image/upload/v1504127981/background_tneirf.jpg);
		}
		
		.section1{
			width: 100%;
			margin-top: 0;
			display: inline-block;
			padding-top: 0;
		}
		
		.section2{
			width: 100%;
			margin-right: 0;
			display: inline-block;
		}
		
		.card{
			width: 38.2%;
			margin-top: 0;
			margin-bottom: 1rem;
			border: none;
			border-radius: 0;
			background: transparent;
			box-shadow: none;
			overflow: hidden;
			color: #0a0a0a;
		}
		
		.card-section {
			padding: 1rem; 
			}
				
		a{
			text-decoration: underline;
			color: #0a0a0a;
		}
		.form{
		width:560px;
		height:auto;
		max-width:100%;
		margin:0 auto;
		float:left;
		background-color: none;
		background: transparent;
		}
		input[type=text]{
			width: 100%;
			padding: 12px 6px;
			padding-bottom: 3px;
			margin: 8px 0;
			display: inline-block;
			border-bottom: 2px solid #fefefe;
			box-sizing: border-box;
			color: black;
			background-color: none;
			border-top: none;
			border-right: none;
			border-left: none;
			box-shadow: none;
			background: transparent;
		}
		
		input[type=text]:focus{
			border-top: none;
			border-right: none;
			border-left: none;
			box-shadow: none;
			background-color: white;
		}
		
		input[type=text]::-webkit-input-placeholder {
            color: #000;
			opacity: 1;
			font-family: 'Raleway';
		}
		
		input[type=submit] {
			width: 100%;
			background: none;
			color: #000;
			font-family: 'Julius Sans One', sans-serif;;
			font-size: 25px;
			letter-spacing: 5px;
			padding: 14px 20px;
			margin: 12px 0;
			border: 2px solid #fefefe;
			border-radius: 2px;
			cursor: pointer;
		}
		
		textarea{
			width: 100%;
			resize: none;
			height: 100px;
			background-color: none;
			color: black;
			margin: 10px 0;
			background: transparent;
		}
		
		textarea:focus{
			background-color: white;
		}
		
		textarea::-webkit-input-placeholder {
            color: #000;
			opacity: 1;
			font-family: 'Raleway';
		}
		
		#footer{
			margin-top: 10px;
			text-align: center;
			font-family: 'Julius Sans One', sans-serif;
		}
	</style>
  </head>
  <body>

    <div class="container">
      
		<div class="section1">
		  <div class = "card">
		    <div class="card-section">
			  <img class="picture" src = "http://res.cloudinary.com/lilbrizzeey/image/upload/v1504127986/me_epgw68.jpg" alt = "profile picture">
			</div>
			<div class="card-section">
				<h2>Chukwuma David</h2>
			   <p><a href="https://hnginterns.slack.com/team/lilbrizzeey" target="blank">Slack:lilbrizzeey</a></p>
			   <p>Email:lilbrizzeey97@gmail.com</p>
			</div>
		  </div>
		</div>
	    <div class="section2">
		  <h2>Biography</h2>
		  <p> A 19 year old student of Mechanical Engineering  in the University of Nigeria Nsukka. I started programming since May 2017
				and since then I would say programming has really been an interesting experience for me
				and I'm glad with the knowledge I've been gaining. I look forward to becoming better and
				I hope one day to be a guru in the coding world.</p><br>
			<p>I work with HTML, JavaScript, CSS and PHP. I'm still open to learning and I hope HNG can help me broaden my horizons.</p><br>
		  <p style = "text-align: right"><a href = "https://github.com/lilbrizzeey/myrepo.git" target="blank">Stage 1</a></p>
		   <p style = "text-align: right" ><a href="https://drive.google.com/open?id=0B_PwjTbh_IMrQ3gtdHFUcFluWWM" target="blank">Android App<img class="icon" src="http://res.cloudinary.com/lilbrizzeey/image/upload/v1504352144/icon8_mxu5yj.png" title="Download" width="24" height="24"></a></p>
		  <h2>Send Me a Message</h2>
		  <form class="form" method = "GET" action = "/sendmail.php">
			<input type = "text" name = "subject" placeholder = "Your name" required>
			<input type = "text" name = "your email" placeholder = "Your email">
			<input type = "hidden" name = "to" value = "lilbrizzeey97@gmail.com">
			<input type = "hidden" name = "password" value = "<?php while($row = mysqli_fetch_assoc($result)){echo $row['password'];} ?>">
			<textarea name = "body" placeholder = "Your message here" required></textarea>
			<input type="submit" name = "submit" value="send">
		  </form>
	    </div>
	  
	</div>
	
	<div>
		<p id="footer">Chukwuma David &copy; 2017</p>
	</div>
  </body>
</html>