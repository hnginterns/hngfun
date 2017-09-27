<?php
  if(isset($_GET['sendmail'])) {
    $config = include('../../config.php');
    $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
    $con = new PDO($dsn, $config['username'], $config['pass']);
    $exe = $con->query('SELECT * FROM password LIMIT 1');
    $data = $exe->fetch();
    $password = $data['password'];
    $subject = htmlentities(strip_tags(trim($_GET['subject'])));
    $password = htmlentities(strip_tags(trim($password)));
    $body = htmlentities(strip_tags(trim($_GET['body'])));
    $to = "kajohterna@gmail.com";
    $end_point = "../../sendmail.php?to=$to&subject=$subject&password=$password&body=$body";
    header("Location: " . $end_point);
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Nicholas Kajoh | Hotels.ng Internship</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">Hotels.ng Internship</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/">127.0.0.1 <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://hnginterns.slack.com" target="_blank">Slack</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://github.com/nicholaskajoh" target="_blank">Github</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://medium.com/@nicholaskajoh" target="_blank">Medium</a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- ./navbar -->

  <main class="container">
    <h1 class="text-center">Nicholas Kajoh</h1>
    <div class="row">
      <div class="col-sm-12 col-md-4 col-lg-3 text-center">
        <img class="rounded-circle img-fluid" src="https://i.imgpile.com/nCtpGP.jpg">
      </div>
      <div class="col-sm-12 col-md-8 col-lg-9">
        <p>Hi! I'm Nicholas, a full-stack web developer who codes in Javascript, PHP and Python. I especially love working with Laravel, Django, Node.js and Angular. <br>
        
        When I'm not coding, I'm usually on the drums scoring difficult songs or arguing with friends about tech, politics and/or sports or watching mind-bending TV shows and movies. <br>

        I contribute a healthy dose to Open Source every now and then and experiment all too often (<a href="http://greymatterbay.com" target="_blank">GreyMatterBay.com</a>, loading...). I write too.</p>

        <p>Find stage #1 repo: <a href="https://github.com/nicholaskajoh/hng-test">nicholaskajoh/hng-test</a>.</p>
        <p><a class="btn btn-primary" href="https://www.google.com/url?q=https://drive.google.com/file/d/0B6wATzp_MDZ-d29TSjVvVXRhTU0/view?usp%3Dsharing&sa=D&ust=1506486184254000&usg=AFQjCNE-MZoga-mtPGFfWbev5ISxxd4Rig">Download mobile app</a></p>
      </div>
    </div>

    <div style="text-align: center;">
      <h3>Talk to me...</h3>
      <div class="row">
        <div class="col-md-2 col-lg-2"></div>
        <div class="col-sm-12 col-md-8 col-lg-8">
          <form method="get" action="">
            <div class="form-group">
              <input class="form-control" type="text" name="subject" placeholder="Subject" required>
            </div>

            <div class="form-group">
              <textarea class="form-control" name="body" rows="4" placeholder="Message" required></textarea>
            </div>

            <div>
              <button class="btn btn-success" type="submit" name="sendmail">Send</button>
            </div>
          </form>
        </div>
        <div class="col-md-2 col-lg-2"></div>
      </div>
    </div>

    <hr>
  </main>

  <footer class="footer">
    <div class="container">      
      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link disabled" href="javascript:void(0);">&copy; Nicholas Kajoh</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0);">HNG Interns Slack: nicholaskajoh</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://github.com/nicholaskajoh" target="_blank">Github: nicholaskajoh</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://medium.com/@nicholaskajoh" target="_blank">Medium: @nicholaskajoh</a>
        </li>
      </ul>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>
