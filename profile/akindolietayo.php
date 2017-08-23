<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];
    $subject = $_POST['subject'];
    $to  = 'akindolietayo@gmail.com';
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
      echo $uri = dirname(dirname(dirname(__FILE__))).'/sendmail.php?to=$to&body=$body&subject=$subject&password=$password';
      header("location: $uri");
      echo 'yass';
    }
  }
 ?>
<!DOCTYPE html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />
        <title>Akindolie Oluwatayo</title>
        <link rel="stylesheet" type="text/css" media="all" href="style.css" />
        <script src="https://use.fontawesome.com/0b7956cb33.js"></script>
    </head>
    <style type="text/css">
    	@import url('http://fonts.googleapis.com/css?family=Droid+Serif:400italic,700italic');
html, body {
  height: 100%;
  margin: 0;
  font-family: 'Droid Serif', serif !important;
  overflow-x: hidden;
}
.container{
  /*min-height:100%;
  min-width:100%;*/
  background-color:#00ad3f;
  display:flex;
}
.container2{
    background: #eaeeec;
    margin: 10px;
    /*min-height: 100%;
    min-width: 100%;*/
}
.left1{
    background: url('http://tayo.com.ng/hng/DSC_2575.jpg') center center;
    background-size: cover;
    height: 100%;
    width: 50%;
    float: left;
}
.right1{
    height: 100%;
    width: 50%;
    float: right;
}
.right1>h3{
    text-align: center;
    color: #4c4c4c;
    padding: 0 15px;
}
.right1>.bio{
    padding-top: 20px;
    text-align: center;
    padding: 15px;
    color: #4c4c4c;
}
.clearfix{
    clear: both;
}
.form-container{
    padding: 0px 15px;
    width: 85%;
}
.form-container>form{
    padding-bottom: 30px;
}
.form-input{
    width: 100%;
    height: 35px;
    margin: 5px 0;
    border: 2px solid #cfcfcf;
    border-radius: 7px;
}
.form-input, .form-submit{
    outline: none;
}
.form-textarea{
    height: 150px !important;
}
.form-submit{
    background: #00ad3f;
    border: 2px solid #00ad3f;
    color: white;
    font-weight: 900;
    padding: 7px;
}
::-webkit-input-placeholder{
    font-family: 'Droid Serif', serif !important;
    color: #4c4c4c;
}
input, textarea{
    font-family: 'Droid Serif', serif !important;
    color: #4c4c4c;
}
ul{
    padding: 15px;
}
ul, li{
    text-align: center;
    list-style-type: none;
    color: #4c4c4c;
}
@media (min-width: 480px){
    html, body{
        overflow-x: hidden !important;
    }
    .right1>h3{
        padding-top: 5%;
    }
}
@media (max-width: 399px){
    .left1{
        height: 120vh
    }
}
@media (max-width: 500px){
    .left1, .right1{
        width: 100% !important;
    }
    .right1{
        padding-top: 30px;
    }
    .left1{
        max-height: 500px;
    }
    .container{
        height: 500px;
    }
    .right1>.bio{
        text-align: left;
        line-height: 1.5;
    }
}
    </style>
    <body>
		<div class="container">
			<div class="container2">
				<div class="left1"></div>
				<div class="right1">
					<h3>Akindolie Oluwatayo</h3>
					<p class="bio">
						I'm Akindolie Oluwatayo - Web developer from Nigeria.<br>

						I code in HTML, CSS, JS & PHP.<br>
						I have worked with brands such as Samsung, Bridge House College, Softnvtion, LMUN, Who Sabi Cook, ShopinLagos, Guestlist, Naija Butcher, City Bridge Sportsplex and For The Culture.<br>
						To reach me, send me an email at <a href="mailto:hello@tayo.com.ng">hello@tayo.com.ng</a> or use the contact form below.
					</p>
					<ul>
						<li>
							<i class="fa fa-slack fa-2x"></i><br>
							@akindolietayo
						</li>
						<li style="padding-top: 25px;">
							<i class="fa fa-link fa-2x"></i><br>
							<a href="https://github.com/its-tayo/getting-started-h2-2017" target="_blank">https://github.com/its-tayo/getting-started-h2-2017</a>
						</li>
					</ul>
                    <div class="form-container">
                        <form action="" method="POST">
                            <!--<input type="hidden" name="password" class="form-input">-->
                            <input type="text" name="subject" placeholder="Subject " class="form-input" required="">
                            <!--<input type="email" name="to" placeholder="Email" class="form-input" required="">-->
                            <textarea name="message" placeholder="Message" class="form-input form-textarea" required=""></textarea>
                            <input type="submit" name="send" value="SEND" class="form-submit" required="">
                        </form>    
                    </div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
    </body>
</html>