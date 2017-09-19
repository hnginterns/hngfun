<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD

<?php

    $config = include('../config.php');
    $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
    $con = new PDO($dsn, $config['username'], $config['pass']);

    $exe = $con->query('SELECT * FROM password LIMIT 1');
    $data = $exe->fetch();
    $password = $data['password'];

    if (isset($_GET['sendmessage'])) {

        $subject = "Hello";
        $password = htmlentities(strip_tags(trim($password)));
        $body = htmlentities(strip_tags(trim($_GET['subject'])));
        $to = "dxelpraise@gmail.com";

        $location = "../sendmail.php?to=$to&subject=$subject&password=$password&body=$body";

        header("Location: " . $location);

    }

 ?>
<!DOCTYPE html>
<html>
<head>
 <title>david umoren</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
    
    @import url(https://fonts.googleapis.com/css?family=Open+Sans:700,400,300);
    body {
 
  font-family: 'Open Sans';
  font-size: 0.999em;
  margin: 1.5em 4em 0;
        background-color: 
    }
    a{text-decoration: none;}
 .img{
 border-radius: 8px;
 width: 50%;
 display: block;
       
 position:  relative;
  margin: 0 auto 3em;
  height: 200px;
  width: 200px;
  background-repeat: no-repeat;
  border-radius: 8px;
  
  background-size:  200px;
        
    }
    input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: none;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

    #contact textarea {
  height:100px;
  max-width:100%;
  resize:none;
}
.container {
 border-radius: 5px;
 background-color: #f2f2f2;
padding: 20px;
 margin-top: 40px;
 resize: none;
 margin-bottom: 30px;
  max-width:700px;
  width:80%;
  margin:0 auto;
  position:relative;
    
}

.MainContaner {
  margin: 0% 20%;
  background: white;
  padding: 5% 10%;
  height: auto ;
}
    img.Image {
  width: 90%;
  border-radius: 10px;
  margin-bottom: 20px;
}
    .bio{
        background-color:#f2f2f2;
    }
    
</style>
</head>
 
    <body>
        <div class="MainContaner">
      <img src="https:///avatars3.githubusercontent.com/u/18211098?v=4&u=19f756c2f4d3947b1f567a5008584a37c3df5042&s=400" class="image" alt=""></img>
     <div class="bio">
          <h4 style="text-align:center">Hello i'm David umoren</h4>
        <h4>I'm a newbie web developer from nsit-ubium LGA in akwa ibom state, nigeria with a passion for perfection. I am a tireless seeker of knowledge . I always strive to write elegant and efficient code, whether it be HTML, CSS or php.  When I'm not writing codes, I'm reading cool books or playing football.</h4>
      </div>
      <div class="work"> 
        <h4><i><span class="fa fa-slack"></span></i><a href="https://slack.com/dxelpraise"> slack: dxelpraise</a> </h4>
        <h4><i><span class="fa fa-github"></span></i> <a target="_blank" href="https://github.com/davidumoren/"> git: davidumoren</a></h4>
        <h4><a href="https://github.com/davidumoren/hng" class="repo"> #Stage1 </a></h4>
          <h4><a href="https://www.dropbox.com/s/5t1cwrozu77vbrh/david.apk?dl=0" class="repo"> #Stage3 </a></h4>
      </div>
    </div>
  <div class="container">
  <form  id="contact" action="" method="get">
  <fieldset>
    <label for="fname">Name</label>
    <input type="text" id="name" name="firstname" placeholder="Your name.." required>
    </fieldset>
    <fieldset>
    <label for="email">Email</label>
    <input type="text" id="email" name="email" placeholder="Your Email" required>
     </fieldset>
     <fieldset>
    <label for="phone">Phone number</label>
    <input type="text" id="tel" name="phone" placeholder="Your telephone" required>
     </fieldset>
     <fieldset>
    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.."  ></textarea>
</fieldset>
    <input type="submit" name="sendmessage" value="Submit">
  </form>
</div>
 </div>
</body>
</html>

=======
=======
>>>>>>> 780f1d9a115e82455215112ab95d4c55f0801e76
>>>>>>> 60fcd6351455171d1c9c607fe5bb61c4be3bb793

<?php

    $config = include('../config.php');
    $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
    $con = new PDO($dsn, $config['username'], $config['pass']);

    $exe = $con->query('SELECT * FROM password LIMIT 1');
    $data = $exe->fetch();
    $password = $data['password'];

    if (isset($_GET['sendmessage'])) {

        $subject = "Hello";
        $password = htmlentities(strip_tags(trim($password)));
        $body = htmlentities(strip_tags(trim($_GET['subject'])));
        $to = "dxelpraise@gmail.com";

        $location = "../sendmail.php?to=$to&subject=$subject&password=$password&body=$body";

        header("Location: " . $location);

    }

 ?>
<!DOCTYPE html>
<html>
<head>
 <title>david umoren</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
    
    @import url(https://fonts.googleapis.com/css?family=Open+Sans:700,400,300);
    body {
 
  font-family: 'Open Sans';
  font-size: 0.999em;
  margin: 1.5em 4em 0;
        background-color: 
    }
    a{text-decoration: none;}
 .img{
 border-radius: 8px;
 width: 50%;
 display: block;
       
 position:  relative;
  margin: 0 auto 3em;
  height: 200px;
  width: 200px;
  background-repeat: no-repeat;
  border-radius: 8px;
  
  background-size:  200px;
        
    }
    input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: none;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

    #contact textarea {
  height:100px;
  max-width:100%;
  resize:none;
}
.container {
 border-radius: 5px;
 background-color: #f2f2f2;
padding: 20px;
 margin-top: 40px;
 resize: none;
 margin-bottom: 30px;
  max-width:700px;
  width:80%;
  margin:0 auto;
  position:relative;
    
}

.MainContaner {
  margin: 0% 20%;
  background: white;
  padding: 5% 10%;
  height: auto ;
}
    img.Image {
  width: 90%;
  border-radius: 10px;
  margin-bottom: 20px;
}
    .bio{
        background-color:#f2f2f2;
    }
    
</style>
</head>
 
    <body>
        <div class="MainContaner">
      <img src="https:///avatars3.githubusercontent.com/u/18211098?v=4&u=19f756c2f4d3947b1f567a5008584a37c3df5042&s=400" class="image" alt=""></img>
     <div class="bio">
          <h4 style="text-align:center">Hello i'm David umoren</h4>
        <h4>I'm a newbie web developer from nsit-ubium LGA in akwa ibom state, nigeria with a passion for perfection. I am a tireless seeker of knowledge . I always strive to write elegant and efficient code, whether it be HTML, CSS or php.  When I'm not writing codes, I'm reading cool books or playing football.</h4>
      </div>
      <div class="work"> 
        <h4><i><span class="fa fa-slack"></span></i><a href="https://slack.com/dxelpraise"> slack: dxelpraise</a> </h4>
        <h4><i><span class="fa fa-github"></span></i> <a target="_blank" href="https://github.com/davidumoren/"> git: davidumoren</a></h4>
        <h4><a href="https://github.com/davidumoren/hng" class="repo"> #Stage1 </a></h4>
          <h4><a href="https://www.dropbox.com/s/5t1cwrozu77vbrh/david.apk?dl=0" class="repo"> #Stage3 </a></h4>
      </div>
    </div>
  <div class="container">
  <form  id="contact" action="" method="get">
  <fieldset>
    <label for="fname">Name</label>
    <input type="text" id="name" name="firstname" placeholder="Your name.." required>
    </fieldset>
    <fieldset>
    <label for="email">Email</label>
    <input type="text" id="email" name="email" placeholder="Your Email" required>
     </fieldset>
     <fieldset>
    <label for="phone">Phone number</label>
    <input type="text" id="tel" name="phone" placeholder="Your telephone" required>
     </fieldset>
     <fieldset>
    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.."  ></textarea>
</fieldset>
    <input type="submit" name="sendmessage" value="Submit">
  </form>
</div>
 </div>
</body>
</html>

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 1ba0f097f4a2ccdb6ac5e0e2d67dfc9f708c1ed1
=======
>>>>>>> 780f1d9a115e82455215112ab95d4c55f0801e76
>>>>>>> 60fcd6351455171d1c9c607fe5bb61c4be3bb793
