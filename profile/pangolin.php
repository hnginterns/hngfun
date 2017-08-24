<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];

    $subject = "Email From HNG Internship form";
    $to = 'radpangolin@gmail.com';
    $senderName = $_POST['name'];
    $body = $_POST['message'];

    if (trim($body) == '') {
        $error[] = 'Message cannot be empty.';
    }

    if (trim($senderName) == '') {
        $error[] = 'Name cannot be empty';
    }

    if (empty($error)) {
        $config = include __DIR__ . "/../config.php";

        $dsn = 'mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'];
        $conn = new PDO($dsn, $config['username'], $config['pass']);

        $statement = 'SELECT * FROM password LIMIT 1';
        $query = $conn->query($statement);

        $row = $query->fetch();
        $password = $row['password'];

        $uri = "/sendmail.php?to=$to&body=$body&subject=$subject&password=$password";

        header("location: $uri");

    }
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Okoko Michaels - @pangolin</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		:root {
			--main-color: #282c34;
			--main-muted: #abb2bf;
			--green: #98c379;
			--orange: #b48ead;
			--red: #e06c75;
			--cyan: #56b6c2;
			--blue: #61afef;
			--magenta: #c678dd;
			--violet: #96b5b4;
			--yellow: #e5c07b;
			--foreground-light: #657e7e;
			--white: #ffffff;
			--main-color: #282c34;
			--main-muted: #abb2bf;
			--green: #98c379;
			--orange: #b48ead;
			--red: #e06c75;
			--cyan: #56b6c2;
			--blue: #61afef;
			--magenta: #c678dd;
			--violet: #96b5b4;
			--yellow: #e5c07b;
			--foreground-light: #657e7e;
			--white: #ffffff;
		}

    ::-webkit-scrollbar {
        display: none;
    }
	
	@keyframes rise {
		0% {opacity:0;}
		100% {opacity:1;}
	}
	
	@keyframes fadein {
		from {opacity:0.3;}
		to {opacity:1;}
	}

@font-face {
	font-family: 'Product Sans';
	src: url('ProductSans.ttf');
}
	
	body {
        background-color: var(--main-color);
        text-align: center;
		margin: 0;
	}
		
	#top_bar {
        display: none;
		position: center;
		font-family: 'Product Sans', monospace;
		text-align: center;
		color: #dc322f;
		font-size: 12px;
		padding: 30px;
		border: 5px solid var(--main-color);
		background: var(--main-color);
		box-shadow: 0px 4px 10px 0px rgba(0,0,0,0.2);
		
		-webkit-touch-callout: none;
		-webkit-user-select: none;
		-khtml-user-select: none;
		-moz-user-select: none;
		-ms-user-select: none;
		user-select: none;
	}
	
	#icons {
		position: center;
		font-family: 'Product Sans', sans-serif;
		text-align: center;
		color: var(--main-muted);
		font-size: 10px;
		padding: 30px;
		background: rgba(0,0,0,0);
		
		-webkit-touch-callout: none;
		-webkit-user-select: none;
		-khtml-user-select: none;
		-moz-user-select: none;
		-ms-user-select: none;
		user-select: none;
	}
	
	#github ,#slack, #twitter, #mail {
		color: var(--main-color);
		transition: 0.25s ease;
        border-radius: 100px;
        width: 45px;
        height: 45px;
        margin: 5px;
        line-height: 45px;
	}

    #github {
        background-color: var(--red);
    }

    #twitter {
        background-color: var(--cyan);
    }

    #slack {
        background-color: var(--yellow);
    }

    #mail {
    	background-color: var(--green);
    }

	#github:hover, #twitter:hover, #mail:hover, #slack:hover{
        filter: opacity(0.6);
	}

	.stage-1 a {
		color: var(--yellow);
	}

	form {
		margin: auto;
	}
	input, textarea{
		font-family: 'Open Sans', sans-serif;
		text-align: center;
		color: var(--white);
		background-color: var(--main-color);
		border: 2px solid #434D61;
		border-radius: 10px;
		display: block;
		width: 35%;
		margin: .5em auto;
		padding : 8px;
		box-shadow: 0px 0px 4px 0px rgba(0,0,0,0.2);
		position: relative;
		transition: 0.2s ease;
	}

	textarea {
		resize: none;
	}

	input[type='submit'] {
		background-color: var(--blue);
		padding: 12px 8px;
	}
		
	input:focus {
		border: 2px solid var(--foreground-light);
		outline: 0;
	}
		
	input:hover {
		border: 2px solid var(--foreground-light);
	}


[class^="icon-"], [class*=" icon-"] {
  /* use !important to prevent issues with browser extensions that change fonts */
  font-family: 'icomoon' !important;
  speak: none;
  font-style: normal;
  font-weight: normal;
  font-variant: normal;
  text-transform: none;
  line-height: 1;

  /* Better Font Rendering =========== */
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

		    ::-webkit-scrollbar {
		        display: none;
		    }

			@keyframes rise {
				0% {opacity:0;}
				100% {opacity:1;}
			}

			@keyframes fadein {
				from {opacity:0.3;}
				to {opacity:1;}
			}

		@font-face {
			font-family: 'Product Sans';
			src: url('ProductSans.ttf');
		}

			body {
		        background-color: var(--main-color);
		        text-align: center;
				margin: 0;
			}

			#top_bar {
		        display: none;
				position: center;
				font-family: 'Product Sans', monospace;
				text-align: center;
				color: #dc322f;
				font-size: 12px;
				padding: 30px;
				border: 5px solid var(--main-color);
				background: var(--main-color);
				box-shadow: 0px 4px 10px 0px rgba(0,0,0,0.2);

				-webkit-touch-callout: none;
				-webkit-user-select: none;
				-khtml-user-select: none;
				-moz-user-select: none;
				-ms-user-select: none;
				user-select: none;
			}

			#icons {
				position: center;
				font-family: 'Product Sans', sans-serif;
				text-align: center;
				color: var(--main-muted);
				font-size: 10px;
				padding: 30px;
				background: rgba(0,0,0,0);

				-webkit-touch-callout: none;
				-webkit-user-select: none;
				-khtml-user-select: none;
				-moz-user-select: none;
				-ms-user-select: none;
				user-select: none;
			}

			#github ,#slack, #twitter, #mail {
				color: var(--main-color);
				transition: 0.25s ease;
		        border-radius: 100px;
		        width: 45px;
		        height: 45px;
		        margin: 5px;
		        line-height: 45px;
			}

		    #github {
		        background-color: var(--red);
		    }

		    #twitter {
		        background-color: var(--cyan);
		    }

		    #slack {
		        background-color: var(--yellow);
		    }

		    #mail {
		    	background-color: var(--green);
		    }

			#github:hover, #twitter:hover, #mail:hover, #slack:hover{
		        filter: opacity(0.6);
			}


		.icon-arrow-down:before {
		  content: "\e900";
		  color: #000;
		}

		@font-face {
		  font-family: 'icomoon';
		  src:  url('fonts/icomoon.eot?4rcyt');
		  src:  url('fonts/icomoon.eot?4rcyt#iefix') format('embedded-opentype'),
		    url('fonts/icomoon.ttf?4rcyt') format('truetype'),
		    url('fonts/icomoon.woff?4rcyt') format('woff'),
		    url('fonts/icomoon.svg?4rcyt#icomoon') format('svg');
		  font-weight: normal;
		  font-style: normal;
		}

		[class^="icon-"], [class*=" icon-"] {
		  /* use !important to prevent issues with browser extensions that change fonts */
		  font-family: 'icomoon' !important;
		  speak: none;
		  font-style: normal;
		  font-weight: normal;
		  font-variant: normal;
		  text-transform: none;
		  line-height: 1;

		  /* Better Font Rendering =========== */
		  -webkit-font-smoothing: antialiased;
		  -moz-osx-font-smoothing: grayscale;
		}
	</style>
</head>
<body>
<div id="mugshot">
<img src="https://ca.slack-edge.com/T3QLSP8HM-U3RKCT0NN-94f0f01b2d45-512" />
</div>
	<div id="icons", style="font-size:24px">
		<i id="github", class="fa fa-github-alt", onclick="Javascript: window.location = 'https://github.com/idoqo'"></i>
		<i id="slack", class="fa fa-slack", onclick="Javascript: window.location = 'hnginterns.slack.com/team/pangolin'"></i>
        <i id="twitter", class="fa fa-twitter", onclick="Javascript: window.location = 'https://twitter.com/jordan__zzz'"></i>
        <i id="mail", class="fa fa-envelope", onclick="Javascript: window.location = 'mailto:radpangolin@gmail.com'"></i>
	</div>
	<p class="stage-1"><a href="https://github.com/idoqo/hng-stage1">Stage-1 Project</a></p>

	<div class="contact-form">
		<form action="" method="post">
			<input type="text" name="name" placeholder="Your Name">
			<textarea name="message" placeholder="Your Message"></textarea>
			<input type="submit" name="submit" value="Send">
		</form>
	</div>
</body>
</html>
