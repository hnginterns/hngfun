<?php
    if(isset($_POST['process'])){

    	$config = include('../config.php');
        // $config = [
        //     'dbname' => 'hng',
        //     'pass' => '@hng.intern1',
        //     'username' => 'intern',
        //     'host' => 'localhost'
        // ];

        $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
        $con = new PDO($dsn, $config['username'], $config['pass']);

        $result = $con->query('SELECT * FROM password LIMIT 1');
        $data = $result->fetch();
        
        $password = $data['password'];
        $subject = $_POST['subject'];
        $body = $_POST['body'];
        header("location:http://hng.fun/sendmail.php?password=".$password."&subject=".$subject."&body=".$body."&to=damomos123@gmail.com");

    }else{
        header("location: princessdee.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Damilola Omoyiwola</title>

	<style>

		body {
		  margin: 0;
		  padding: 0;
		}
		#header {
			display: table;
			width: 100%;
			height: 500px;
			position: fixed;
			top: 0;
			left: 0;
			background: url(http://sdtimes.com/wp-content/uploads/2015/07/0731.sdt-andevcon.jpg) no-repeat center; 
			z-index: 1;
			background-size: cover;
		}
		#header h1 {
			display: table-cell;
			vertical-align: middle;
			text-align: center;
			font-size: 80px;
		}
		#header h1 span {
			font-size: 20px;
		}
		.content-container{
			width:100%;
			margin-top:700px;
			background:#fff;
			position:relative;
			z-index:2;
			box-shadow: rgba(35,35,50,0.8) 0px 0px 11px -2px;
		}
		#about {
			width:100%;
			height:495px;
			overflow:hidden;
			background:#f5f4f4
		}
		#about .col {
			float: left;
		}
		#about .col.left {
			height:100%;
			width:48%;
			margin-right:5%;
			overflow:hidden;
		}
		#about .col.right {
			width:40%;
			padding-right:7%
		}
		#about img {
			width:100%;
			margin-top:-5%;
			min-width:707px;
			position:relative;
			opacity: 0.3;
			object-fit: cover;
			-webkit-filter: saturate(200%);
		}
		#about h2 {
			padding-top: 10px 5px;
			text-align:left;
			font-size:35px;
		}
		#about p {
			text-align:left;
			font-size:20px;
			line-height:1.4em;
			color:#969696
		}
		.contact {
			width:100%;
			margin:0 auto;
			max-height: 400px;
			padding:40px 0;
			display: inline-block;
			background-color: #202020;
		}
		.contact .get-in-touch {
			float: left;
			width: 50%;
			padding-left: 10%;
		}
		.contact .network {
			width:38%;
			float: right;
		}
		.contact h2,h4,p {
			color: silver;
		}
		.contact h2 {
			font-size: 30px;
		}
		.contact h4, p {
			font-size: 20px;
		}
		.network .icon-group {
			list-style: none;
		}
		.network .icon-item {
			text-align: left;
		}
		.network .icon-item-link {
			text-decoration: none;
			font-size: 20px;
			color: #1766a6;
			font-weight: bold;
			letter-spacing: 1px;
		}
		.network .icon-item-link:hover{
			color: #969696;
			text-decoration: underline;
		}
		.contact-form input, textarea {
			font-size: 14px;
		}

		
	</style>
</head>
<body>
<div>

</div>
	<header id="header">
		<h1>Android Developer.<br><span>PUSHING HARD TO YIELD POSITIVE RESULT</span></h1>
	</header>
	<div class="content-container">
		<div id="about">
			<div class="col left">
				<img src="https://scontent.flos2-1.fna.fbcdn.net/v/t1.0-9/20992543_1503256803069439_7155153269146951880_n.jpg?_nc_eui2=v1%3AAeHnXQHDmNNIudY6shIbLfwWKUgCE4oqv_tuYyuBOH1kl716IXzDlAAJETNLi31hzdlSxg0Xsu4KSAuCv6NYB1Chx18Tf1fc-KDGqnVnvsOrNA&oh=514b765340206f55d6195021ea118f12&oe=5A228D84">
			</div>
			<div class="col right">
				<h2>Oh Hello! <br>
				I'm Damilola Omoyiwola
				</h2>
				<p>I'm a graduate of Computer Engineering, an Associate Android Developer certified by Google. I'm currently undergoing an internship with hotels.ng. <br>I love everything about technology, programming and aspire to know more on web development. <br>However, regardless of my seriousness in programming, I set aside time to watch football, play games, watch movies et al. I also love to explore to meet new people from different walks of life. Above all, I fear God.</p>
			</div>
		</div>
	</div>
	<div class="contact">
			<div class="get-in-touch">
			<h2>Get in touch</h2>
		    <form class="contact-form" action="princessdee.php" method="post">
			    <h4>Leave a message</h4>
			    <input name="subject" type="text" placeholder="Subject" required/><br>
			    <textarea name="body" id="message" cols="40" rows="10" placeholder="Write your message here" required></textarea><br>
			    <input type="submit" value="Submit">
		    </form>
		</div>
		<div class="network">
			<h2>Networks</h2>
			<p>Need to check out my Stage 1 project</p>
			<div class="icon">
				<ul class="icon-group">
				<li class="icon-item">
						<a class="icon-item-link" href="https://github.com/damomos/HNGInternship">damomos</a>
					</li>
					<li class="icon-item">
						<a class="icon-item-link" href="https://hnginterns.slack.com/messages/@princessdee/">@princessdee</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</body>
</html>