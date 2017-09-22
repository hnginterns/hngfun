<!doctype html>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];
    $subject = $_POST['subject'];
    $to  = 'mroracle8@gmail.com';
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
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Aboderin Micheal- HNG</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!--Custom fonts. To improve load times, remove this and update the h1 styling in style.css--> 
	<link href='http://fonts.googleapis.com/css?family=Merriweather:400,700,900' rel='stylesheet' type='text/css'>
	<!-- stylesheets -->
	<link rel="stylesheet" href="formal.css" type="text/css" />
	<!-- favicon -->
	<link rel="shortcut icon" href="img/favicon.ico">
	
	<!-- just in case viewer is using Internet Explorer -->
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
 <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
              @import url(https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css);
              .social-icon {
                  color: #fff;
              }
              ul.social-icons {
                  margin-top: 10px;
                  align-items: center;
              }
              .social-icons li {
                  vertical-align: top;
                  display: inline;
                  height: 100px;
              }
              .social-icons a {
                  color: #fff;
                  text-decoration: none;
              }

              .fa-twitter {
                padding:10px 12px;
                -o-transition:.5s;
                -ms-transition:.5s;
                -moz-transition:.5s;
                -webkit-transition:.5s;
                transition: .5s;
                background-color: #322f30;
              }
              .fa-twitter:hover {
                  background-color: #00aced;
              }

              .fa-slack {
                padding:10px 12px;
                -o-transition:.5s;
                -ms-transition:.5s;
                -moz-transition:.5s;
                -webkit-transition:.5s;
                transition: .5s;
                background-color: #322f30;
              }

              .fa-slack:hover {
                  background-color: #00aced;
              }

              .fa-github {
                padding:10px 12px;
                -o-transition:.5s;
                -ms-transition:.5s;
                -moz-transition:.5s;
                -webkit-transition:.5s;
                transition: .5s;
                background-color: #322f30;
              }

              .fa-github:hover {
                  background-color: #00aced;
              }

              .fa-instagram {
                padding:10px 12px;
                -o-transition:.5s;
                -ms-transition:.5s;
                -moz-transition:.5s;
                -webkit-transition:.5s;
                transition: .5s;
                background-color: #322f30;
              }

              .fa-instagram:hover {
                  background-color: #00aced;
              }

              .fa-link {
                padding:10px 12px;
                -o-transition:.5s;
                -ms-transition:.5s;
                -moz-transition:.5s;
                -webkit-transition:.5s;
                transition: .5s;
                background-color: #322f30;
              }

              .fa-link:hover {
                  background-color: #00aced;
              }

              .fa-envelope {
                padding:10px 12px;
                -o-transition:.5s;
                -ms-transition:.5s;
                -moz-transition:.5s;
                -webkit-transition:.5s;
                transition: .5s;
                background-color: #322f30;
              }

              .fa-envelope:hover {
                  background-color: #00aced;
              }

              html, body {
                  background-color: #fff;
                  color: #636b6f;
                  font-family: 'Raleway', sans-serif;
                  font-weight: 100;
                  height: 100vh;
                  margin: 0;
              }

              .full-height {
                  height: 100vh;
              }

              .flex-center {
                  align-items: center;
                  display: flex;
                  justify-content: center;
              }

              .position-ref {
                  position: relative;
              }

              .top-right {
                  position: absolute;
                  right: 10px;
                  top: 18px;
              }

              .content {
                  text-align: center;
              }

              .title {
                  font-size: 50px;
              }

              ul {
                  color: #636b6f;
                  padding: 0 25px;
                  font-size: 12px;
                  font-weight: 600;
                  letter-spacing: .1rem;
                  text-decoration: none;
                  text-transform: uppercase;
              }

              .m-b-md {
                  margin-bottom: 30px;
              }

              .dp {
                border-radius: 45%;
                height: 200px  ;
              }
        </style>
</head>

<body>
	<div class="container">
		<!-- Header-->
		<header class="cf">
			<img class="portrait" src="https://scontent-cdt1-1.xx.fbcdn.net/v/t1.0-9/21616294_1786546184708545_7605639317472409095_n.jpg?oh=a4d599cb50eeaf44a7e2a390e9d840e8&oe=5A5876B8" height="200px" width="200px" class = "dp">
			<h1 class="">Aboderin Micheal</h1>
			<span class="light">i'm a Web Designer</span>
            
	<ul class="social-icons">
                    <li><a href="https://github.com/mroracle8" class="social-icon"> <i class="fa fa-github"></i></a></li>
                    <li><a href="https://hnginterns.slack.com/messages/@mroracle" class="social-icon"> <i class="fa fa-slack"></i></a></li>
                    <li><a href="mailto:mroracle8@gmail.com" class="social-icon"> <i class="fa fa-envelope"></i></a></li>
                    <li><a href="https://www.instagram.com/kidamikky8" class="social-icon"> <i class="fa fa-instagram"></i></a></li>
                    <li><a href="https://twitter.com/kidamikky" class="social-icon"> <i class="fa fa-twitter"></i></a></li><br>
                </ul>
		</header>
	
		<center><h2>About Me</h2>
		<section>
			<p>My Name is Micheal Aboderin From OYO state ibadan, i am a student of McPherson university, </p>
			<p>i'm a web designer ,i am also good with wordpress and html</p>
		</section>
		
			
                
                <figure><p><a href="https://github.com/mroracle8/HNG-Internship"><img src="https://assets-cdn.github.com/images/modules/logos_page/GitHub-Mark.png" width="100px"><figcaption>Link to my Stage 1 Project</figcaption></a><p></figure>
			
			<section class="grid-4">
                <center><h2>Contact</h2></center>
                         <form class="cd-form floating-labels" method="POST">
              		<fieldset>


              			<div class="icon">
              				<label class="cd-label" for="cd-name">Subject</label>
              				<input class="user" type="text" name="subject" id="cd-name" required>
              		  </div>

              			<div class="icon">
              				<label class="cd-label" for="cd-textarea">Message</label>
                    	<textarea class="message" name="message" id="cd-textarea" required></textarea>
              			</div>

              			<div>
              		   <input type="submit" value="Send Message">
              		  </div>
              		</fieldset>
              	</form>
                </section>
		</div>
				
			</section>
		</div>
		
		</center>
    
   


		

	</div><!-- End Container -->
	
</body>
    <style>
    *, *:before, *:after {
  -moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box;
}
 
body {
  font-family: 'Merriweather', Georgia, serif;
  font-size: 100%;
  margin: 0;
  background-color: #fff;
  color: #212121;
  font-size: 80%;
}

@media screen and (min-width: 35em) {
  body {
    font-size: 100%;
  }

}

/* Typography */

h1, h2 {
  font-weight: 900;
  margin-top: 1em;
  margin-bottom: 0.3em;

}

h3 {
  margin-top: 0;
  margin-bottom: 0.3em;
}

a {
  color: #3d6dbe;
  text-decoration: none;
}

a:focus,
a:hover {
  color: #6594e0;
}

p {
  font-size: 1em;
  line-height: 1.8;
  margin-top: 0;
  margin-bottom: 0em;
  max-width: 650px;
}

ul li {
  line-height: 1.8;
  max-width: 610px;
}

/* Header */
header {
  margin-top: 50px;
  margin-bottom: 50px;
  text-align: center;
}

header p {
  margin-top: 0;
  line-height: .5;
}

header h1 {
  padding-top: 2px;
  margin-bottom: .1em;
}

.portrait {
  width: 200px;
  border-radius: 5px;
  margin: 0 auto;
  display: block;
}

@media screen and (min-width: 35em) {
  
  header {
    margin-top: 75px;
    margin-bottom: 50px;
    text-align: left;
  }
  
  .portrait {
    margin-right: 20px;
    margin-left: 0;
    float: left;
  }
  

}

/* Utilities */

img {
  max-width: 100%;
}

section {
  margin-bottom: 50px;
}

.cf:after {
  content: "";
  display: table;
  clear: both;
}

.light {
  color: #888;
}

/* The Grid */

.container {
  max-width: 800px;
  width: 92%;
  margin-left: auto;
  margin-right: auto;
}

.row {
  clear: both;
  margin-right: -1%;
  margin-left:  -1%;
  
}

.row:before,
.row:after {
    content: " "; /* 1 */
    display: table; /* 2 */
}

.row:after {
    clear: both;
}

/**
 * For IE 6/7 only
 */
.row {
  *zoom: 1;
}

.grid-1,
.grid-2,
.grid-3,
.grid-4,
.grid-5,
.grid-6 {
  float: center;
  width:100%;
  padding: 0 1%;
  margin-left: auto;
  margin-right: auto;
}

@media screen and (min-width: 40em) {
  .grid-1 { width: 16.6666666%; }
  .grid-2 { width: 33.3333333%; }
  .grid-3 { width: 50%; }
  .grid-4 { width: 66.6666666%; }
  .grid-5 { width: 83.3333333%; }
  .grid-6 { width: 100%; }

}
    </style>
</html>
