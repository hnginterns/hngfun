<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];
	$name = $_POST['name'];
    $subject = $_POST['subject']." by ".$name;
    $to = "joesmithessang@gmail.com";
    $body = $_POST['body'];
	
    if($body == '' || $body == ' ') {
        $error[] = 'Message cannot be empty.';
    }
    if($subject == '' || $subject == ' ') {
        $error[] = 'Subject cannot be empty.';
    }
     if(empty($error)) {
        $config = include(dirname(dirname(__FILE__)).'/config.php');
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
<html lang="en">
	<head>
		<meta charset="utf-8">

		<title>Jsmyth</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" href="css/style.css">
		
		<style type="text/css">
		@charset "utf-8";
		
@import url(https://fonts.googleapis.com/css?family=Roboto:400,300,600,400italic);
/*------------------------------------*\
    $RESET
\*------------------------------------*/
html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre, hr,
a, abbr, address, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strong, sub, sup, tt, var,
b, u, i,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, figcaption, figure,
footer, header, hgroup, menu, nav, section, summary,
time, mark, audio, video {
    margin: 0;
    padding: 0;
}
article, aside, details, figcaption, figure, footer,
header, hgroup, menu, nav, section {
    display: block;
}
h1, h2, h3, h4, h5, h6 {
    font-size: 100%;
}
table {
    border-collapse: collapse;
    border-spacing: 0;
}
strong, b, mark {
    font-weight: bold;
    font-style: inherit;
}
em, i, cite, q, address, dfn, var {
    font-style: italic;
    font-weight: inherit;
}
abbr[title], dfn[title] {
    cursor: help;
    border-bottom: 1px dotted;
}
ins {
    border-bottom: 1px solid;
}
a, u, ins {
    text-decoration: none;
}
del, s {
    text-decoration: line-through;
}
pre, code, samp, kbd {
    font-family: monospace;
}
small {
    font-size: 0.75em;
}
img {
    border: none;
    font-style: italic;
}
input,
select, option, optgroup,
textarea {
    font: inherit;
}





/*------------------------------------*\
    $MAIN
\*------------------------------------*/
html {
    background-color: #f6f9f9;
    color: #95a4a9;
    font: 12px/1.5 "Helvetica Neue", Helvetica, Arial, sans-serif;
}
body {
    margin: 10%;
}

.avatar {
    float: left;
    margin: 0 40px 20px 0;
}
    .avatar img {
        max-width: 200px;
        max-height: 200px;
        border-radius: 125px;
    }

.content {
    float: left;
    width: 300px;
}
    .title {
        font-size: 48px;
        font-weight: normal;
        line-height: 1;
    }

    .social-icons li {
        display: inline;
    }
        .social-icons a {
            display: inline-block;
            margin-right: 10px;
            text-indent: -9999px;
        }
            .twitter {
                background-image: url(http://res.cloudinary.com/jsmyth/image/upload/v1503167950/twitter_efmokx.png);
                width: 20px;
                height: 17px;
            }
            .facebook {
                background-image: url(http://res.cloudinary.com/jsmyth/image/upload/v1503167901/facebook_vyozrb.png);
                width: 10px;
                height: 19px;
            }
			.instagram {
                background-image: url(http://res.cloudinary.com/jsmyth/image/upload/v1503167934/instagram_qoxaus.png);
                width: 20px;
                height: 19px;
                }
            




/*------------------------------------*\
    $TYPOGRAPHY
\*------------------------------------*/
p,
ul, ol, dl,
.title {
    margin-bottom: 20px;
}
p {
    font-weight: bold;
}
ul, ol, dl {
    list-style-type: none;
}
a {
    color: #339999;
    font-weight: bold;
}
a:hover, a:focus {
    color: #95a4a9;
    -webkit-transition: color 0.2s ease;
    -moz-transition: color 0.2s ease;
    -o-transition: color 0.2s ease;
    -ms-transition: color 0.2s ease;
    transition: color 0.2s ease;
}





/*------------------------------------*\
    $MISC
\*------------------------------------*/
a img:hover,
.social-icons a:hover {
    -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=85)";
    filter: alpha(opacity=85);
    opacity: 0.85;
    -webkit-transition: opacity 0.2s ease;
    -moz-transition: opacity 0.2s ease;
    -o-transition: opacity 0.2s ease;
    -ms-transition: opacity 0.2s ease;
    transition: opacity 0.2s ease;
}

/*
*/
.animated {
    -webkit-animation-fill-mode: both;
    -moz-animation-fill-mode: both;
    -ms-animation-fill-mode: both;
    -o-animation-fill-mode: both;
    animation-fill-mode: both;
    -webkit-animation-duration: 1s;
    -moz-animation-duration: 1s;
    -ms-animation-duration: 1s;
    -o-animation-duration: 1s;
    animation-duration: 1s;
}

.animated.hinge {
    -webkit-animation-duration: 2s;
    -moz-animation-duration: 2s;
    -ms-animation-duration: 2s;
    -o-animation-duration: 2s;
    animation-duration: 2s;
}

@-webkit-keyframes bounceInDown {
    0% {
        -webkit-transform: translateY(-2000px);
    }
    
    60% {
        -webkit-transform: translateY(30px);
    }
    
    80% {
        -webkit-transform: translateY(-10px);
    }
    
    100% {
        -webkit-transform: translateY(0);
    }
}

@-moz-keyframes bounceInDown {
    0% {
        -moz-transform: translateY(-2000px);
    }
    
    60% {
        -moz-transform: translateY(30px);
    }
    
    80% {
        -moz-transform: translateY(-10px);
    }
    
    100% {
        -moz-transform: translateY(0);
    }
}

@-o-keyframes bounceInDown {
    0% {
        -o-transform: translateY(-2000px);
    }
    
    60% {
        -o-transform: translateY(30px);
    }
    
    80% {
        -o-transform: translateY(-10px);
    }
    
    100% {
        -o-transform: translateY(0);
    }
}

@keyframes bounceInDown {
    0% {
        transform: translateY(-2000px);
    }
    
    60% {
        transform: translateY(30px);
    }
    
    80% {
        transform: translateY(-10px);
    }
    
    100% {
        transform: translateY(0);
    }
}

.bounceInDown {
    -webkit-animation-name: bounceInDown;
    -moz-animation-name: bounceInDown;
    -o-animation-name: bounceInDown;
    animation-name: bounceInDown;
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-font-smoothing: antialiased;
  -moz-font-smoothing: antialiased;
  -o-font-smoothing: antialiased;
  font-smoothing: antialiased;
  text-rendering: optimizeLegibility;
}


.container {
  max-width: 400px;
  width: 100%;
  margin: 0 auto;
  float: right;
  text-align: right;
  position: relative;
  vertical-align: top;
}

#contact input[type="text"],
#contact input[type="email"],
#contact input[type="tel"],
#contact input[type="url"],
#contact textarea,
#contact button[type="submit"] {
  font: 400 12px/16px "Roboto", Helvetica, Arial, sans-serif;
}

#contact {
  background: #F9F9F9;
  padding: 25px;
  margin: 150px 0;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}

#contact h3 {
  display: block;
  font-size: 30px;
  font-weight: 300;
  margin-bottom: 10px;
}

#contact h4 {
  margin: 5px 0 15px;
  display: block;
  font-size: 13px;
  font-weight: 400;
}

fieldset {
  border: medium none !important;
  margin: 0 0 10px;
  min-width: 100%;
  padding: 0;
  width: 100%;
}

#contact input[type="text"],
#contact input[type="email"],
#contact input[type="tel"],
#contact input[type="url"],
#contact textarea {
  width: 100%;
  border: 1px solid #ccc;
  background: #FFF;
  margin: 0 0 5px;
  padding: 10px;
}

#contact input[type="text"]:hover,
#contact input[type="email"]:hover,
#contact input[type="tel"]:hover,
#contact input[type="url"]:hover,
#contact textarea:hover {
  -webkit-transition: border-color 0.3s ease-in-out;
  -moz-transition: border-color 0.3s ease-in-out;
  transition: border-color 0.3s ease-in-out;
  border: 1px solid #aaa;
}

#contact textarea {
  height: 100px;
  max-width: 100%;
  resize: none;
}

#contact button[type="submit"] {
  cursor: pointer;
  width: 100%;
  border: none;
  background: #4CAF50;
  color: #FFF;
  margin: 0 0 5px;
  padding: 10px;
  font-size: 15px;
}

#contact button[type="submit"]:hover {
  background: #43A047;
  -webkit-transition: background 0.3s ease-in-out;
  -moz-transition: background 0.3s ease-in-out;
  transition: background-color 0.3s ease-in-out;
}

#contact button[type="submit"]:active {
  box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
}

.copyright {
  text-align: center;
}

#contact input:focus,
#contact textarea:focus {
  outline: 0;
  border: 1px solid #aaa;
}

::-webkit-input-placeholder {
  color: #888;
}

:-moz-placeholder {
  color: #888;
}

::-moz-placeholder {
  color: #888;
}

:-ms-input-placeholder {
  color: #888;
}



/*------------------------------------*\
    $MOBILE
\*------------------------------------*/
@media handheld, only screen and (max-width: 720px) {
    .avatar,
    .content {
        float: none;
        
    }

    .avatar img {
        max-width: 125px;
        max-height: 125px;
    }

    .content {
        width: 100%;
    }
}
 </style>
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>

	<body class="animated bounceInDown">
		<div class="avatar">
			<img src="http://res.cloudinary.com/jsmyth/image/upload/v1503171603/IMG_20170819_203825_jsknvs.jpg" alt="Avatar">
		</div>

		<div class="content">
			<h1 class="title">Joe-Smith<br>Essang</h1>
			<p> Slack:<a href="https://hnginterns.slack.com/jsmyth">	@jsmyth</a>.</p>
			

			<p>	[ANDROID DEVELOPER] </p> 
			<p></p>
			
			<p>
				Traversing The Galaxy In Search Of A Quantum God.<br>
				Native of AKS, first of his name, and all round humble guy.<br>
				500 level Engineering Student, University Of Uyo.
			</p>

			<ul class="social-icons">
				<li><a class="twitter" href="https://twitter.com/jsmyth001" title="Twitter">Twitter</a></li>
				<li><a class="facebook" href="https://facebook.com/joesmithessang" title="Facebook">Facebook</a></li>
				<li><a class="instagram" href="https://instagram.com/_jsmyth" title="Instagram">Instagram</a></li>
			</ul>

			<p>
				Link to completed stage 1 task<br>
				<a href="https://github.com/Joesmithessang/HNG-Test1">https://github.com/Joesmithessang/HNG-Test1"</a>
			</p>

			<p>
				Download my android app here:<br>
				<a href="https://goo.gl/ESLWv1">Jsmyth's Profile.Apk</a>
			</p>
			
			<p>Want to send me a love letter? <a href="mailto:joesmithessang@gmail.com">Email me</a>.</p>
			</div>
			<div class="container">  
  <form id="contact" action="#" method="post">
    <h3>Contact Form</h3>
    <h4>Typically replies in 24 hours</h4>
    <fieldset>
      <input name = "name" placeholder="Your name" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address (optional)" type="email" tabindex="2" >
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number (optional)" type="tel" tabindex="3" >
    </fieldset>
    <fieldset>
      <input name = "subject" placeholder="Subject" type="text" tabindex="4" required>
    </fieldset>
    <fieldset>
      <textarea name = "body" placeholder="Type your message here...." tabindex="5" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
    <p class="copyright">Jsmyth_labs</a></p>
  </form>
</div>
		
	</body>
</html>