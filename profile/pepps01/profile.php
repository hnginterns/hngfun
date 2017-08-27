<!DOCTYPE html>
<html>
<head>
	<title><?php echo "Profile | Sunny Pepple";?></title>
</head>
<body>
		<div class="main-content">

			<div class="image-container">
				<img src="">
				<h3>Sunny Pepple</h3>
				<p>Slack Username : <span>@pepps01</span></p>
			</div>

			<div class="bio-container">
				<h3>Bio</h3>
				<p></p>
			</div>
			
			<div class="submit-container">
				<a href="">
					<button>#Stage 1 - Result</button>
				</a>
				<button>Contact Form</button>
			</div>
			
			<div  class="link-container">
				
			</div>

			<form action="contact.php" method="POST">
				<div class="form-group">
					<label for="subject">Subject</label>
					<input type="text" name="subject" >					
				</div>
				<div class="form-group">
					<label for="body">Body</label>	
					<textarea name="body" id="body"></textarea>
				</div>
				<div class="form-group">					
					<input type="submit" name="name" value="Submit">
				</div>

			</form>
		</div>
</body>
</html>