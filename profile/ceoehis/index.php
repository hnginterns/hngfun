<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];

    $name = $_POST['name'];
    $to = 'ceo.ehis@outlook.com';
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    if($name == '' || $name == ' ') {
      $error[] = 'Message cannot be empty!';
    }
    if($subject == '' || $subject == ' ') {
      $error[] = 'Message cannot be empty!';
    }
    if($message == '' || $message == ' ') {
      $error[] = 'Message cannot be empty!';
    }

    if(empty($error)) {

      $config = include(dirname(dirname(dirname(__FILE__))).'/config.php');
      $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
      $con = new PDO($dsn, $config['username'], $config['pass']);

      $exe = $con->query('SELECT * FROM password LIMIT 1');
      $data = $exe->fetch();
      $password = $data['password'];

      $uri = "/sendmail.php?to=$to&body=$message&subject=$subject&password=$password";

      header("location: $uri");

    }

  }

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celestine Ekoh-Ordan's profile | hng intern</title>
    <!-- fontsawesome cdn-->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- my own stylesheet -->
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>
    <main>
        <section>
            <h1>Celestine Ekoh-Ordan</h1></section>
        <section class="middle middle-margin">
            <div class="img-left">
                <img src="https://res.cloudinary.com/do8buqscj/image/upload/c_scale,w_909/v1503588840/IMG_20170115_150434_po70vm.jpg" class="img-responsive img-circle" alt="celestine">
            </div>
            <article class="middle">
                <p>Hi, Celestine Ekoh-Ordan here.</p>
                <p>I am a self-taught front-end web developer. I love thinking up creative solutions to generic problems. </p>
                <p>Building my skills with the Javascript language</p>
                <p>I'm probably watching a football match or gaming when I'm not coding away at my pc keyboard.</p>
                <p>Plus, I make mean noodles!</p>
                <p>I'm social: </p>
                <div class="social">
                    <a href="https://github.com/ceoehis"><i class="fa fa-github-square fa-2x"></i></a>
                    <a href="https://facebook.com/ceo.ehis"><i class="fa fa-facebook-square fa-2x"></i></a>
                    <a href="https://twitter.com/ceo_ehis"><i class="fa fa-twitter-square fa-2x"></i></a>
                    <a href="https://ceoehis.github.io"><i class="fa fa-globe fa-2x"></i>
                    </a>
                </div>
            </article>
            <form method="POST" action="index.php">
                <label>Name</label>
                <input name="name" id="name" placeholder="e.g John Doe" required>
                <label>Subject</label>
                <input name="subject" id="subject" type="text" placeholder="e.g Mean noodles" required>
                <label>Message</label>
                <textarea name="message" id="message" placeholder="e.g How about the noodles you talked about earlier" required></textarea>
                <input id="submit" name="submit" type="submit" value="SEND">
            </form>
        </section>
    </main>
</body>

</html>