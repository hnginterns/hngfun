<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Victor's Profile</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<nav class="navbar">
			<div style="display: inline-block; padding-left: 8%;">
				<h2 style="color: #ffffff;">VICTOR-UGWUEZE</h2>
			</div>
			<div style="display: inline-block; margin-left: 20%;">
				<ul class="nav">
					<li class="nav-link"><a href="#">Home</a></li>
					<li class="nav-link"><a href="#about-me">About</a></li>
					<li class="nav-link"><a href="#contact">Contact</a></li>
				<!-- 	<li class="nav-link"><a href="#">Portfolio</a></li> -->
				</ul>
			</div>
		</nav>
		<div class="home-text">
			<h1>DEVELOPING WEB AND ANDROID APP<br> INTERN @HOTELS.NG</h1>
			<div class="home-btn">
				<a href="#about-me" class="btn btn-see">About Me</a> 
				<a href="#contact" class="btn btn-contact">Contact</a>
			</div>
		</div>
	</header>
	<div id="container">
		<div class="row-about" id="about-me">
		<h2 style="text-align: center;">About-Me</h2>
		<div class="about-img">
			<img style="border-radius: 50%;" src="https://res.cloudinary.com/dkkn9xzk7/image/upload/v1491267294/21310176_zmubd0.jpg" class="" alt="Victor's image">
		</div>
		<div  class="about-text">
			<p>Victor Ugwueze, is a self-taught web and android developer.</p>
			<p>Started coding in 2013 as embedded system programmer and have done some embedded systems using PIC microcontroller and 8051 Family</p><br><br>
			<p>I graduated from University of Nigeria with B.Eng(Electronic Engineering). I want to make a change in the world through technology.</p>
			<p>Currently, I am improving my programming skills in web and android app development as an intern at hotels.ng.</p>

		</div>
		
		</div>
<!-- 
		<div class="row-portfolio">
		<h2>About Me</h2>
		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante</p>
		</div> -->

		<div class="row-contact" id="contact">
			<h2 style="text-align: center;">GET IN TOUCH</h2>

			<div class="contact-links">
				<p>Slack: @gozman</p>
				<a style="text-decoration: none; color:  #e67e22;" href="https://github.com/Victorgozman" target="_blank">Link To stage 1 Task :github.com/Victorgozman</a>
			</div>

			<div class="contact-forms">
			<h3>Send Me a mail</h3>
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
					<input class="input" type="text" name="name"  placeholder="Name">
					<input class="input" type="text" name="email"  placeholder="email">
					<input class="input" type="text" name="subject"  placeholder="subject"><br>
					<textarea class="input" name="body"  placeholder="message"></textarea>
					<input type="submit" name="submit" id="submit">
				</form>
			</div>
			<div class="clear"></div>
		</div>
	</div>

	<div id="footer">
		<p>Copywright &copy;gozman</p>
	</div>
</body>
</html>