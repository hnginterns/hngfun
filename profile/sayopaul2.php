<?php

if (isset($_POST['send-mail']) ){
	
	$postedData=filter_input_array(INPUT_POST,['subject'=>FILTER_SANITIZE_STRING,'body'=>FILTER_SANITIZE_STRING]);
	$to="yobizzi416@gmail.com";
	$error=[];

	foreach($postedData as $key=>$value){
		if(empty($value) || ctype_space($value)){
			$error[] .="You submitted an empty ".$key." field";
			
		}
		
	}
	if (empty($error)){

		$config = include(dirname(dirname(__FILE__)).'/config.php');
		$dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
		$con = new PDO($dsn, $config['username'], $config['pass']);

		$exe = $con->query('SELECT * FROM password LIMIT 1');
		$data = $exe->fetch();
		$password = $data['password'];
		$uri = "/sendmail.php?to=".$to."&body=".trim($postedData['body'])."&subject=".trim($postedData['subject'])."&password=$password";
		
		header("location: $uri");
	}
		
		


}



 ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> Ademola Abisayo Paul (sayopaul2) </title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://acemovieshop.com/assets/css/sayopaul.css">
        <link rel="icon" href="https://res.cloudinary.com/dsreqkgmh/image/upload/c_scale,w_50/v1503148590/sayopaul_nguuja.jpg">
        <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
        <script src="https://use.fontawesome.com/814eda4630.js"></script>

	</head>

	<body>

		<section id='container'>

			<section id='left-container'>
				<center>
					<section id='img-container'>
						
						<img class='responsive-image curved thumbnail' src='https://res.cloudinary.com/dsreqkgmh/image/upload/v1503148590/sayopaul_nguuja.jpg' height='500px' width='500px'>
						
					</section>

					<hr>

					<h1 id='name' class='grey-text'> Ademola Abisayo Paul </h1> 
					
					
						<i class="fa fa-2x fa-slack orange-text" aria-hidden="true"></i><span id='slack-user' class='grey-text' > sayopaul2 </span>
				 	
				</center>

			</section>
			<section id='right-container'>
				<article id='bio'>
					<h2 id='intro' class='orange-text'> Hi ! I'm Paul , a 200 Level engineering student in the Federal University of Agriculture, Abeokuta . </h2>
					<br>
					<p class='grey-text'>
						 I have always had a passion for computers since the first day my dad brought home an IBM laptop back in 2005 . The first website I visited was marvel.com and I was so amazed by it . Never knew that some day I would be bulding websites too :D . I code in HTML, CSS and PHP with a lil bit of JS ( sad, I know :'(  ) . 

						<br> 
						

						Over the <strong> little </strong> time I've been coding , I have been able to build a couple of sites which are live
						<ul>
							<li> <a target='_blank' href="https://acemovieshop.com"> AceMovieShop </a> </li>
							<li> <a target='_blank' href="https://funaab.kilenra.com"> Kilenra </a> </li>
							

						</ul>
						<br>

					</p>
					<p class='grey-text'>
						When I am not with my laptop , you can find me at church, reading a book or just chilling with my friends . I also smile a lot :) :) :) . If you would like to talk to me about anything , use the form below to shoot me an email . I'll be waiting
					</p>
					
					
							<?php 
						if(!empty($error)){
							$output= "<section class='alert danger'>
											<p> Mail not sent . The following errors occured </p>
											<ul>	";
							foreach($error as $val){
								$output .= "	<li>".$val."</li>";
							}
							$output.= "		</ul>
					
									</section>";
							echo $output;
						}
					?>

						
					<form id='contact-form' action='#' method='POST'>
                        
                            <label class='control-label grey-text' for='subject'> Subject </label>
						
                            <input type='text' name='subject' class='form-control' id='subject' placeholder='email subject' >
                        
                        
                            <label class='control-label grey-text' for='body'> Message Body </label>
						
                            <textarea cols='40' rows='5'  id='body' name='body' placeholder='message body'  required> </textarea>
							<br>
							<input type="submit" value="Shoot !" name='send-mail' required>
                    
                        
                        
						
					</form>
					
					<br>

					<i  class="fa fa-3x fa-github orange-text" aria-hidden="true"></i> <a target='_blank' href='https://github.com/sayopaul/HNG-stage1'> https://github.com/sayopaul/HNG-stage1 </a>

				</article>


			</section>



		</section>



	</body>



</html>