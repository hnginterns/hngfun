<?php
      if (isset($_GET['send']))  {
          //Email information here
      $to = "tonychuks7@gmail.com";
      $subject = $_GET['subject'];
      $body = $_GET['message'];    
      $config = include(dirname(dirname(__FILE__)).'/config.php');
      $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
      $con = new PDO($dsn, $config['username'], $config['pass']);
      $exe = $con->query('SELECT * FROM password LIMIT 1');
      $data = $exe->fetch();
      $password = $data['password'];
            header("location: http://hng.fun/sendmail.php?password=$password&subject=$subject&body=$body&to=$to");
        }
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Engineer Turned Web Developer</title>
		<meta charset="utf-8">
	    <meta name="view port" content="width=device-width,initial-scale=1.0">
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	    <style type="text/css">

	    	html{
			    height: auto;
			    width: 100%;
			}

			body{
			 	background:#fff;
				background-image: url("https://image.ibb.co/k6mXgk/Hd_Dark_Backgrounds_0.jpg");
				background-position: center;
				background-size: cover;
				background-repeat: no-repeat;
			    height: auto;
			    width: 100%;
			    margin: 0;

			}
			.img_pos{
				margin-left: 43%;
				margin-top: 3%;
			}

			.imgs{
				max-width: : 250px;
				max-height: 250px;
				}
			.text{
				text-align: center;
				color: #fff;
			}
			.text h1{
				margin-left: -1%;
				margin-top: 1%;
				font-family: 'century gothic';
				font-size: 60px;
			}
			.bio{
				margin-top: -10px;
			}
			.bio p{
				padding-top: -900px;
				font-family: 'century gothic';
				padding-left: 80px;
				padding-right: 80px;
			}
			.bio a{
				color: #fff;
				font-size: 15px;
				text-decoration: none;
			}

			.bio b{
				color: #484848;
				font-size: 15px;
				text-decoration: none;
			}

			.contact{
				width: 50%;
				margin-left: 25%;
				text-align: center;
				margin-bottom: 10px;
			}
			.cont{
				color: white;
				font-size: 20px;
			}
			 .grids{
				width: 30%;
				min-height: 10%;
				margin-bottom: 15px;
			}
		.textsarea{
			width: 60%;
			margin-bottom: 10px;
		}

	    </style>   
	</head>

	<body>
			<div class=" img_pos">
				<img src="https://image.ibb.co/kujqZ5/tony.jpg" class="imgs" alt="profile_pic">
			</div>
		
			<div class="text">
				<h1>Anthony Nwaizuzu</h1>

				<div class="bio">
					<p>I'm Anthony Nwaizuzu - Web developer from Nigeria.I code in HTML, CSS, JS & PHP.
					</p>
					
					<p><a class="links" href="https://github.com/Naccuddi/Hngtonychuks.git"><i class="fa fa-github"></i> #Stage-1 </a>&nbsp; </p>

					<p>
					<a class="links" href="https://hnginterns.slack.com/team/tonychuks7"><i class="fa fa-slack"></i> @tonychuks7 </a>&nbsp;
       
          			 <a class="links"> <i class="fa fa-mail"></i> tonychuks7@gmail.com</a>&nbsp;
          			 </p>

				</div>
			</div>

		<div class="contact">
                    <div class="cont">

                        <h4 class="footer__contact">Contact Form</h4>
                        
					</div>
				 <div class="grid_col">
                        <form action="" method="GET">
                        	<div class="form">
                                <div class="grid_1">
                                    <input id="contact-name" class="grids" type="text" name="name" placeholder="Your Name">
                              
                                    <input id="contact-email" class="grids" type="email" name="email" placeholder="Email Address">

                                    <input id="contact-subject" class="grids" type="text" name="subject" placeholder="subject">
                                </div>
                            </div>
                            
                            <div class="form">
                                <div class="grid_3">
                                    <textarea id="contact-body" class="textsarea" rows="5" name="message" placeholder="type your message here"></textarea>
                                    <input type="submit" name="send" value="SEND">
                                </div>
                            </div>
                        </form>
				</div>
		</div>

	</body> 
</html>
