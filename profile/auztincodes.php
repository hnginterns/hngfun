<?php
      if (isset($_GET['send']))  {
          //Email information here
      $to = "austinugo200@gmail.com";
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
		<title>Profile Page</title>
		<meta charset="utf-8">
	    <meta name="view port" content="width=device-width,initial-scale=1.0">
	     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	    <style type="text/css">
		   	 html{
				 height:100%;
				 width:100%;
		    	}

			body{
			 	background:#fff;
			 	background-image: url("http://res.cloudinary.com/auztin/image/upload/q_100/v1503444337/bg2_xu9ggq.jpg");
			 	background-size: cover;
			    height: 100%;
			    width: 100%;
			    margin: 0;

			}
			.img_pos{
				margin-left: 43%;
				margin-top: 5%;
			}

			.imgs{
				max-width: : 200px;
				max-height: 200px;
				}
			.text{
				text-align: center;
				color: #fff;
			}
			 .text h1{
				color:#fff;
				font-family:'century' ;
				font-size: 40px !important;
				
			}
			
			.bio{
			
				
				margin-top: 50px;
				width: 50%;
				margin-left: 25%;
			}
			hr {
				width: 100px;
				margin-bottom: 20px;
			}
			.bio h3{
				font-family: 'Courier New';
				font-size: 25px;
				margin-top: 30px;
				padding-top: 20px;
				color: #fff;
			}
			.bio p{
				color: #fff;
				margin-top: -45px;
				padding-top: -900px;
				font-family: 'Century';
				
				text-align: center;
			}
			 a:link {
			
				color: #DAA520;
				font-size: 20px;
				text-decoration: none;
			}
			a:hover{
				color: #FFFACD
			}
			a:visited{
				color: #DAA520;
			}
			.icons{
				font-weight: bold
			}
			.contact{
				width: 50%;
				margin-left: 25%;
				text-align: center;
				border-style: solid;
				border-color: #FFFACD;
				border-radius: 10px;
				margin-bottom: 10px;
			}
			.cont{
				color: #fff;
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
				<img src="http://res.cloudinary.com/auztin/image/upload/v1503444301/auztin_v2yd3c.png" class="imgs" alt="profile_pic">
			</div>
		
			<div class="text">
					<h1>OKORIE UGOCHUKWU AUGUSTINE</h1>
					<hr class="line">
					
					<div class="bio">
	
	 					<p>Hi, My name is Okorie Ugochukwu from Enugu State.
						I am 24 years old, A graduate of Computer science from the University of Nigeria. A software developer who is very passionate about technology.
						In my leisure time, I play games, watch movies, read books, or listen to motivational podcasts.
						
						</p>
						
					</div>
				<div class="icons">
					<p><a class="links" href="https://hnginterns.slack.com"><i class="fa fa-slack"></i>Auztin</a>&nbsp;
					<a class="links" href="https://github.com/auztincodes/secondrepo"><i class="fa fa-github"></i>Stage-1 Repo</a>&nbsp;
					<a class="links" href="https://twitter.com/OkorieAustin"><i class="fa fa-twitter"></i>OkorieAustin</a>

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
                                    <input class="grids" type="text" name="name" placeholder="Name">
                              
                                    <input class="grids" type="text" name="subject" placeholder="Email Subject">
                                </div>
                            </div>
                            <div class="form">
                                <div class="grid_3">
                                    <textarea class="textsarea" rows="5" name="message" placeholder="type your message here"></textarea><br>
                                    <input type="submit" name="send" value="SEND">
                                </div>
                            </div>
                        </form>
				</div>

			</div>

	</body> 
</html>
