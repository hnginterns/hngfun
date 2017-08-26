<?php

	  if($_SERVER['REQUEST_METHOD'] == 'POST') {
		    $error = [];
		    $subject = $_POST['subject'];
		    $to  = 'slpepple01@gmail.com';
		    $body = $_POST['body'];
		    
		    if($body == '' || $body == ' ') {
		      $error[] = 'Message cannot be empty.';
		    }
		   
		    if($subject == '' || $subject == ' ') {
		      $error[] = 'Subject cannot be empty.';
		    }

	    if(empty($error)) {

	    	$config = include "../../config.php";
		
			$conn = new PDO('mysql:host='.$config['host'].';dbname='.$config['dbname'], $config['username'], $config['pass']);
			
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


			$exe = $conn->query('SELECT * FROM password LIMIT 1');
		
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

	<title>Profile | Sunny Pepple</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="author" content="Sunny Pepple">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">    
</head>
<body>
	<div class="main-content">
		<img src="http://i.imgur.com/xpED2gj.jpg" height="300px">
		<div class="content-container">
			<div class="profile-contact">				
				<h3 class="profile-name">Sunny Pepple</h3>
				<p>Slack Username: @pepps01</p>
			</div>

			<div class="bio-container">
				<h3>Bio</h3>
				<p>From a Petroleum Engineering background, taught myself some code now I am here. Travel and exploration are my hobbies.</p>
			</div>

			<div class="assignment-container"> <!--Centralize assignment-->

				 <a href="https://github.com/pepps01/hng-task" target="_blank">
               			<button id="stage"> #Stage 1</button>
             	 </a>
				<!-- trigger button -->
				<button id="myContact">Contact Me</button>
			</div>

			 <div class="link-container">
	            <ul>
	                <li>
	                  <a href="https://github.com/pepps01" target="_blank">
	                      <i class="fa fa-github fa-2x space"></i>
	                  </a>

	                </li>
	                <li>
	                     <a href="https://hnginterns.slack.com/messages/@pepps01/convo/C3QLSPBNK-1503058750.000001/" target="_blank">
	                        <i class="fa fa-slack fa-2x space" aria-hidden="true"></i>
	                     </a>
	                </li>
	                <li>

	                    <a href="https://plus.google.com/u/0/116139093389935357491" target="_blank">
	                      <i class="fa fa-google-plus fa-2x space"></i>
	                    </a>
	                </li>

	                  <li>
	                    <a href="mailto:slpepple01@gmail.com" title="Message me?" target="_blank">
	                      <i class="fa fa-envelope fa-2x space"></i>
	                    </a>
	                  </li>
	            </ul>
		</div>
	</div>

	<!-- Modal Property -->
	<div id="myModal"  class="modal">
		<div class="modal-content">
			 <div class="modal-header">
			    <span class="close">&times;</span>
			    <h2>Contact Me</h2>
			 </div>
			 <div class="modal-body">
			 	
				<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
					<br>
					<div class="form-group">
						<label for="subject" style="float: left;">Subject: </label>
						<input type="text" name="subject" id="subject" placeholder="Subject">
					</div>
					<br>
					<div class="form-group">
						<label for="body" style="float: left;">Body: </label><br>
						<textarea name="body" id="body" placeholder="Your Message here..." wrap="virtual" rows="4" style="height:100px" required=""></textarea>
					</div>
					<br>

					<input type="hidden" id="password" name="password" value="<?php echo $password;?>">
					<input type="submit" name="submit" value="Send Message" id="submit">
				</form>
			 </div>
		</div>
	</div>



	<script type="text/javascript">
			// Get the modal
			var modal = document.getElementById('myModal');

			var btn = document.getElementById("myContact");

			var span = document.getElementsByClassName("close")[0];

			// When the user clicks on the button, open the modal 
			btn.onclick = function() {
			    modal.style.display = "block";
			}

			// When the user clicks on <span> (x), close the modal
			span.onclick = function() {
			    modal.style.display = "none";
			}

			// When the user clicks anywhere outside of the modal, close it
			window.onclick = function(event) {
			    if (event.target == modal) {
			        modal.style.display = "none";
			    }
			}

	</script>
</body>
</html>