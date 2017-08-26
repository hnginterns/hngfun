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
			         <?php if(isset($error) && !empty($error)): ?>
				          <blockquote style="text-align: center;padding:3px;background: red; border-left:15px solid red;">
				            <ul>
				              <?php
				                foreach ($error as $key => $value) {
				                  echo "<li>$value</li>";
				                }
				              ?>
				            </ul>
			          	</blockquote>
			        <?php endif; ?>
        
			 </div>
			 <div class="modal-body">
			 	
				<form action="contact.php" method="post">
					<br>
					<div class="form-group">
						<label for="subject" style="float: left;">Subject: </label>
						<input type="text" name="subject" id="subject" placeholder="Subject" required>
					</div>
					<br>
					<div class="form-group">
						<label for="body" style="float: left;">Body: </label><br>
						<textarea name="body" id="body" placeholder="Your Message here..." wrap="virtual" rows="4" style="height:100px" required></textarea>
					</div>
					<br>

					<input type="hidden" id="password" name="password" value="<?php echo $password;?>">
					<input type="submit" name="submit" value="Send Message" id="submit">
				</form>
			 </div>
		</div>
	</div>


</body>
</html>