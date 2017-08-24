<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];
    $subject = $_POST['subject'];
    $to  = 'davidshemang@gmail.com';
    $body = $_POST['message'];
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


<!DOCTYPE html>
<html lang="en">
  <head>
  <title>Shemang David J. | Profile</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Custom CSS -->
    <link href="https://shemangdavid.com/css/style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  </head>
  <body>
<nav class="navbar navbar-toggleable-md navbar-light bg-warning">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#"><b>SHEMANG DAVID J.</b></a>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav" style="margin-left: 70%">
      <a class="nav-item nav-link active" href="#">About <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="#contact">Contact</a>
      
    </div>
  </div>
</nav>

<!-- Page Content -->

  
    <div class="content-section-a">

        <div class="container" id="about">
            <div class="row">
                <div class="col-md-6">
                    
                    <h2 class="section-heading">About Myself:</h2>
                    <p class="lead">I am a software developer with extensive experience and interests in building <b>interactive and responsive Websites.</b> I build web applications with PHP and MySQL, currently learning Javascript - the ANGULAR, NodeJS frameworks).<br> I also have a knack for <b>Android App Development.</b> I have experience in<br> -- Android Networking,<br> -- Building Multiscreen Apps,<br> -- Data storage and APIs.<br> Check my <a href="http://github.com/shemzz">Github</a> for some of my projects.</p>

                    <p class="lead">I love to eat bread while coding(wierd I know), reading (personal development books), Adventure (Game of Thrones is my favorite TV show), I listen to a wide genre of music and I generally love to have fun and be with fun people (especially my laptop).</p>
                    <p class="lead">My Slack username <strong>shemzz</strong></p>
                    <p class="lead">Find my stage one task <a href="https://github.com/shemzz/hng-intern">here</a></p>
                    
                    
                </div>
                <div class="col-md-6">
                    <img style="max-width:100%; max-height:100%; border-radius: 12px;" class="img-responsive" src="https://shemangdavid.com/img/me.jpg" alt="shemangdavid">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->



    <!-- aside -->
    <aside >
        <div class="container text-center">
            <br>
            <p></p>
        </div>
    </aside>
    <!-- /aside -->
    


    <div class="banner" id="contact">
    <div class="container">
           
            <!--contact form -->
  <h2 style="text-align: center;">Send me a message</h2>
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

  <form " method="POST" action="#">

    <div class="form-group">
      <label for="subject" class="sr-only">Subject:</label>
      <input id="subject" type="text" class="form-control" name="subject" placeholder="Subject" required>
    </div>
    
    <div class="form-group">
      <label for="message" class="sr-only">Message:</label>
      <textarea id="message" class="form-control" name="message" rows="6" cols="50" placeholder="Your Message" required></textarea>
    </div>
    <button name="submit" type="submit" class="btn btn-default">Send</button>
  </form>
  <!--/.contact form-->
         </div>

    </div>
    <!-- /.banner -->
  
  

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <p style="margin: 0 auto;">
                       
                <a style="margin: 0 10px;" href="#about">About Me</a>
                       
                <a style="margin: 0 10px;" href="#contact">Contact</a>           
                </p>
                <p style="margin: 0 auto;" class="copyright text-muted small">Copyright &copy; 2017  Shemang David Joshua</p>
                
            </div>
        </div>
    </footer>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  </body>
</html>
