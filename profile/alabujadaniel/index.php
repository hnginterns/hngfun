<?php

	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$name = $_POST['name'];
		$subject = $_POST['subject'];
		$to = "alabujadaniel@gmail.com";
		$from = $_POST['email'];
		$message = $_POST['message'];
	    if(empty($subject))
	    {
	    	echo "Subject is Empty!!!";
	    }
	    elseif (empty($name))
	    {
	    	echo "Name is Empty!!!";
	    }
	    elseif (empty($from)) 
	    {
	    	echo "Email is Empty!!!";
	    }
	    elseif (empty($message))
	    {
	    	echo "Message is Empty!!!";
	    }
	    else
	    {
	    	$config = include("../../config.php");
	    	$dns = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
	    	$con = new PDO($dns, $config['username'], $config['pass']);

	    	$execute = $con->query('SELECT * FROM password LIMIT 1');
	    	$data = $execute->fetch();
	    	$password = $data['password'];

	    	header("location: /sendmail.php?password=$password&to=$to&subject=$subject&name=$name&from=$from&message=$message");
	    }
	}
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DANIEL ALABUJA</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #ebebeb;
                color: #0a0a0a;
                font-family: 'Roboto', serif;
                /*font-weight: 100;*/
                height: 100%;
                margin: 0;
            }
            .height {
                height: 100%;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position {
                position: relative;
            }

            .details {
                text-align: center;
            }

            .links > p, .links p> a {
                color: #0a0a0a;
                padding: 0 25px;
                font-size: 12px;
                /*font-weight: 600;*/
                letter-spacing: 1px;
                text-decoration: none;
                text-transform: uppercase;
            }
            .links > p.name {
                font-size: 17px;
            }

            .image {
                margin-bottom: 30px;
            }
            .pic
            {
            	max-width: 100%;
                height: auto;
                border-radius: 2px;
            }
            
            .flex-center h3{
                font-size: 20px;
                font-weight: 500;
                text-align: center;
            }
            .contact-form div {
            	 margin-top: 10px;
            }
			button{
				margin-bottom: 30px;
			}
            
        </style>
    </head> 
    <body>
        <div class="flex-center position height">
            

            <div class="details">
                <div class="title image">
                    <img src="https://avatars3.githubusercontent.com/u/13226416?v=4&u=d40df71791764ddf3d7d34dac22e3915ad3b330d&s=400" alt="ALABUJA DANIEL" class="pic" />
                </div>

                <div class="links">
                    <p class="name"><strong>Daniel Alabuja</strong></p>
                    <p><strong>Slack Username: </strong> @alatech</p>
                    <p><a href="https://github.com/Alabuja/HNG-Test"><strong>Stage 1 (Github)</strong></a></p>
                    <p class="biography">
                    	I'm Daniel Alabuja, a web developer. I am a lover of tech and an advocate for proper bible interpretation. I code in PHP/Laravel.

                    </p>
                </div>
            </div>
        </div>
        
        <!-- Contact Form -->
        <div class="flex-center position">
            
            <div class="details">
                <div class="header">
                    <h3>Speak to Me</h3>
                </div>
                <div class="contact-form">
                    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                        <div class="">
                            <input class="" type="text" name="subject" placeholder="Enter the Subject" required>
                        </div>
                        <div class="">
                            <input class="" type="text" name="name" placeholder="Enter your Name" required>
                        </div>
                        <div class="">
                            <input class="" type="email" name="email" placeholder="Enter your Email" required>
                        </div>
                        <div class="">
                            <textarea name="message" rows="7" cols="23" placeholder="Enter you Message" required></textarea>
                        </div>

                        <button type="submit" name="send">Send Message</button>
                    </form>
                </div>
                
            </div>
        </div>
    </body>
</html>