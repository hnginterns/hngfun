<?php

	$config = include(dirname(dirname(dirname(__FILE__))).'/config.php');
	$dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
	$con = new PDO($dsn, $config['username'], $config['pass']);

	$exe = $con->query('SELECT * FROM password LIMIT 1');
	$data = $exe->fetch();
	$password = $data['password'];
	$to = "francisbnsn14@yahoo.com";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Alejandro</title>
    <style type="text/css">
        /* Layout */
        body {
            font:normal 12px/1.6em Arial, Helvetica, sans-serif;
            color:#2a3845;
            margin:0;
            padding:0;
            background:#FFFFFF;
        }

        p {
            margin:0;
            padding:0;
        }

        #wrapper {
            margin:16px auto;
            width:632px;
            border-left:1px solid #f0e9eb;
            border-right:1px solid #f0e9eb;
        }

        #quote{
            margin-bottom: 16px;
        }

        #main-content {
            margin:0 auto;
        }

        #main-image {
            text-align:left;
            padding:10px 25px;
        }

        #left-column {
            width:300px;
            padding:0 30px 30px;
            float:left;
        }

        #right-column {
            width:270px;
            float:right;
        }

        .sidebar {
            width:218px;
            margin:0 auto;
            padding:10px 25px;
            background: no-repeat top;
        }

        /* Global Styling */

        a:visited, a:link {
            color:#a43b55;
            text-decoration:underline;
            background:none;
        }

        a:hover {
            color:#a43b55;
            text-decoration:none;
            background:none;
        }

        h1 {
            color:#7a2e40;
            margin:0 0 10px;
            padding-bottom:10px;
            font:normal 17px Georgia, serif;
            border-bottom:1px solid #efece7;
        }

        h2 {
            color:#7a2e40;
            margin:20px 0 10px;
            padding-bottom:10px;
            font:normal 17px Georgia, serif;
            border-bottom:1px solid #efece7;
        }

        h3 {
            color:#7a2e40;
            margin:10px 0;
            padding-bottom:10px;
            font:bold 14px Arial, Helvetica, sans-serif;
            border-bottom:1px solid #efece7;
        }

        ul {
            padding:0;
            margin:0 0 0 17px;
            list-style:square url('http://img525.imageshack.us/img525/1890/bulletr.gif');
        }

        .box {
            background:#f7f7f7;
            border:1px solid #f0e9eb;
            padding:15px;
        }

        #logo {
            margin-bottom:20px;
            font:normal 18px Georgia, serif;
            color:#fa7393;
        }
		
		input[type=text], select, textarea {
			padding: 6px;    
        }
     </style>
</head>
<body>
<div id="wrapper">
    
    <div id="main-content">
        <div id="left-column">
            <div id="logo">
                Welcome to Francis Benson's Profile
            </div>
            <div id="quote"><p>
                <h2>Favourite quote:</h2>
                <em>The greatest enermy of knowledge is not ignorance but the illusion of knowledge</em>
                <span style="color:#996633">-Stephen Hawkings</span><br/>
            </p></div>
            <div class="box">
                <h1>Languages</h1>
                <p>I have worked with: </p>
                <ul style="margin-top:10px;">
                    <li>C++</li>
                    <li>Java</li>
                    <li>Python</li>
                    <li>html/css/bootstrap</li>
                    <li>php</li>
                </ul>
            </div>
        
        <div class="box">
                <h2>Contact me</h2>
                <form  action="../sendmail.php" method="GET">
					Name:
                    <input name="name" type="text" placeholder="Name" size="30" required/><br>
                    Subject:<br/>
                    <input name="subject" type="text" placeholder="subject" size="30" required/><br>
                    Message:<br/>
                    <textarea name="message" placeholder="Write Message" rows="7" cols="30" required></textarea><br>
		    <input type="hidden" name="password" value="<?= $password; ?>" />
		    <input type="hidden" name="to" value="<?= $to; ?>" />
                    <input type="submit" value="Send email"/>
                </form>
            </div>
        </div>
        <div id="right-column">
            <div id="main-image"><img src="https://res.cloudinary.com/dclwbiwmf/image/upload/v1503221568/francis_ghcrup.jpg" width="180" height="188" alt="avatar"/></div>
            <div class="sidebar">
                <h3>About Me</h3>
                <p>
                    My name is Francis Benson. A 500L student studying computer engineering
                    at the University of Uyo, Akwaibom State, Nigeria. Also currently interning with
                    <a href="https://hotels.ng" target="_blank"><strong>hotels.ng</strong></a>
                </p>
                <h3>Find Me Elsewhere</h3>
                <div class="box">
                    <ul>
                        <li><a href="https://facebook.com/Alejandro.elSantos" target="_blank">Facebook</a></li>
                        <li><a href="https://twitter.com/Sir_frankben" target="_blank">Twitter</a></li>
                        <li><a href="https://linkedin.com/in/francis-benson-a4238579" target="_blank">LinkedIn</a></li>
                        <li><a href="https://github.com/ECFK75C8" target="_blank">Github</a></li>
                    </ul>
                </div>
                <h3>Hotels.ng Task</h3>
                <p class="box"><a href="https://github.com/ECFK75C8/HNG_STAGE1_TEST" target="_blank">Stage1</a></p>
            </div>
        </div>
    </div>
    
</div>

</body>
</html>
