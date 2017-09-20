<?php
   if($_SERVER['REQUEST_METHOD'] == 'POST') {

      $error = [];
      
      //Get form-data
      $subject = $_POST['subject'];    
      $to  = 'wizitendo10@gmail.com';    
      $body = $_POST['body'];
    
      if($body == '' || $body == ' ') {
        $error[] = 'Message cannot be empty.';
      }
    
      if($subject == '' || $subject == ' ') {
        $error[] = 'Subject cannot be empty.';
      }
    
      if(empty($error)) {
        $config = include(dirname(dirname(dirname(__FILE__))).'/config.php');
      
        $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
      
        $con = new PDO($dsn, $config['username'], $config['pass']);
      
        $exe = $con->query('SELECT * FROM password LIMIT 1');
      
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
	<title><?php echo "Profile | Sunny Pepple";?></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="author" content="Sunny Pepple">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">    

	<style type="text/css">
		body{
    width:auto;
    height:auto;
    text-align:center;
    font-family: 'Lato', cursive, Arial, Helvetica, sans-serif;
}
h3{
    color:#20bcd5;
    text-align:center;
    padding: 1% 0.5%;
    margin:auto;
    position: relative;

}
p span{
    font-weight: bolder;
}
.sumo{
    margin-top: 0px;
    padding: 0px 0px 0px;
}
img{
    position: relative;

}
ul li {
    list-style-type: none;
    display: inline;
}

li>a{
    margin-right: 25px;
}
.stage{
    text-decoration: none;
    border: 1px solid #20bcd5;
    background-color: #20bcd5;
    padding: 12px 40px 12px 40px;
    border-radius: 4px;
    margin-left: 12px; 
    margin-right: 12px;
    color: white;
    font-family: 'Lato','sans-serif';
    font-weight: bolder;

}
a>i.space{
    color: #00aeff;
}
a>i.space:link
{
    color: #00aeff; 
}
a>i.space:visited{
    color: green;
}

a>i.space:hover{
    color: grey;
}

button{
    background-color:#00aeff;
    color: white;
    font-family: 'Lato',serif; 
    font-weight: bolder;
    padding: 15px 80px;
    border:none;
    border-radius: 5px;
}

input[type=text], textarea{
    width:100%;
    padding:12px;
    border:1px solid #ccc;
    border-radius:4px;
    box-sizing:border-box;
    margin-top:4px;
    margin-bottom:16px;
    resize:vertical;
}

input[type=submit]{
    background-color: #00aeff;
    color:white;
    padding: 10px 15px;
    border:none;
    border-radius:4px;
    cursor:pointer;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 15% auto; /* 15% from the top and centered */
    padding: 20px;
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}
.modal-header {
    padding: 2px 16px;
    background-color:#00aeff ;
    color: white;
}

/* Modal Body */
.modal-body {padding: 2px 16px;}


	</style>
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
				<a href="https://drive.google.com/file/d/0B09bJZyqJKyAa09GVTlxb2ladXc/view?usp=sharing" target="_blank" class="stage">Android Contact</a>
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