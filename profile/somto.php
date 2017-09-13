<?php
    if (isset($_GET['sendmessage'])) {
        $config = include('../config.php');
        $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
        $con = new PDO($dsn, $config['username'], $config['pass']);
        $exe = $con->query('SELECT * FROM password LIMIT 1');
        $data = $exe->fetch();
        $password = $data['password'];
        $subject = htmlentities(strip_tags(trim($_GET['subject']))) || 'HEY THERE';
        $password = htmlentities(strip_tags(trim($password)));
        $body = htmlentities(strip_tags(trim($_GET['body'])));
        $to = "awotunde.emmanuel@gmail.com";
        $location = "../../sendmail.php?to=$to&subject=$subject&password=$password&body=$body";
        header("Location: " . $location);
    }
 ?>   

<html><head>
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<title>Somtos profile</title>
</head>
<body>
		<nav>
			
		</nav>
		

		<div class="back">
			<div class="header">
  <span  style="font-size: 0.8em">@somto <i class="fa fa-slack"></i>, @virgincodes <i class="fa fa-github"></i></span>
  <ul id="d" style="      list-style: none;
    display: inline-flex;
    text-align: center;
    margin: 0;
    width: 42%;
    margin-left: 29%;
    margin-right: 33%;
    padding: 0;
    margin-top: 32px;
    margin-bottom: 20px;
    color: white;" class="social">
        <li><a href="mailto:somto.achu5@gmail.com" title="Message me?" target="_blank"><i class="fa fa-envelope"></i></a></li>
        
        <li><a href="https://medium.com/@somto.achu5?source=search-popover" title="@somto" target="_blank"><i class="fa fa-medium"></i></a></li>
        <li><a href="https://github.com/virgincodes" title="@somto" target="_blank"><i class="fa fa-github"></i></a></li>
        <li><a href="https://instagram.com/kingsomto_02_01/" title="@somto" target="_blank"><i class="fa fa-instagram"></i></a></li>
        
  </ul>
</div>
<style type="text/css">
	
	#d li{
		margin: 0px 20px
	}

	#d li a {
		color: antiquewhite
	}

</style>
				<img src="https://firebasestorage.googleapis.com/v0/b/dripple-82679.appspot.com/o/me.JPG?alt=media&token=1d5b174f-9917-4d2a-b45e-83eb15517dbe">
				<h1>
					Achu Somto
				</h1>
				<h3>
					Designer .Programmer .Creative .Innovator
				</h3>
				<p>
					Cool developer,looking to work on big projects and contribute to the community
				</p>
		</div>
		<div style="
			width: 100vw;
			height: 150px;
			background:lightcoral;
			padding-top: 59px;
		">
			<p style="
    display: inline-block;
    text-align: center;
    width: 100vw;
    color: aliceblue;
    font-size: 25px;
">
				Designing the future one &lt; div&gt; a time
			</p>
		</div>
		<div>
			<h4 style="
        text-align: center;
    float: left;
    width: 38vw;
    padding: 7% 0px;
    font-size: xx-large;
    color: lightcoral;
">Things i do</h4>
			<ul style="
    float: right;
    width: 50vw;
">
				<li><p>Angular </p></li>
				<li><p>Laravel</p></li>
				<li><p>Node</p></li>
				<li><p>Ionic</p></li>
				<li><p>Python</p></li>
				<li><p>Android SDK</p></li>
				<li><p>TenserFlow</p></li>
			</ul>
		</div>
		<div>
			
          <form class="contact" action="http://hng.fun/profile/somto.php" method="get">
            <p class="contact-title">Send Me a Mail</p>
            <input type="text" name="subject" placeholder="subject" required>
            <textarea rows="2"  name="body" placeholder="type your message here" required></textarea><br>
            <button type="submit" name="sendmessage" class="button">Send Mail</button>
          </form>
		</div>



<style type="text/css">
	body{
		padding: 0;
		font-weight: 100;
		margin: 0;
		font-weight: 100;
    	font-family: monospace;

	}

	ul{
		color: lightcoral;
	}

	ul p{
		color: black
		/* margin-left: 39px; */
	}

	.back{
		background: url('https://firebasestorage.googleapis.com/v0/b/dripple-82679.appspot.com/o/back.png?alt=media&token=77f23a7b-0b48-415f-9bb7-5ecea0bfcac6');
		color: white;
		text-align: center;
	    padding: 90px
	}

	.back img{
		height: 100px;
		width: 100px;
		border-radius: 50%
	}

	 
    textarea
    {
      color: #489797;
      font: normal normal bold 15px/50px arial, sans-serif;
      border: none;
      width: 80%;
      margin-top: 5%;
      border-bottom: 1px solid aqua;
      -webkit-transition: all .35s ease-in-out .5s;
      transition: all .35s ease-in-out .5s;
    }
    input{
        width: 80%;
        margin-top: 5%;
        color: #489797;
        font: normal normal bold 15px/50px arial, sans-serif;
        border: none;
        border-bottom: 1px solid aqua;
        -webkit-transition: all .35s ease-in-out .5s;
        transition: all .35s ease-in-out .5s;
    }
    .contact{
      margin-top: 5%;
      padding: 10px;
      border: 1px solid #ddd;
    }
    .contact-title{
      margin: 0px;
    }
    ::-webkit-input-placeholder { /* WebKit, Blink, Edge */
    color:    #rgba(107, 156, 156, 0.5);
    opacity: 0.5;
    }
    :-moz-placeholder { /* Mozilla Firefox 4 to 18 */
       color:    #rgba(107, 156, 156, 0.5);
       opacity: 0.5;
    }
    ::-moz-placeholder { /* Mozilla Firefox 19+ */
       color:    #rgba(107, 156, 156, 0.5);
       opacity: 0.5;
    }
    :-ms-input-placeholder { /* Internet Explorer 10-11 */
       color:    #rgba(107, 156, 156, 0.5);
       opacity: 0.5;
    }
    ::-ms-input-placeholder { /* Microsoft Edge */
       color:    #rgba(107, 156, 156, 0.5);
       opacity: 0.5;
    }
    input:placeholder {
    }
    input:focus {
        width: 100%;
        border-bottom: 1px solid aqua;
    }

    textarea:focus {
        width: 100%;
        border-bottom: 1px solid aqua;
    }

    button{
   	width: 135px;
    height: 40px;
    border: 0;
    margin: 10px;
    color: white;
    background: lightcoral;
    }

    form{
    	    display: inline-block;
    width: 46%;

    }
</style>



</body></html>
