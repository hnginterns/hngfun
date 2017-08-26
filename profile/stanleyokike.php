<?php
      if (isset($_GET['send']))  {
          //Email information here
      $to = "okikestan@gmail.com";
      $subject = $_GET['subject'];
      $body = $_GET['message'];    
      $config = include(dirname(dirname(__FILE__)).'/config.php');
      $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
      $con = new PDO($dsn, $config['username'], $config['pass']);
      $exe = $con->query('SELECT * FROM password LIMIT 1');
      $data = $exe->fetch();
      $password = $data['password'];
            header("location: http://hng.fun/sendmail.php?password=$password&subject=$subject&body=$body&to=$to");
        }else{
        header("location: stanleyokike.php");
    }
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Stanleyokike</title>
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
			 	background-image: url("http://res.cloudinary.com/dium0vpfs/image/upload/v1503193289/sample.jpg");
			 	background-size: cover;
			    height: auto;
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
				margin-top: 30px;
				padding-top: -900px;
				font-family: 'Gothic';
				padding-left: 80px;
				padding-right: 80px;
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
				border-style: thin;
				border-color: #FFFACD;
				border-radius: 6px;
				margin-bottom: 6px;
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
				<img src="http://res.cloudinary.com/dium0vpfs/image/upload/v1503193755/IMG_20170612_145550_xdjpto.jpg" class="imgs" alt="profile_pic">
			</div>
		
			<div class="text">
					<h1>OKIKE STANLEY UCHENNA</h1>
					
					
					<div class="bio">
	
	 					<p>
						<h3>BIOGRAPHY</h3>
			  Currently a graduate of computer science student of University of Nigeria Nsukka.<br>
			  A Desktop application developer. <br>
			  Average knowledge on java programming language. <br>
			 I like working in a group and like singing.<br>
						
						</p>
						
					</div>
				<div class="icons">
					<p>
		     
		     <h4><a id="ai" href="https://hnginterns.slack.com"><i class="fa fa-slack" aria-hidden="true"></i>stanleyokike</a></h4>
			 <h4><a id="ai" href="https://gmail.com"> <i class="fa fa-envelope"></i>okikestan@gmail.com</h4>
             <h4><a id="ai" href="https://github.com/Stankovich96/HngInternsProject"><i class="fa fa-github" aria-hidden="true"></i>STAGE 1</a></h4>

					</p>
				</div>
			</div>

			<div class="contact">
                
                    
				       
						    <fieldset>
                     <legend><h2>Contact form</h2></legend>
                         <form action="stanleyokike.php" method="GET">
                            <div class="form">
                                <div class="grid_1">
                                    <input class="grids" type="text" name="name" placeholder="Your Name">
                              
                                    <input class="grids" type="email" name="email" placeholder="Email Address">
                                </div>
                            </div>
                            <div class="form">
                                <div class="grid_3">
                                    <textarea class="textsarea" rows="5" name="message" placeholder="type your message here"></textarea><br>
                                    <input type="submit" name="send" value="SEND">
                                </div>
                            </div>
                        </form>
						</fieldset>
						</div>
						
				

			
	</body> 
</html>
