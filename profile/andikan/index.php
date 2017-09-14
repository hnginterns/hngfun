<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];
    $subject = $_POST['subject'];
    $to  = 'kyrioxlamda@gmail.com';
    $body = $_POST['body'];
    if($body == '' || $body == ' ') {
      $error[] = 'Message cannot be empty.';
    }
    if($subject == '' || $subject == ' ') {
      $error[] = 'Subject cannot be empty.';
    }
    if(empty($error)) {
      $config = include(dirname(dirname(dirname(__FILE__))).'/config.php');
      $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
      $con = new PDO($dsn, $config['username'], $config['pass']);
      $exe = $con->query('SELECT * FROM password LIMIT 1');
      $data = $exe->fetch();
      $password = $data['password'];
      $uri = "/sendmail.php?to=$to&body=$body&subject=$subject&password=$password";
      header("location: $uri");
    }
  }
?>
<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>my profile</title>
	<link rel="stylesheet" type="text/css" href="hng_stage1.css">
	</head>
		<body align="center">
		
		<div>
		<h1>My profile</h1>
				<form class="mage">
					<table style="width:100%" border="0px">
					  <tr>
						<td>
							<img class="image" src="enact.jpg" alt="pic@andikan" title="Andikan Affiah" max-width="168px" height="280px" style="float:left;"></img>
									<div class="an">
								
									<ul>
										<li class="iii" align="left" border="0px"> 
										<p>   <b>Name:</b><i><span class="chan" title="My Name"> Andikan Affiah</span></i></p>
										
										<p>   <b>On_Slack:</b><i><span class="chan" title="Slack Username"> @andikan</span></i></p>
										
										<p>   <b>Facebook:</b><i><span class="chan" title="Facebook Username"> Kyriox Affiah</span></i></p>
										
										<p>   <b>Email:</b><i><span class="chan" title="KYRIOXLAMDA@GMAIL.COM"> Kyrioxlamda@gmail.com</span></i></p>
										
										<p>   <b>About myself:</b><i><span class="chan" title="more details" style="font-family: monospace;">I am from Ikono LGA in AkwaIbom state. I am currently a 200level student of the department of crop science in the university of uyo..<br>
										I love scripting and am a Beginner in Css,Html,Php and.. anything else you can think of.
										I love learning just "anything" that keeps me going...</span></i></p>
										</li>
									</ul>
						</td>
					  </tr>
					</table>		
			</form>
			<?php if(isset($error) && !empty($error)): ?>
					<blockquote style="text-align: left;padding:5px;background: #fcf6f6; border-left:15px solid red;">
						<ul style='list-style:none;'>
						<?php
							foreach ($error as $key => $value) {
							echo "<li>$value</li>";
							}
						?>
						</ul>
					</blockquote>
				<?php endif; ?>
				

			<div class="de"  >
			<a href="https://github.com/Enactor/HNG_Interns">
			<p class="pr">hng_stage1</p>
			</a>
			<form class="formus" action ="index.php" method = "POST" > 
			<h3>Send me a mail</h3>
			<input type="text" name ="subject" placeholder="Subject">
			<input type="text" name ="to" placeholder="email" value="kyrioxlamda@gmail.com" disabled>
			<textarea placeholder="input text here" name ="body"></textarea>
			<input class="submit" type="submit" value="submit">
			
			</form>
			</div>
		</div>
			
					</body>
</html>