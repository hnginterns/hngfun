	<?php 

		$conn = mysqli_connect("localhost","intern", "@hng.intern1", "hng");   

		$query = mysqli_query($conn, "SELECT * FROM password LIMIT 1");
		$qdata = mysqli_fetch_assoc($query);
		$password = $qdata['password'];
		$to = 'iamseyiajayi@gmail.com';
		$subject = mysqli_real_escape_string($conn, $_POST['subject']);
		$body = mysqli_real_escape_string($conn, $_POST['body']);
		if (isset($_POST['send'])) {
			if ($body == '' || $subject == '') {
			?>
			<script>
				alert('You cant leave the subject and body of the message empty');
			</script>
			<?php
			}else{
		      	$success_page = "/sendmail.php?password=$password&subject=$subject&body=$body&to=$to";
		      	header("location: $success_page");
			}
		}
 	?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"> 
	<title>
		Ajayi Oluwaseyi - Hotels.ng Internship
	</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
</head>
<body>
<div id="overlay" >
	<div class="formwrapper">
	<div class="overlaywrapper">
		<h4 class="softtext">
			Message Seyi
		</h4>
		<form action="" method="POST">
		<input type="text" class="input_text" placeholder="Subject" name="subject">
		<br>
		<br>
		<textarea class="input_text msgbox" placeholder="Your Message" name="body"></textarea>
		<br>
		<br>
		<input type="submit" class="submitbtn" name="send" value="Send Message">
		<button class="cancelbtn" onclick="off()">Cancel <i class="fa fa-close"></i></button>
		</form>
		<br>
		<br>
	</div>
	</div>
</div>
<div class="wrapper">
	<h3 class="quote">
	<em>
	<span>
		Everyone should know how to program a compter because it teaches you how to think - Steve Jobs
	</span>
	</em>
	</h3>
	<br>
		<img src="seyi.jpg" class="profileimg" alt="Loading Image...">
		<h3>
		<span class="namewrapper">
			Ajayi Oluwaseyi
		</span>
		&nbsp;
		<span class="msgwrapper" onclick="on()">
			<i class="fa fa-envelope"></i> Message
		</span>
		</h3>
		<h4 style="margin-top: 20px">
		<img src="slack.png" class="logo" alt="Loading Image...">
		<span class="username">
		iamseyiajayi
		</span>
		</h4>
		<br>
		<br>
		<div class="biowrapper">
		<p>
			My name is Ajayi Oluwaseyi, I do <span class="link">Design</span> and <span class="link">Programming</span> 
		</p>
		<p>
			Currently a 300 Level student of Olabisi Onabanjo University, Ago-iwoye, Ogun state, studying Computer Science.
		</p>
		<p>
			I love playing the guitar, swimming, and going to the cinemas. And of course, I love good life :)
		</p>
		</div>
		<h4>
		<span class="link">
			<a href="https://github.com/seyishemba/hng/tree/master/Stage%20One" target="_blank" class="underline">#Stage1 repo</a>
		</span>
		</h4>
</div>

<script>
function on() {
    document.getElementById("overlay").style.display = "block";
}

function off() {
    document.getElementById("overlay").style.display = "none";
}
</script>
</body>
</html>
