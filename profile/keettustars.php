<?php 
	//get field value
    $error = '';
	connectToDB();

	function connectToDB(){
		if(empty($error)) {
      		$config = include __DIR__ . "/../config.php";      		
      		$dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
      		$username = $config['username'];
      		$pass = $config['pass'];
      		getClientToken($dsn, $username,$pass);
      		      		
   			
      	}
	}


	function getClientToken($dsn, $username,$pass){

      $con = new PDO($dsn, $username, $pass);
      $exe = $con->query('SELECT * FROM password LIMIT 1');
      $data = $exe->fetch();
      $password = $data['password'];
      sendMail($password);
	         
	}

    
	function sendMail($password){
		
		if(isset($_POST['subject'],$_POST['message'])){
		$subject = $_POST['subject'];
		$body = $_POST['message'] ;
		$to = 'keettustars@gmail.com';
    	$uri = "/../sendmail.php?to=$to&body=$body&subject=$subject&password=$password";
    	header("location: $uri");
		}else{
		 $error = 'All fields must be filled';	
		}
    	 
    	  
	}

	//just a dummy validation
	
?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<!-- Optimising for mobile screens-->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title></title>
	
	<style type="text/css">
			*         {
	 padding: 0px;
	 margin: 0px;
}

		.bg-1   {
	    background-color: #333 !important;
}

		.bg-2   {
	    background-color: #fff !important;

}

		.color-1 {
	    color: #fff;
}


		.header   {
	     background-image: url(https://preview.ibb.co/mzfx45/ayo.jpg);
	     height: 300px;
	     background-repeat: no-repeat;
	     background-position: center;
	     background-size: cover;
	     -webkit-background-size: cover;
	     -moz-background-size: cover;
	     font-family: arial;	     
}



		@media screen and (min-width: 500px){

			.container    {
					 width: 500px;
					 margin:-40px auto;
					 padding: 5px;
					 box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.16),
					 0px 2px 5px 0px rgba(0,0,0,0.12);

		}

		.img-wrapper {
			            width:160px;
			            margin:10px auto;

		}

		.tagline        {
		width:400px;
		margin:0px auto;
	}

}	
	
		.tagline        {
		
		text-align: center;
	    font-size: 40px;
	    padding-top: 50px;
	    text-shadow: 0px 5px 5px #333;
	}

	.circle    {
				border-radius: 50%;
				-webkit-border-radius:50%;
				-moz-border-radius:50%;
}

	.contact-container {
		padding: 20px 20%;
	}

	.profile-fullname,.slack-username{
		width:100%;
		height: 30px;
		background-color: #888;
		text-align: center;
		margin-bottom: 5px;
		padding-top: 10px;
	}

	.profile-bio    {
		padding: 20px;
	}

	

	.contact-container input, .contact-container textarea,.contact-container button{
		width: 100%;
		height: 40px;
		border: 1px solid #777;
	
	}

	.contact-container textarea {
		height: 150px !important;
	}

	.contact-container  {
        
         color: #333;
         

	}

	.send           {
		 background-color: #368;
		 color:#fff;
		 font-size: 18px;
		 border: 1px solid #fff;
		 -webkit-border-radius:10px;
		 font-family: sans-serif;
	}
	</style>
</head>
<body>

		<div class="header bg-1 color-1">
			<h1 class="tagline">Request for software development.</h1>
		</div>
            <?php if(isset($error)){echo $error;}?>
		<div class="container bg-2">
			
				<div class="img-wrapper">
						<img src="https://avatars3.githubusercontent.com/u/23102198?v=4&u=bf0e504d499bf7ca0fcee99ee812501a49777a1f&s=400" class="profile-img circle">
				</div>

				<div class="profile-fullname color-1">
						Full Name: Ogundiran Ayobami
				</div>

				<div class="slack-username color-1">
						Slack Username: @keettustars
				</div>
						
					

				<p class="profile-bio">
						I graduated from the department of history, Obafemi Awolowo University and currently serving in Kwara state
						under NYSC. I'm in love with software development as I
						have learnt Native javaScript, react/react native, jQuery, php/laravel and python( basic ) despite my art background. I co-organised bizIntel where Ibadan and Ife business school, P&G, PWC and many others were represented. I co-founder Wetech. Above all, I am learner for life. 
				</p>


				<div class="contact-container">
					<p class="muted">* means a required field</p>
					<br>
					<form method="POST" action="keettustars.php" >
						<div class="field">
							<input type="text" placeholder="Subject *" name="subject" autocomplete="off" required>
						</div>

						<br>
						<div class="field">
							<textarea placeholder="Message *" name="message" required></textarea>
						</div>

						<br>
						<div class="field">
							<input type="submit" class="color-1 send" value="Send">
						</div>
					</form>
				</div>

				<a href="https://github.com/hnginterns/hngfun/commit/ac3bccc7d86592f20e40f21aaeee73c4e2262f0c">link to my stage 1</a>
		</div>

		 
</body>
</html>