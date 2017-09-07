<?php
      if (isset($_GET['send']))  {
          //Email information here
      $to = "toniatony16@yahoo.com";
      $subject = $_GET['subject'];
      $body = $_GET['message'];    
     $config = [
           'dbname' => 'hng',
           'pass' => '@hng.intern1',
           'username' => 'intern',
           'host' => 'localhost'
       ];
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
		<title>Emem Okponr</title>
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
				background-image: url("https://wallpapercave.com/wp/C3mI3Az.jpg");
				background-position: center;
				background-size: cover;
				background-repeat: no-repeat;
			    height: auto;
			    width: 100%;
			    margin: 0;

			}
			.img_pos{
				margin-left: 35%;
				margin-top: 3%;
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
				margin-left: -4%;
				margin-top: 1%;
				font-family: 'century gothic';
				font-size: 30px;
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
			 <div class="img_pos">
        <img src="https://avatars3.githubusercontent.com/u/31109020?v=4&s=460" height=350 width=350 alt= "profile picture">
    </div>

		
			<div class="text">
				<h1>Emem Okpon</h1>

				<div class="bio">
					<p>My name is Emem Okpon. An upcoming software developer who loves how technology can be used to solve problems. I'm a part-time  events planner and from this experience I have learnt the value of hard work, efficiency, and communication. I hope to be my best and get the best out of this internship!!!.
					</p>
					
					<div class="text-center">
		<a href="https://hnginterns.slack.com"><i class="fa fa-slack"></i>@ememtony</a>
		<a href="https://github.com/EmemTony/Stage1"><i class="fa fa-github"></i> Stage 1</a>
		
		
	</div>

				</div>
			</div>

		<div class="contact">
                    <div class="cont">

                        <h4 class="footer__contact">Contact Form</h4>
                        
					</div>
				 <div class="grid_col">
                        <form action="ememtony.php" method="GET">
                        	<div class="form">
                                <div class="grid_1">
                                    <input id="contact-name" class="grids" type="text" name="name" placeholder="Your Name">
                              
                                    <input id="contact-email" class="grids" type="email" name="email" placeholder="Email Address">

                                    <input id="contact-subject" class="grids" type="text" name="subject" placeholder="Subject">
                                </div>
                            </div>
                            
                            <div class="form">
                                <div class="grid_3">
                                    <textarea id="contact-body" class="textsarea" rows="5" name="message" placeholder="Type your message here"></textarea>
                                    <input type="submit" name="send" value="SEND">
                                </div>
                            </div>
                        </form>
				</div>
		</div>

	</body> 
</html>
