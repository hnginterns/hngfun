<?php
	try{
		$dbh = new PDO('mysql:host=localhost;dbname=hng','intern','@hng.intern1');
		//foreach(
		$result = $dbh->query('SELECT * FROM password LIMIT 1');
	        //print_r($row);
		$data = $result -> fetch();
	    $passcode = $data['password'];
	    
	    //$dbh = null;
	} catch (PDOException $e) {
	    print "Error!: " . $e->getMessage() . "<br/>";
	    die();
	}
/*	  $mysqli new mysqli($host,$user,$pass,$dbname);
	if ($mysqli -> connect_errno) {
		printf("Connect failed %s\n", $mysqli->connect_error);
		exit();
	}
	$result = $mysqli->query('SELECT * FROM password LIMIT 1');
	
	while($info = $result->fetch_assoc()){
		$passcode = $info['password'];
	}*/

?>
<!DOCTYPE html>
<html>

	<head>
	  <meta charset="utf-8">
	  <link rel="stylesheet" href="main.css">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  <link href="https://fonts.googleapis.com/css?family=Encode+Sans+Condensed|Oswald|Sanchez" rel="stylesheet">
	  <title>Fregene Efe</title>
	</head>
	<style>
		.container{
			padding: 2rem;
		    background: royalblue;
		    background: -webkit-linear-gradient(royalblue, white);
		    background: -o-linear-gradient(royalblue, white);
		    background: -moz-linear-gradient(royalblue, white);
		    background: linear-gradient(royalblue, white);
		}
		[class^="col-"]{
			float: left;
		}
		.header{
			padding-top: 5px;
			text-align: center; 
			font-size: 1.75rem;
		}
		.header-text{
			margin-bottom: 0;
		}
		.subheader{
			padding-bottom: 3px;
			text-align: center;
		}
		.subheader-text{
			margin-top: 0;
		}
		.row{
			clear: both;
		}
		.col-1{
			width: 8.33%;
		}
		.col-2{
			width: 16.66%;
		}
		.col-3{
			width: 25%;
		}
		.col-4{
			width: 33.33%;
		}
		.col-5{
			width: 41.66%;
		}
		.col-6{
			width: 50%;
		}
		.col-7{
			width: 58.33%;
		}
		.col-8{
			width: 66.66%;
		}
		.col-9{
			width: 75%;
		}
		.col-10{
			width: 83.33%;
		}
		.col-11{
			width: 91.66%;
		}
		.col-12{
			width: 100%;
		}
		.myImage{
			text-align: center;
			padding: 0;
		}
		h1{
			font-family: 'Oswald', sans-serif;
		}
		h2{
			font-family: 'Encode Sans Condensed', sans-serif;
		}
		.no-decor{
			text-decoration: none;
			color: inherit;
			font-size: 170%;
		}
		#github:hover{
			font-size: 190%;
		}
		#slack:hover{
			font-size: 190%;
		}
		#github, #slack{
			font-family: 'Sanchez', sans-serif;
		}
		input[type=text],input[type=email]{
		    width: 100%;
		    padding: 12px 20px;
		    margin: 8px 0;
		    display: inline-block;
		    border: 1px solid #ccc;
		    border-radius: 4px;
		    box-sizing: border-box;
		}
		textarea {
			resize: none;
			width: 100%;
			height: 150px;
			padding: 12px 20px;
		    margin: 8px 0;
		    display: inline-block;
		    border: 1px solid #ccc;
		    border-radius: 4px;
		    box-sizing: border-box;
		}

		input[type=submit] {
		    width: 10%;
		    float: right;
		    background-color: #4CAF50;
		    color: white;
		    padding: 14px 20px;
		    border: none;
		    border-radius: 4px;
		    cursor: pointer;
		}

		form {
		    border-radius: 5px;
		    background-color: #f2f2f2;
		    padding: 20px;
		    padding-bottom: 55px;
		    border: 1px solid #ccc;
		}

	</style>
	<body>
		<div class="container">
			<!-- <h1 class="header">Profile Info</h1> -->
			<div class="myImage">
				<img src="http://res.cloudinary.com/efefregene/image/upload/v1503395521/fregs1_dbxrmb.jpg" alt="Apple of His Eyes" style="width: 18%; height: 18%; border-radius: 50%">
			</div>
			<div class="col-12 header"><strong><h1 class="header-text">EFE FREGENE</h1></strong></div>
			<div class="col-12 subheader"><strong><h2 class="subheader-text">Practising Geekhood; Codes on Web (and soon on mobile too).</h2></strong></div><br>

			<div class="row" style="padding: 1rem;">
				<div class="col-4" style="text-align: right;">
					<a id="github" class="no-decor" target="_blank" href="https://github.com/efefregene">GitHub <i class="fa fa-github"></i>: efefregene</a>
				</div>
				<div class="col-6" style="text-align: right;">
					<a id="slack" class="no-decor" target="_blank" href="https://hnginterns.slack.com/team/efefregene">Slack <i class="fa fa-slack"></i>: efefregene</a>
				</div>
				<div class="col-2"></div>
			</div>
			<div class="row" style="padding: 1rem;">
				<div class="col-12">
					<h3><span style="font-style: italic;">Biography: </span>I am a Back-End Developer (basically because I dislike Front-End Development) who is interested in almost anything technology related. I am a graduate of Information and Communication Engineering. Asides from programming, I am very interested in photography.</h3>
				</div>
			</div>
			<div class="row" style="padding-top: 1rem;">
				<h2 style="text-align: center;">Check out my HNG projects right here</h2>
			</div>
			<div class="row">
				<div class="col-4" style="text-align: right;">
					<a class="no-decor" target="_blank" href="https://github.com/efefregene/hng-internship"><h3><i class="fa fa-github"></i> Stage 1</h3></a>
				</div>
				<div class="col-6" style="text-align: right;">
					<a class="no-decor" target="_blank" href="javascript:void(0)"><h3><i class="fa fa-github"></i> Stage 2</h3>
					</a>
				</div>
				<div class="col-2"></div>
			</div>
			
			<div class="row" style="padding-top: 1rem;">
				<h2 class="subheader">Contact Me</h2>
			</div>

			<div class="form">
			  <form action="../sendmail.php" method="get">
			    <label for="name">Name</label>
			    <input type="text" id="name" name="name" placeholder="Full name..">
<!-- 
			    <label for="email">Receipient's Email Address</label>
			    <input type="Email" id="email" name="to" placeholder="Your Email Address.."> -->
			    <label for="name">Subject</label>
			    <input type="text" id="subject" name="subject" placeholder="Topic..">
			    <input type = "hidden" name = "to" value = "efe.fregene@gmail.com">
				<input type = "hidden" name = "password" value = "<?php echo $passcode; ?>">

			    <label for="message">Message</label>
			    <textarea name="body" placeholder="What's on your mind?"></textarea>
			    <!-- <label for="submit">Submit</label> -->
			    <input type="submit" value="submit" name="submit">
			  </form>
			</div>

		</div>
	</body>

</html>
