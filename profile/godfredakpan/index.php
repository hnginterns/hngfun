<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];
    $subject = $_POST['subject'];
    $to  = 'godfredakpan@gmail.com';
    $body = $_POST['message'];
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
<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <head>
	<meta charset="utf-8">
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
    font-size: 20px;
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
    font-size: 20px;
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
  #godfredakpan-submit {
    width: 127px;
    height: 37px;
    border: none;
    background-color: #3c3c3c;
    margin-top: 20px;
    cursor: pointer;
    font-size: 13px;
    text-transform: uppercase;
    text-align: center;
  }
  #godfredakpan-submit:hover {
    opacity: .9;
  }
  @@media query {
  }
  </style>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
        <title>Welcome|Godfred Akpan|</title>
        <!-- Meta -->
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <!-- Favicon -->
        <link href="favicon.ico" rel="shortcut icon">
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.css" rel="stylesheet">
        <!-- Template CSS -->
        <link rel="stylesheet" href="assets/css/animate.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/nexus.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/custom.css" rel="stylesheet">
        <!-- Google Fonts-->
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open Sans:300,400" />
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Source Sans Pro:300,400" />
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
                            </li><br><br><br><br><br><br>
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
                        <br><br><br>
                    </div>
                    <div class="container">
                        <!-- === END HEADER === -->
                        <!-- === BEGIN CONTENT === -->
                        <div class="row margin-vert-30">
                            <div class="col-md-12">
                                <h2></h2>
                                <div class="row">
                                    <div class="col-md-5">
                                        <center> <img src="assets/img/11.jpg" alt="Godfred Akpan">
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
                                    <div class="col-md-6">
                                        <!-- My Skills -->
                                        <h3 class="margin-bottom-10">My Skills</h3>
                                        <h3 class="progress-label">Graphic Design
                                            <span class="pull-right">92%</span>
                                        </h3>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                            </div>
                                        </div>
                                        <h3 class="progress-label">Marketing
                                            <span class="pull-right">82%</span>
                                        </h3>
                                        <div class="progress progress-sm">
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
                                        <div class="progress progress-sm">
                                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%">
                                            </div>
                                        </div>
                                        <!-- End My Skills -->
                                    </div>
                                    <div class="col-md-6">
                                        <!-- Accordion -->
                                        <div id="accordion" class="panel-group">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a class="accordion-toggle" href="#collapse-One" data-parent="#accordion" data-toggle="collapse">
                                                            Trust Worthy
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse-One" class="accordion-body collapse in">
                                                    <div class="panel-body">
                                                        <p>Iam too discipline to be inconsistence, so will not jeopardize my
														career in doing what will not give me credit. at the very end.</div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
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
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
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
										<p>>p><h1>Contact Me</h1>
        <?php if(isset($error) && !empty($error)): ?>
          <blockquote style="text-align: left;padding:5px;background: #fcf6f6; border-left:15px solid red;">
            <ul style='list-style:none;'>
              <?php
                foreach ($error as $key => $value) {
                  echo "<li>$value</li>";
                }
              ?>
            </ul>
          </blockquote>
        <?php endif; ?>
        <form class="godfredakpan_form" action="sendmail.php" method="POST">
          <label for="subject" class="godfredakpan-label">Subject</label>
          <input id="subject" type="text" name="subject" placeholder="Subject" required>

          <label for="message" class="godfredakpan-label">Your Message</label>
          <textarea id="message" name="message" rows="8" cols="50" placeholder="Your Message" required></textarea>

          <button type="submit" name="submit" id="godfredakpan-submit"> Send Message</buuton>
        </form>
      </div>
    </div>
  </div>
</body>
                                    </div>
                                </div>
                                <hr>
                                
                        <!-- Portfolio Footer Text -->
                        <div class="row">
                            <div class="col-12-md">
                                <p class="text-center padding-bottom-30" style="max-width:690px; margin:0 auto;"><img src="assets/img/7.png" alt="godfredakpan"> .</p>
                            </div>
                        </div>
                        <!-- End Portfolio Footer Text -->  <!-- === BEGIN FOOTER === -->
                    </div>
                    <div id="base" class="container padding-vert-30">
                        <div class="row">
                        <div class="container padding-vert-30">
                <div class="row">
                    <div id="copyright">
                        <p>[C]2017 Godfred Akpan||</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- JS -->
        <script type="text/javascript" src="assets/js/jquery.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="assets/js/scripts.js"></script>
        <!-- Isotope - Portfolio Sorting -->
        <script type="text/javascript" src="assets/js/jquery.isotope.js" type="text/javascript"></script>
        <!-- Mobile Menu - Slicknav -->
        <script type="text/javascript" src="assets/js/jquery.slicknav.js" type="text/javascript"></script>
        <!-- Animate on Scroll-->
        <script type="text/javascript" src="assets/js/jquery.visible.js" charset="utf-8"></script>
        <!-- Modernizr -->
        <script src="assets/js/modernizr.custom.js" type="text/javascript"></script>
        <!-- End JS -->
    </body>
</html>
<!-- === END FOOTER === -->
