<?php
      if (isset($_GET['send']))  {
          //Email information here
      $to = "swissking009@gmail.com";
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
		<title>Kingsley Ukeje Profile</title>
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
				background-image: url(https://image.ibb.co/dt4ccQ/web_templa4te.jpg);
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
				background-color: #000000;
				opacity: 0.7;
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
				border-style: ridge;
				border-color: white;
				border-radius: 10px;
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
				<img src="https://image.ibb.co/f95Erk/DHm_JVf0_Ws_AUW_No.png" class="imgs" alt="profile_pic">
			</div>
		
			<div class="text">
				<h1>UKEJE KINGSLEY UGOCHUKWU</h1>

				<div class="bio">
					<p>Hi, I have connecting beards, so I am handsome. Im a software developer, UI/UX designer also most importantly a critical thinker, I solve your problems. With these two points of mine. I am your man!
					I am 22 years old, I am a Bsc certified student of Computer science from the University of Nigeria, i'm the first in a family of 4. I spend most of my time in front of a laptop combining symbols with words, in turn creating awesomeness for a living.
					When am not punching my laptop, I make new friends, watch movies, read books, or go on long walks with headphones on.
					I think thats all to me.	
					Cheerio!!!
					</p>
					
					<p><a class="links" href="https://github.com/swissking009/testrepo"><i class="fa fa-github"></i> #Stage-1 task</a>&nbsp; </p>

					<p>
					<a class="links" href="https://hnginterns.slack.com/team/rogue.kvng"><i class="fa fa-slack"></i> rogue.kvng </a>&nbsp;
         			
         			 <a class="links" href="https://www.facebook.com/kingsleykswiss"><i class="fa fa-facebook"></i> Facebook</a>&nbsp;
         			
         			 <a class="links" href="https://twitter.com/kvng_b3rd"><i class="fa fa-twitter"></i> Twitter</a>&nbsp;
         			
         			 <a class="links" href="https://www.instagram.com/kvng.b3rd"><i class="fa fa-instagram"></i> Instagram</a>&nbsp;
          			
          			 <a class="links"> <i class="fa fa-phone-square"></i> 07031356201</a>&nbsp;
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