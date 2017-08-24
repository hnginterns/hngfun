<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		$error = [];

		$subject = $_POST['name'];
		$to = 'suleimanmajiyd@gmail.com';
		$body = $_POST['message'];

		if ($subject == '' || $subject == ' '){
			$error[] = 'Please enter your name';
		}
		if (empty($error)){
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

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!-- <meta http-equiv = "refresh" content="5"> -->
    <meta name="viewpoint" content="width = device-width, initial-scale = 1.0">
    <title>Suleiman Abdulmajeed</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="shortcut icon" href="./statics/favicon.ico">
  </head>
  <body>
    <div class="return">
      <a href="http://hng.fun">hng.fun | </a>
      <a href="http://hng.fun/participants.php">participants |</a>
      <a href="http://hng.fun/projects.php">projects</a>


    </div>
    <div class="main-content">
      <div class="passport">

      </div>
      <div class="writing-area">
        <p>Hi, my name is Suleiman AbdulMajeed (@suleimanmajiyd), i'm 21, and i'm a programmer and web developer.</p>
        <p>I am proficient in Python, HTML5, CSS3, Javascript and jQuery.</p>
        <p>I also do a bit of C/C++ and recently i got introduced to Back-end Web Development</p>
        <p>I love reading and learning new things and i have a healthy interest cyber security and ethical hacking</p>
        <p>You can contact me by sending me an email below:</p>

      </div>
      <div class="send">
        <a href="https://github.com/majiyd/simple_php_hng_test1.git"><span>
          HERE'S A LINK TO MY TASK1 >>
        </span></a>
        <br><br><br>
        <form action="" method="post" enctype="text/plain">

				<?php if(isset($error) && !empty($error)): ?>
          <div style="text-align: center; padding:5px; background: red;">
            <ul style='list-style:none;'>
              <?php
                foreach ($error as $key => $value) {
                  echo "<li>$value</li>";
                }
              ?>
            </ul>
          </div>
        <?php endif; ?>



					<div>
          <label for="name">Name:</label>
          <input type="text" id="name" name="name">
          </div>
      <div>
        <label for="msg">Message:</label>
        <textarea id="msg" name="message"></textarea>
      </div>
      <div class="button">
        <button type="submit" name="submit">Send me an e-mail</button>
      </div>
        </form>



      </div>


    </div>
    <div class="footer">
      © 2017 Majiyd suleimanmajiyd@gmail.com
    </div>
  </body>

</html>
