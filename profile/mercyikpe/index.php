<?php
 if($_SERVER['REQUEST_METHOD'] == 'POST') {
   $subject = $_POST['subject'];
   $to  = $_POST['to'];
   $body = $_POST['message'];
   $config = include('../../config.php');
   $server = $config['host'];
   $con = mysqli_connect($server,$config['username'],$config['pass'],$config['dbname']);
   if (!$con) {
     die("Connection failed: ".mysqli_connect_error());
 }
   $sql = 'SELECT * FROM password LIMIT 1';
   if($result = mysqli_query($con, $sql)) {
     $data = mysqli_fetch_array($result, MYSQLI_ASSOC);
     $password = $data['password'];
   } else {
       $password = "#";
   }
   $uri = "/sendmail.php?to=$to&body=$body&subject=$subject&password=$password";
   header("location: $uri");
 }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="mercyikpe.css">
	<title>MercyIkpe's profile</title>
</head>
<body>

<div class="container">

	 I am <h2>Mercy Michael Ikpe </h2>
	<p align="center" style="font-size:20px">HNGfun Stage 2 Project</p>
   
	<div class="top"> 
    	
        	<div id="biography">
				<p>	I am from Nsit Atai LGA of Akwa Ibom State. 
				I have a diploma in Computer Science from Heritage Polytechnic, 
				Ikot Udota, Eket, Akwa Ibom State.
				I am based in Uyo. 
				
				</br>Coding is my hobby and so i had self taught HTML, CSS and PHP basics. 
				I am here to learn, interact and improve my coding skills. 
				By the end of this course, i shall be able to create andriod apps. 
				
				<br>
				</br>Thank you <b>Mark Essien</b> and your team for this platfrom. </br>You do great.
				My best way of telling you thank you is to also give back to my community. I so promise to give back.
				Thank you.
				</p>	
			</div>
        
			<div id="img">
				<img src="http://res.cloudinary.com/mercyikpe/image/upload/a_hflip/v1503966085/mercyikpe_x6pkwm.jpg" 
				width="150px" height="250px" alt="mercyikpe's picture">
			</div>
        
        <div id="clear"> </div>
        
		
			<div id="button">
				<button type="submit"> <a href ="https://github.com/mercyikpe/hello-world">View my Stage 1 Project </a></button>
				<button type="submit"> <a href ="https://drive.google.com/file/d/0B27SkNfWCsAKd3FvSzVsSlBxTHM/view?usp=sharing">Download my android app </a></button>
</div>
			
			
    </div>

    <h3>Send a message</h3>
                            <div class="form">
                       <form action=" " method="POST">
                           <!--<input type="hidden" name="password" class="form-input" value="<?php echo $password; ?>">-->
                
                           <input type="hidden" name="to" value="ikpemercy1@gmail.com">
                
                           <input type="text" name="subject" placeholder="Subject " class="form-input" required="text"><p>
                           <!--<input type="email" name="to" placeholder="Email" class="form-input" required="text">-->
                
                           <textarea name="message" placeholder="Message" class="form-input form-textarea" required=""></textarea><p>
                           <input type="submit" name="submit" value="SEND" class="form-submit" required="">
                            </form>
</div>
      
	<div class="main">
	
		<fieldset>
		
			<legend>let's hangout on: </legend>
				<div id="slack"><a href="https://web.facebook.com/mercy.ikpe.79"><img src="http://res.cloudinary.com/mercyikpe/image/upload/v1504169560/slack.png" width="30px" height="30px" alt="slack"></a></div>
				<div id="gmail"><a href="ikpemercy1@gmail.com"><img src="http://res.cloudinary.com/mercyikpe/image/upload/v1504169560/gmail.png" width="30px" height="30px" alt="gmail"></a></div>
				<div id="twitter"><a href="https://twitter.com/ikpemercy1"><img src="http://res.cloudinary.com/mercyikpe/image/upload/v1504169560/twitter.png" width="30px" height="30px" alt="twitter"></a></div>
				<div id="facebook"><a href="https://web.facebook.com/mercy.ikpe.79"><img src="http://res.cloudinary.com/mercyikpe/image/upload/v1504169559/facebook.jpg" width="30px" height="30px" alt="facebook"> </a></div>
				<div id="twitter"><a href="https://www.instagram.com/mercyikpe/"><img src="http://res.cloudinary.com/mercyikpe/image/upload/v1504169560/instagram.jpg" width="30px" height="30px" alt="instagram"> </a></div>
			
		</fieldset>
				
	<div id="clear1"> </div>

	
    </div>
    
    
    <footer> 
			<div id="footer"> <center>Thank you for visiting my site.<br>
			for more information: kindly call me on 0806 621 2037</center></div>
	</footer>

</div>

</body>
</html>






	
