<?php

   $config = include('../../config.php');
    $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
    $con = new PDO($dsn, $config['username'], $config['pass']);

   $exe = $con->query('SELECT * FROM password LIMIT 1');
    $data = $exe->fetch();
    $password = $data['password'];

   if (isset($_GET['sendmessage'])) {

       $subject = "Hello";
        $password = htmlentities(strip_tags(trim($password)));
        $body = htmlentities(strip_tags(trim($_GET['comment'])));
        $to = "amaechilegend@gmail.com";

       $location = "../../sendmail.php?to=$to&subject=$subject&password=$password&body=$body";

       header("Location: " . $location);

   }

?>
<DOCTYPE html>
<html>
<head>
    <meta charset = "utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"/>
	
	<title>hngfun/profile/amaechichisom</title>
	<style type="text/css">
		body{
		    background-color:#7dcd85;
			font-family: sans-serif;

		}
		.content{
			width:400px;
			height:1200px;
			margin:auto;
			margin-top: 0px;
			background-color: #bac7be;
			box-shadow: 0 10px 20px rgba(0,0,0,.5);
			border-radius: 1%;
		}
		.profile_pic{
			width: 400px;
			margin :auto;
			-webkit-box-flex: 1;
			text-align:center;
			
		}
		.fade img{
			width: 400px;
			height: 300px;
			display: block;
			margin: 0 auto;	
		}
		.about{
			width:400px;
			-webkit-box-flex: 1;
			color: black;
			text-align: center;
		}
		.about h1{
			padding :0px;
			margin-top:5px;
			font: bold 20px 'Montserrat',sans-serif;
			color: #776472;		}
		.about h5{
			padding-top:5px;
			margin: 0px;
			font: none 12px sans-serif;
			color: black;
		}
		.about p{
			padding-top: 10px;
			margin-top:0px;
		    font:none 15px sans-serif;
		}
		.icons{
			background-color: #bac7be;
		}
		.icons ul{
			align-items: center;
			margin-top: 10px;
		}
		.icons a{
			color: #322f30;
			text-decoration: none;
		}
		.ending li{
			display: inline-block;
			text-align: center;
			text-decoration: none;
			list-style: none;
			vertical-align: top;
			padding:0px 0px 0px 0px;
			margin: 20px;
			
		}
		.fa-slack {
            padding:10px 12px;
            -o-transition:.5s;
            -ms-transition:.5s;
            -moz-transition:.5s;
            -webkit-transition:.5s;
            transition: .5s;
            background-color: #bac7be;
            color:#03bb85;
        }
        .fa-slack:hover {
            color:#322f30;
            background-color: #03bb85;
            border-radius: 50%;
        }
        .fa-github {
            padding:10px 12px;
            -o-transition:.5s;
            -ms-transition:.5s;
            -moz-transition:.5s;
            -webkit-transition:.5s;
            transition: .5s;
            background-color: #bac7be;
            color:#c161ce;
        }
        .fa-github:hover {
            color:#322f30;
            background-color: #c161ce;
            border-radius: 50%;
        }
        .fa-facebook {
            padding:10px 12px;
            margin:0px;
            -o-transition:.5s;
            -ms-transition:.5s;
            -moz-transition:.5s;
            -webkit-transition:.5s;
            transition: .5s;
            background-color: #bac7be;
            color:#00aced;
        }
        .fa-facebook:hover {
            color:#322F30;
            background-color: #00aced;
            border-radius: 50%;
        }
        .repo a{
                 color: #80ab82;
                 text-decoration:none;
        }
        h3{
        	background:#bac7be;
        	padding: 15px;
            color:#e3e3e3;
            text-align: center;
            border-radius: 25px;
            text-transform:capitalize;
            margin-top: 0px;
        }
        .contact{
        	text-align: center;


        }
        .form div
               {
               margin:60px;
               background:#bac7ce;
               color:#778472;
               width:70%;
               padding:16px 4px 16px 0;
               border:none;
               font-size:13px;
               box-shadow:10px 10px 40px -14px #000
               }
        
        button{
        	float:right;
            background-color: #78788c;
            color:#bac7be;
            padding:8px 12px;
            border-style: none;
            cursor: pointer;
            transition:all.3s;
        }
        button:hover{
            background:#78788c;
            color:#4cbb17;
        }
        input{
               width:100%;
               text-align: center;
               padding:10px;
               box-sizing:border-box;
               background:none;
               outline:none;
               resize:none;
               border:0;
               font-family:'Montserrat',sans-serif;
               border-bottom:2px solid #
        }
        .fa-android:hover{
            color:#00aced;
        }
        .fa-android{
            color:#4cbb17;
        }

	</style>
</head>
<body>
    <div class= "content">
    <div class= "profile_pic">
    	<div class = "fade">
    		<center><img src="http://res.cloudinary.com/de14v8crs/image/upload/v1505404496/A.LEGEND_i6exeu.jpg" alternate = "fade picture"/></center>
    	</div>
    </div>
    <div class= "about">
        <h1>AMAECHI CHISOM</h1>
    	<h5>Born 21st of June | a web developer | Interns at hotels.ng</h5>
    	<p>A webdeveloper from Lagos state. Amateur at writing Python programs, PHP, Bootstrap, HTML and CSS while studying at the University of Lagos.</p>
    </div>
    <div class= "ending">
        <ul class="icons">
        	<li><a href="https://github.com/settings/profile"><i class="fa fa-github" aria-hidden="true"></i></a></li>
        	<li><a href="https://www.facebook.com/profile.php?id=100013286354606"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
        	<li><a href="https://hnginterns.slack.com/account/profile"><i class="fa fa-slack" aria-hidden="true"></i></a></li>
            <li><a href= "https://gonative.io/share/lzmbex" ><i class="fa fa-android" aria-hidden="true"></i>  App Link</a></li>
        </ul>
    </div>
    <div class = "repo">
            <h3>
            <a href= "https://github.com/amaechichisom"> Stage 1</a>
            </h3>
    </div>
    <div class="contact">
        <h2>CONTACT ME</h2>
    	<form class="form" method="GET" action="../../sendmail.php">
    		<input type="hidden" name="password" value="<?= $password; ?>" />
            <p>Name:</p><input type="text"  name="subject" placeholder="Please your name here.." required>
            <p>Email:</p><input type="email" name="to" placeholder="your contact" required>
            <p>Message:</p><input type="text" name="comment" placeholder="Commments" required>
            <button type="submit" name="sendmessage" class="sendmessage">Send Message</button>
            <div class="spant">
                <span class="fa fa-phone"></span>08143496579
                <span class="fa fa-email"></span>amaechilegend@gmail.com
           </div>
        </form>
    </div>
    

    </div>
</body>
</html>