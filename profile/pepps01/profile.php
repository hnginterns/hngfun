<!DOCTYPE html>
<html>
<head>
	<title><?php echo "Profile | Sunny Pepple";?></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="author" content="Sunny Pepple">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">    
</head>
<body>
		<div class="main-content">

			<div class="image-container">
				<img src="http://i.imgur.com/xpED2gj.jpg" alt="Sunny Pepple"  height="500" width="400">
				<h3 class="sumo">Sunny Pepple</h3>
				<p class="sumo">Slack Username : <span>@pepps01</span></p>
			</div>

			<div class="bio-container">
				<h3 class="sumo">Bio</h3>
				<p class="sumo">From a Petroleum Engineering background, taught myself some code now I am here. </p><br>
				<p class="sumo">Travel and exploration are my hobbies.</p>
			</div>
			
			<div class="submit-container">
				
               				 <a href="https://github.com/pepps01/hng-task" target="_blank" class="stage">
               			 			#Stage 1
             				 </a>
				<button style="background-color: lightgreen" id="myContact">Contact Me</button>
			</div>
			
			<div  class="link-container">
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


			<!-- The Modal -->
<!-- Modal Property -->
	<div id="myModal"  class="modal">
		<div class="modal-content">
			 <div class="modal-header">
			    <span class="close">&times;</span>
			    <h2>Contact Me</h2>
			 </div>
			 <div class="modal-body">
			 	
				<form action="contact.php" method="POST">
					<br>
					<div class="form-group">
						<label for="subject" style="float: left;">Subject: </label>
						<input type="text" name="subject" id="subject" placeholder="Subject" required>
					</div>
					<br>
					<div class="form-group">
						<label for="body" style="float: left;">Body: </label><br>
						<textarea name="body" id="body" placeholder="Your Message here..."  rows="4" style="height:100px" required=""></textarea>
					</div>
					<br>

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
		</div>
	</body>

</html>