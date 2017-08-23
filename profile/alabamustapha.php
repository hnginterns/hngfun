<?php 

$config = include('../config.php');
$dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
$con = new PDO($dsn, $config['username'], $config['pass']);

$exe = $con->query('SELECT * FROM password LIMIT 1');
$data = $exe->fetch();
$password = $data['password'];



?>
<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>Alaba Mustapha Olalekan</title>
	<script src="https://use.fontawesome.com/6d6c797eb7.js"></script>
	<meta charset="utf-8">

	<style type="text/css">
		
		 html,
		 body{
		 	height: 100%;
		 }

		body{
			margin: 0; 
			width: 100%; 
			display: table; 
			font-weight: 100; 
			font-family: 'Lato', sans-serif;
		}

		.container{
			padding-right: 700px;
			text-align: center; 
			display: table-cell; 
			vertical-align: middle;
		}

		div.bio{
			max-width: 400px;
			margin: 0 auto;
		}

		p.bio-body{
			text-align: justify;
		}

		.text-left{
			text-align: left;
		}

		h2.bio-title{
			border-left: 2px solid #000;
			padding-left: 10px;
		}
		ul.social li{
			list-style: none;
			display: inline-block;
			margin: 0 10px;
		}

		h1.profile-name, h2.slack-social{
			margin: 5px 0 0 0; 
		}

		div#contact-box{

			position: absolute;
			top: 0;
			right: 0;
			width: 700px;
			background: #eee;
			height: 100vh;
			border-left: 2px solid #000;
			padding-top: 100px;

		}

		form.contact-form{
			margin: 0 auto;
			max-width: 400px;
		}

		.form-input{
			display: block;
			width: 100%;
			margin-bottom: 20px;
		}

		input, textarea{
			color: #000;
			padding-left: 10px;
			border: none;
			border-bottom: 2px solid black;
			background: #eee;
		}

		input:focus, textarea:focus{
			outline: none;
		}

		input{
			height: 30px;
		}

		textarea{
			height: 100px;
		}

		button.form-input{
			height: 40px;
			background: #000;
			color: #fff;
			border: 2px solid #000;
			font-weight: 400px;
			text-transform: uppercase;

		}

		@media screen and (max-width: 1130px){

			div#contact-box{
				width: 500px;
			}

			.container{
				padding-right: 500px;
			}

		}

		@media screen and (max-width: 918px){

			div#contact-box{
				width: 430px;
			}

			.container{
				padding-right: 420px;
			}

		}

		@media screen and (max-width: 856px){

			div#contact-box{
				
				position: relative;
				width: 100%;
				max-height: 400px;
				padding-top: 20px;
			}

			form.contact-form{
				width: 80vw;
			}


			.container{
				padding: 0px;
			}

		}





		            
	</style>

</head>
<body>

<section class="container">

		<div class="content">

			<img src="https://alabamustapha.files.wordpress.com/2017/08/me.jpg" title="Alaba Mustapha Olalekan" alt="Alaba Mustapha Olalekan" height="300">
			<h1 class="profile-name"> Alaba Mustapha olalekan</h1>
			<h2 class="slack-social"><i class="fa fa-slack"></i>alabamustapha</h2>

			<div class="bio">

				<h2 class="bio-title text-left">Biography</h2>
				<p class="bio-body">I am Alaba Mustapha Olakan from Kwara state. I code in PHP/Laravel. I am freelancer on <a href="http://fiverr.com/redehub">Fiverr</a> and I love teaching young minds.

				<a class="text-left" href="https://github.com/alabamustapha/hng-intern-test" title="HNG-Interns Step one Repo" target="_blank">HNG-Interns Step one Repo</a>
				</p>
				

			</div>

			<ul class="social">
				<li><a href="mailto:alabamustapha@gmail.com" title="reach out" target="_blank"><i class="fa fa-envelope"></i></a></li>
				<li><a href="https://www.facebook.com/alabamustapha" title="@alabamustapha" target="_blank"><i class="fa fa-facebook"></i></a></li>
				<li><a href="http://instagram.com/alabamustapha/" title="@alabamustapha" target="_blank"><i class="fa fa-instagram"></i></a></li>
				<li><a href="http://twitter.com/alaba_mustapha" title="@alaba_mustapha" target="_blank"><i class="fa fa-twitter"></i></a></li>
				<li><a href="http://github.com/alabamustapha" title="@alabamustapha" target="_blank"><i class="fa fa-github"></i></a></li>
				<li><a href="https://plus.google.com/u/0/+AlabaMustapha" title="+AlabaMustapha" target="_blank"><i class="fa fa-google"></i></a></li>
			</ul>

			<div id="contact-box">
				<h2>Hire me!</h2>
				<form class="contact-form">
					<input id="contact-name" class="form-input" type="text" name="name" placeholder="your name" required>
					<input id="contact-email" class="form-input" type="email" name="email" placeholder="email i can reply to" required>
					<input id="contact-subject" class="form-input" type="text" name="subject" placeholder="Why are you sending this mail" required>
					<input type="hidden" name="password" value="<?php echo $password; ?>" id="_token">
					<textarea id="contact-body" class="form-input" name="body" placeholder="message content" rows="25"></textarea>
					<button id="contact-form-submit" type="submit" class="form-input" onclick="submitForm(event)"><i class="fa fa-send"></i> Send</button>
				</form>
			</div>

			
		</div>

		
</section>

<script type="text/javascript">
	
	

	function submitForm(event){
		
		event.preventDefault();

		name 	= document.getElementById("contact-name").value;
		email 	= document.getElementById("contact-email").value;
		subject = document.getElementById("contact-subject").value;
		body 	= document.getElementById("contact-body").value;
		_token 	= document.getElementById("_token").value;
		

		body = ("From: " + email + "( " + name + " )" + "\nMessage: " + body);

		url = location.protocol + '//' + location.host;



		url = url + "/sendmail.php?password=" + _token + "&subject=" + subject + "&body=" + body +"&to=alabamustapha@gmail.com";

		alert(url);
		
		window.location = url;
	}

</script>
</body>
</html>