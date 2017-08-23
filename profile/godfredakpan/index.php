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
<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <head>
	<style media="screen">
  body {
    font-family: 'Slabo 27px', serif;
    background: #f6f6f6;
  }
  .card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    max-width: 600px;
    margin: auto;
    text-align: center;
    padding-bottom: 20px;
  }
  .container {
    padding: 0 16px;
  }
  .title {
    color: grey;
    font-size: 18px;
  }
  button {
    border: none;
    outline: 0;
    display: inline-block;
    padding: 8px;
    color: white;
    background-color: #000;
    text-align: center;
    cursor: pointer;
    width: 100%;
    font-size: 18px;
  }
  a {
    text-decoration: none;
    font-size: 22px;
    color: black;
  }
  button:hover, a:hover {
    opacity: 0.7;
  }
  .line {
    max-width: 400px;
    margin-bottom: -20px;
    margin-top: -10px;
    border: 0;
    height: 1px;
    background-image: -webkit-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
    background-image: -moz-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
    background-image: -ms-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
    background-image: -o-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
  }
  h1 {
    margin-bottom: -15px;
  }
  .bosunski-label {
    display: block;
    margin-top:20px;
    text-align: left;
    font-weight: 400;
  }
  form {
    margin: 0 auto;
    max-width: 400px;
  }
  input, textarea {
    width: 380px;
    height: 27px;
    background: #efefef;
    border: 0.5px solid #dedede;
    padding: 10px;
    margin-top: 3px;
    font-size: 0.9em;
    color: #3a3a3a;
  }
  textarea {
    height: 213px;
  }
  input:focus, textarea:focus {
    border: 1px solid  #97d6eb;
  }
  #bosunski-submit {
    width: 127px;
    height: 37px;
    border: none;
    background-color: #3c3c3c;
    margin-top: 20px;
    cursor: pointer;
    font-size: 12px;
    text-transform: uppercase;
    text-align: center;
  }
  #godfred-submit:hover {
    opacity: .9;
  }
  @@media query {
  }
  </style>
   
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Slabo+27px">
        <title>Welcome|Godfred Akpan|</title>
        <!-- Meta -->
       
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
        <!-- Favicon -->
        <link href="favicon.ico" rel="shortcut icon">
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <!-- Template CSS -->
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/font-awesome.css">
        <link rel="stylesheet" href="assets/css/nexus.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <link rel="stylesheet" href="assets/css/custom.css">
        <!-- Google Fonts-->
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open Sans:300,400"/>
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Source Sans Pro:300,400"/>
    </head>
    <body>
        <div id="body_bg">
            <div id="container_header" class="container">
                <div id="header" class="row">
                    <div class="col-md-12 margin-top-15">
                        <!-- Header Social Icons -->
                        <ul class="social-icons circle pull-right">
                           
                            <li class="social-facebook">
                                <a href="http://www.facebook.com/godfred.akpan.14" target="_blank" title="Facebook"></a>
                            </li>
                            <li class="social-googleplus">
                                <a href="http://www.google.com/godfredakpan" target="_blank" title="GooglePlus"></a>
				    
			    </li>
                        </ul>
                        <!-- End Header Social Icons -->
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="primary-container-group">
                <!-- Background -->
                <div class="primary-container-background">
                    <div class="primary-container"></div>
                    <div class="clearfix"></div>
                </div>
                <!--End Background -->
                <div class="primary-container">
                    <div id="container_hornav" class="container no-padding">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.html">
                                <img src="assets/img/logo.png" alt="Logo" />
                            </a>
                        </div>
                        <!-- End Logo -->
                        <!-- Slogan -->
                        <p class="site-slogan">WELCOME TO MY PROFILE PAGE</p>
                        <!-- End Slogan -->
                        
                    </div>
                    <div class="container">
                        <!-- === END HEADER === -->
                        <!-- === BEGIN CONTENT === -->
                        <div class="row margin-vert-30">
                            <div class="col-md-12">
                                
                                <div class="row">
                                    <div class="col-md-5">
                                         <img src="assets/img/11.jpg" alt="Godfred Akpan">
                                    </div>
                                    <div class="col-md-7">
                                        <h3>Godfred Akpan
                                            <small>Front End Designer/ Programmer</small>
                                        </h3>
                                        <ul class="list-inline about-me-icons">
                                            <li>
                                                <a href="#">
                                                    <i class="fa-lg fa-border fa-linkedin"></i>
							
                                                </a>
                                            </li>
                                            <li>
                                                <a href="http://www.facebook.com/godfred.akpan.14">
                                                    <i class="fa-lg fa-border fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa-lg fa-border fa-dribbble"></i>
                                                </a>
						     <a href="https://github.com/godfredakpan">
                                                    <i class="fa-lg fa-border fa-github"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa-lg fa-border fa-google-plus"></i>
                                                </a>
                                            </li>
                                        </ul>
                                        <p>My Name is Godfred Akpan, i am from Akwa Ibom State, Nigeria, <p>i studied computer science at IMFI Academy, with a degree of competence 
										in Web Design and Programming. <p>iam currently studying at the University of Uyo, expecting to graduate by next year which is 2018.
										<p>
                                           My Inspiration is God, i believe with him and a computer you can do all things.</p><p>
										  
                                    </div>
                                </div>
                                <hr class="margin-bottom-40">
                                <div class="row">
					<div class="col-md-6"></div>
                                        <!-- My Skills -->
                                        <h3 class="margin-bottom-10">My Skills</h3>
                                        <h3 class="progress-label">Graphic Design
                                            <span class="pull-right">92%</span>
                                        </h3>
					<div class="progress progress-sm"></div>
                                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                            </div>
                                        </div>
                                        <h3 class="progress-label">Marketing
                                            <span class="pull-right">82%</span>
                                        </h3>
				    <div class="progress progress-sm"></div>
                                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100" style="width: 82%">
                                            </div>
                                        </div>
                                        <h3 class="progress-label">SEO
                                            <span class="pull-right">74%</span>
                                        </h3>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="74" aria-valuemin="0" aria-valuemax="100" style="width: 74%">
                                            </div>
                                        </div>
                                        <h3 class="progress-label">Programming
                                            <span class="pull-right">78%</span>
                                        </h3>
					<div class="progress progress-sm"></div>
                                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%">
                                            </div>
                                        </div>
                                        <!-- End My Skills -->
                                    </div>
					<div class="col-md-6"></div>
                                        <!-- Accordion -->
                                        <div id="accordion" class="panel-group">
						<div class="panel panel-default"></div>
                                                <div class="panel-heading"></div>
                                                    <h4 class="panel-title">
                                                        <a class="accordion-toggle" href="#collapse-One" data-parent="#accordion" data-toggle="collapse">
                                                            Trust Worthy
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse-One" class="accordion-body collapse in">
                                                    <div class="panel-body">
                                                        <p>Iam too disciplined to be inconsistence, so i will not jeopardize my
														career in doing what will not give me credit. at the very end.</div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default"></div>
                                                <div class="panel-heading"></div>
                                                    <h4 class="panel-title">
                                                        <a class="accordion-toggle" href="#collapse-Two" data-parent="#accordion" data-toggle="collapse">
                                                            Hard Working
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse-Two" class="accordion-body collapse">
                                                    <div class="panel-body">
                                                        <p>I stay up all night learning, every bit of information
														about web designing, and by doing that i provided
														100% Satisfaction to my clients.</div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default"></div>
                                                <div class="panel-heading"></div>
                                                    <h4 class="panel-title">
                                                        <a class="accordion-toggle" href="#collapse-Three" data-parent="#accordion" data-toggle="collapse">
                                                            Deligence
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse-Three" class="accordion-body collapse">
                                                    <div class="panel-body">
                                                        <p>I work deligently in other to achieve what others cannot.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Accordion -->
										<p><p><h1>Contact Me</h1>
      <div class="form-container">
                        <form action=" " method="POST">
                            <!--<input type="hidden" name="password" class="form-input" value="<?php echo $password; ?>">-->
				
                            <input type="hidden" name="to" value="godfredakpan@gmail.com">
				
                            <input type="text" name="subject" placeholder="Subject " class="form-input" required="text">
                            <!--<input type="email" name="to" placeholder="Email" class="form-input" required="text">-->
				
                            <textarea name="message" placeholder="Message" class="form-input form-textarea" required="text"></textarea>
                            <input type="submit" name="submit" value="SEND" class="form-submit" required="text">
                        </form>    
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
</div>
  </div>

                                    </div>
                                </div>
                                <hr>
                                
                        <!-- Portfolio Footer Text -->
                        		<div class="row">
		    </div>
                            		<div class="col-12-md">
						</div>
                    <p class="text-center padding-bottom-30" style="max-width:690px; margin:0 auto;"><img src="assets/img/7.png" alt="godfredakpan"> .</p>
                            	</div>
                        	
                        <!-- End Portfolio Footer Text --> 
		    <!-- === BEGIN FOOTER === -->
                    		
					<div id="base" class="container padding-vert-30">
				
                        	
			  		<div class="container padding-vert-30">
			        
                	  		<div class="row">
				
                    			<div id="copyright">
				</div>
                      <p>[C]2017 Godfred Akpan||</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- JS -->
        <script type="text/javascript" src="assets/js/jquery.min.js" ></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/js/scripts.js"></script>
        <!-- Isotope - Portfolio Sorting -->
        <script type="text/javascript" src="assets/js/jquery.isotope.js" ></script>
        <!-- Mobile Menu - Slicknav -->
        <script type="text/javascript" src="assets/js/jquery.slicknav.js"></script>
        <!-- Animate on Scroll-->
        <script type="text/javascript" src="assets/js/jquery.visible.js" charset="utf-8"></script>
        <!-- Modernizr -->
        <script src="assets/js/modernizr.custom.js"></script>
        <!-- End JS -->
    </body>
</html>
<!-- === END FOOTER === -->
