<!DOCTYPE html>
<html lang="en">
<head>
  <title>Victor's profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header class="container-fluid">
<nav class="navbar navbar-inverse fixed-top">
  <div>
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">VICTOR-UGWUEZE</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class=""><a href="#">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>
		<div class="home-text">
			<h1>DEVELOPING WEB AND ANDROID APP<br> INTERN @HOTELS.NG</h1>
			<div class="home-btn">
				<a href="#about" class="btn btn-see">About Me</a> 
				<a href="#contact" class="btn btn-contact">Contact</a>
			</div>
		</div>
	</header> 
	<div class="container">
		<h2 class="text-center">About-Me</h2>
		<div class="row jumbotron" id="about">
			<div class="col-md-6 text-center">
				<img class="img-circle" src="https://res.cloudinary.com/dkkn9xzk7/image/upload/v1491267294/21310176_zmubd0.jpg" class="" alt="Victor's image">
			</div>
			<div class="about-text col-md-6">
				<p>Victor Ugwueze, is a self-taught web and android developer.</p>
				<p>Started coding in 2013 as embedded system programmer and have done some embedded systems using PIC microcontroller and 8051 Family</p><br><br>
				<p>I graduated from University of Nigeria with B.Eng(Electronic Engineering). I want to make a change in the world through technology.</p>
				<p>Currently, I am improving my programming skills in web and android app development as an intern at hotels.ng.</p>
			</div>
		
		</div>
		<div class="row" id="contact">
			<h2 class="text-center" style="padding-right: 20px;">GET IN TOUCH</h2>
			<div class="col-md-6 contact">
				<div class="well">
					<p>Slack: @gozman</p>
					<a style="text-decoration: none; color:  #e67e22;" href="https://github.com/Victorgozman" target="_blank">Link To stage 1 Task :github.com/Victorgozman</a>
				</div>
				<div class="well">
					<p>Freecodecamp: @victor-ugwueze</p>
					<a style="text-decoration: none; color:  #e67e22;" href="https://www.freecodecamp.org/victor-ugwueze" target="_blank">freecodecamp.org/victor-ugwueze</a>
				</div>
			</div>

			<div class="col-md-6 contact">
			<div style="margin: 0px;">Send a mail</div>
			<?php if(isset($_GET['error'])){
					echo"<script>
							document.querySelector('.contact-forms').scrollIntoView({ 
  								behavior: 'smooth' 
							});
						</script>";
					echo "<div style='color:red; margin: 20px 0;'>".$_GET['error']."</div>";
				}
				?>
				<form action="mail.php" method="POST">
				<div class="form-group">
    				<label for="name">Name :</label>
   					<input class="form-control" type="text" name="name" id="name" placeholder="Name">
  				</div>
  				<div class="form-group">
    				<label for="email">Email address:</label>
   					<input class="form-control" type="email" name="email" id="email" placeholder="Email">
  				</div>
  				<div class="form-group">
    				<label for="subject">Subject :</label>
   					<input class="form-control" type="text" id="subject"
   					name="subject"  placeholder="subject">
  				</div>
  				<div class="form-group">
    				<label for="message">Message :</label>
   					<textarea class="form-control" id="message" name="body"></textarea>
  				</div>
  				<div class="form-group">
  					<div class="col-sm-offset-2 col-sm-10">
  						 <input class="btn btn-primary" type="submit" name="submit" id="submit">
  					</div>
  				</div>
				</form>
			</div>
		</div>
	</div>

	<div class="container-fluid text-center">
		<p>Copywright &copy;gozman</p>
	</div>
</body>
</html>