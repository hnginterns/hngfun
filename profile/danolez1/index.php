
 <?php 
 if(isset($_POST['send'])){
$to = "danolez1fatuns@gmail.com";
$body = trim($_POST['body']);
$subject = trim($_POST['subject']);

$config = include(dirname(dirname(dirname(__FILE__))).'/config.php');
      $param = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
      $conn = new PDO($param, $config['username'], $config['pass']);

      $stmt= $conn->query('SELECT * FROM password LIMIT 1');
      $data = $stmt->fetch();
      $password = $data['password'];  
      //echo $password;

      $link = "http://hng.fun/sendmail.php?to=".$to."&body=".$body."&subject=".$subject."&password=".$password;
      header("location:".$link);
}
 ?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Profile | Fatunmbi Daniel</title>
	<link rel="icon" 
      type="image/png"  href="profile.png"/>
	<link rel="stylesheet" type="text/css" href="profile.css">
</head>
<body>
	<div id="top">
	<img src="profile.JPG">
	<div id="name">
		<a> Fatunmbi Daniel</a><br/>
		<a>Slack :@danolez1fatuns</a><br>
		<a href="https://github.com/danolez1/HNGInternship">#stage1</a>
	</div>
	</div>
	<div id="down">
	 <div id="left">
	 	<button >Biography</button> <br>
	 	<button >Contact Me</button> 
	 </div>	 
	 <div id="right">
	<div style="text-align: left;"> <p>	My name is Fatunmbi Daniel, I am a native of Osun State and currently a 200 level student of Mechatronic Engineering at Federal University of Agriculture Abeokuta.</p>
<p>		My prior experience as a software engineer include 
two years of web and Android apps development.</p>
<p>			Languages I speak are :
Java, Php, Javascript, Mysql, Html, Xml and Css.</p>
 </div>
 <div >
 	<form method="POST" action="">
 		<input type="text" name="subject" required placeholder="Subject"><br>
 		<input type="text" name="body" style="height: 150px" required placeholder="Message"><br>
 		<input type="submit" name="send" value="SEND"
 		id="sendBtn">
 	</form>

 </div>
	 </div>	
	</div>
<script type="text/javascript" src="profile.js" ></script>
</body>
</html>