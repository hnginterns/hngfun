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
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Godfred Akpan|Personal Page</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">	
	<link href="css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="assets/img/ico/favicon.ico">
    
    <link rel="apple-touch-icon-precomposed" href="assets/img/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
			
		<div class="main-nav">
			<div class="container">
				<div class="header-top">
					<div class="pull-right social-icons">
						<a href="https://twitter.com/godfredakpan"><i class="fa fa-twitter"></i></a>
						<a href="https://facebook.com/godfred.akpan.14"><i class="fa fa-facebook"></i></a>
						<a href="https://google.com/archerwebmaster"><i class="fa fa-google-plus"></i></a>
						<a href="https://youtube.com/archerwebsolution"><i class="fa fa-youtube"></i></a>
					</div>
				</div>     
		        <div class="row">	        		
		            <div class="navbar-header">
		                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		                    <span class="sr-only">Toggle navigation</span>
		                    <span class="icon-bar"></span>
		                    <span class="icon-bar"></span>
		                    <span class="icon-bar"></span>
		                </button>
		                <a class="navbar-brand" href="index.html">
		                	<img class="img-responsive" src="assets/img/logo.png" alt="logo">
		                </a>                    
		            </div>
		            <div class="collapse navbar-collapse">
		                <ul class="nav navbar-nav navbar-right">                 
		                    <li><a class="no-scroll" href="https://github.com/godfredakpan/hng-php-task" target="_blank">My first project</a></li>
		                            <li class="scroll"><a href="#contact">Contact</a></li>
							
		                </ul>
				</div>
		        </div>
	        </div>
        </div>                    
    
    <!--/#header--> 

    <section id="home">	

			<div class="carousel-inner">
				<div class="item active">
					<img class="img-responsive" src="assets/img/bg.jpg" alt="godfred">						
					<div class="carousel-caption">
						<h2>Welcome to my page</h2>
						<h4>Thanks to hotels.ng</h4>
						<a href="#contact"> Speak to me <i class="fa fa-angle-right"></i></a>
						
					</div>
				</div>
				
				</div>				
			</div>
		</div>    	
    </section>
	<!--/#home-->

	

	
	<section id="about">
		<div class="guitar2">				
			<img class="img-responsive" src="assets/img/11.jpg" alt="godfred">
		</div>
		<div class="about-content">					
					<h2>About Godfred Akpan</h2>
					<p><p>My Name is Godfred Akpan, i am from Akwa Ibom State, Nigeria, <p>i studied computer science at IMFI Academy, with a degree of competence 
										in Web Design and Programming. <p>iam currently studying at the University of Uyo, expecting to graduate by next year which is 2018.
										<p>
                                           My Inspiration is God, i believe with him and a computer you can do all things.</p><p>
									
					<a href="https://github.com/godfredakpan" class="btn btn-primary">View my Github Profile <i class="fa fa-angle-right"></i></a>
				         <a href="https://slack.com/godfredakpan" class="btn btn-primary">View my Slack Profile <i class="fa fa-angle-right"></i></a>
		</div>
	</section><!--/#about-->
	<section id="contact">
		
		<div class="contact-section">
			<div class="ear-piece">
				<img class="img-responsive" src="assets/img/ear-piece.png" alt="">
			</div>
			<div class="container">
				<div class="row">
					<div class="col-sm-3 col-sm-offset-4">
						<div class="contact-text">
							<h3>Contact</h3>
							<address>
								E-mail: godfredakpan@gmail.com<br>
								Phone: +2349036709916 <br>
								
							</address>
						</div>
						
						
					</div>
					<div class="col-sm-5">
						<div id="contact-section">
							<center><h3>Send a message</h3>
					    	<div class="form-container">
                        <form action=" " method="POST">
                            <!--<input type="hidden" name="password" class="form-input" value="<?php echo $password; ?>">-->
				
                            <input type="hidden" name="to" value="godfredakpan@gmail.com">
				
                            <input type="text" name="subject" placeholder="Subject " class="form-input" required="text"><p>
                            <!--<input type="email" name="to" placeholder="Email" class="form-input" required="text">-->
				
                            <textarea name="message" placeholder="Message" class="form-input form-textarea" required=""></textarea><p>
                            <input type="submit" name="submit" value="SEND" class="form-submit" required="">
							</form></center>  <br>  
					    </div>
					</div>
				</div>
			</div>
		</div>		
	</section>
    <!--/#contact-->

    <footer id="footer">
        <div class="container">
            <div class="text-center">
                <p> Copyright  &copy;2017<a target="_blank" href="https://github.com/godfredakpan"> Godfred Akpan </a> All Rights Reserved. <br> Designed by <a target="_blank" href="https://github.com/godfredakpan">Godfred Akpan</a></p>                
            </div>
        </div>
    </footer>
    <!--/#footer-->
  
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  	<script type="text/javascript" src="js/gmaps.js"></script>
	<script type="text/javascript" src="js/smoothscroll.js"></script>
    <script type="text/javascript" src="js/jquery.parallax.js"></script>
    <script type="text/javascript" src="js/coundown-timer.js"></script>
    <script type="text/javascript" src="js/jquery.scrollTo.js"></script>
    <script type="text/javascript" src="js/jquery.nav.js"></script>
    <script type="text/javascript" src="js/main.js"></script>  
</body>
</html>
