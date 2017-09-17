<?php 

$admin_email = 'xyluz@ymail.com';
$config = include('../config.php');
$dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
$con = new PDO($dsn, $config['username'], $config['pass']);

$exe = $con->query('SELECT * FROM password LIMIT 1');
$data = $exe->fetch();
$password = $data['password'];


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Debowale1</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Maven+Pro:400,500,700,900" rel="stylesheet">


<style>
		
	body {
	box-sizing: border-box;
	margin: 0;
	padding: 0;
	font-family: "Maven Pro", sans-serif;
	font-weight: 400;
	}
	.container {
		max-width: 1170px;
		margin:0 auto;
		text-align: center;
		-moz-box-sizing: border-box;
	    -o-box-sizing:border-box;
		box-sizing:	border-box;	
		box-shadow: 0 3px 3px rgba(50,50,93,0.1), 0 3px 3px rgba(0,0,0,0.7);
	}
	.nav-container {
		max-width: 1170px;
		margin:0 auto;
		text-align: center;
	}

	.clear {
		clear: both;
	}

	main {
		padding: 20px 10px;
	}

	h1, h2, h3, h4, h5, h6, ul {
		margin: 0;
		padding: 0;
	}

	.landing-page {
		background: linear-gradient(48.84deg, #81D76D -6.14%, #81D76D -6.13%, 
			#80D66E 10.79%, #67B788 53.16%, #458CAB 88.93%, #2D6EC4 111.64%);
		position: relative;

	}

	.repo-link {
		display: inline-block;
	    background: #C2FFC4;
	    padding: 3px 5px;
	    border-radius: 16px;
	    letter-spacing: 1px;
	}

	.repo-link a {
		text-decoration: none;
	    color: #5387CB;
	    font-size: 17px;
	}
	.icon {
		height: 20px;
	    margin-right: 10px;
	    position: relative;
	    top: 0;
	}


	.profile-content h4 a {
		background: #fff ;
		color: #5387CB;
		padding: 12px 
	}

	.profile-content__biography h2 {
		margin-top: 10px;
		color: #fff;
	}

	.profile-content__biography p {
		color: #fff;
		letter-spacing: 2px;
	}

	.profile-img {
		margin-bottom: 20px;
	}
	.profile-content__name,
	.profile-content__slack {
		color: hsl(0, 0%, 100%);
		color: #fff;
		margin-bottom: 15px;
	}

	.navbar {
		list-style: none;
		display: inline-block;
		margin: 0 auto;
	}

	.navbar__item {
		float: left;
	}

	.navbar__item__link {
		display: block;
		padding: 20px 15px;
		text-decoration: none;
		color: #fff;
		font-size: 18px;
	}
	.navbar__item__link:focus,
	.navbar__item__link:hover {
		transform: translateY(-1px);
	}
	.profile-content {
		width: 50%;
		float: left;
		border-right: 1px solid #C2FFC4;
		padding: 10px;
		text-align: center;
		box-sizing: border-box;
	}

	.contact-form {
		width: 50%;
		display: inline-block;
		text-align: center;
		box-sizing: border-box;
		margin-top: 30px;
	}

	.contact-form h3 {
		color: #fff;
		margin-bottom: 20px;
	}

	.img-responsive {
	    display: inline-block;
	    max-width: 100%;
	    height: auto;
	}

	input[type="text"], 
	input[type="email"] {
		width: 60%;
		margin-bottom: 15px;
		padding: 10px;
		border:none;
		background: inherit;
		border-bottom: 1px solid #C2FFC4;
		padding: 10px;
		color: #C2FFC4;
	}

	button {
		margin-top: 20px; 
		border: none;
		padding: 10px 10px;
		color: #5387CB;
		display: inline-block;
	    background: #C2FFC4;
	    padding: 10px 15px;
	    border-radius: 16px;
	    letter-spacing: 1px;
		cursor: pointer; 
		border:none;
	}

	button i.fa-send {
		margin-right: 10px;
	}

	textarea {
		width: 60%;
		border:none;
		background: inherit;
		border-bottom: 1px solid #C2FFC4;
		padding: 10px;
		color: #C2FFC4;
	}

	textarea:focus,
	input:focus {
		outline: none;
	}
	#contact-form-button:hover {
		transform: translateY(-1px);
	}

</style>
</head>
<body>
	<main class="landing-page">

		<section class="profile">

			<div class="container">

				<section class="profile-content">

						<div class="profile-img">
							<img src="http://i.imgur.com/Sj5rshV.jpg" class="img-responsive" alt="adeshina ibrahim">
						</div>

						<div class="profile-content__name">
							<h3>Adeshina Ibrahim</h3>
						</div>
						<div class="profile-content__slack">
							<h4><i class="fa fa-slack"></i>: @debowale1</h4>
						</div>

						<div class="repo-link">
							<a href="https://github.com/debowale1/hng_test_repo" target="_blank">
								<i class="fa fa-github icon"></i>
								<span class="">Stage One Task</span>
							</a>
							
						</div>

						<div class="profile-content__biography">
							<h2>My Biography</h2>
							<p>I'am Adeshina Ibrahim Adebowale, A web developer from Osun State, Nigeria. I graduated from the University of Ilorin where I studied Computer Science. I Currently reside in Kaduna where I run an ICT Venture with a colleague.</p>
						</div>
				</section>
				

		        <section class="contact-form">
		        	<h3>Contact Me!</h3>
		        	<form method="GET">

		        		<input type="hidden" id="password" name="password" value="<?= $password; ?>" >
		        	
		        		<div>
		        			<input type="text" id="name" name="name" placeholder="What Should We Call You">
		        		</div>
		        		<div>
		        			<input type="email" id="email" name="email" placeholder="Enter Your Email Address">
		        		</div>
		        		<div>
		        			<input type="text" id="subject" name="subject" placeholder="Subject">
		        		</div>
		        		<div>
		        			<textarea id="message" rows="10" cols="10" placeholder="Enter Your Message Here"></textarea>
		        		</div>

	        			<button id="contact-form-button" onclick="submitForm(event)"><i class="fa fa-send"></i>Send</button>
		        	</form>
		        </section>

			<div class="clear"></div>

			</div>
		</section>


		<div class="nav-container">
			<ul class="navbar">
	            <li class="navbar__item">
	                <a href="https://github.com/debowale1" target="_blank" class="navbar__item__link"><i class="fa fa-github"></i></a>
	            </li>
	            <li class="navbar__item">
	                <a href="mailto:debowale01@gmail.com" target="_blank" class="navbar__item__link"><i class="fa fa-envelope"></i></a>
	            </li>
	            <li class="navbar__item">
	                <a href="https://bitbucket.org/debowale1" target="_blank" class="navbar__item__link"><i class="fa fa-bitbucket"></i></a>
	            </li>
	        </ul>
		</div>

	</main>


<script type="text/javascript">
	
function submitForm(event){

	event.preventDefault();

	name = document.getElementById('name').value;
	subject = document.getElementById('subject').value;
	email = document.getElementById('email').value;
	message = document.getElementById('message').value;
	password 	= document.getElementById("password").value;

	body = "From: " + email + "( " + name + " )" + "\nMessage: \n " + message;
	site_url = location.protocol + '//' + location.host;
	site_url = site_url + "/sendmail.php?password=" + password + "&subject=" + subject + "&body=" + body +"&to=debowale01@gmail.com";

	window.location = site_url;

}

</script>
</body>
</html>