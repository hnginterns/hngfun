<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET'){
    $error = [];

    
    $to = 'nsikakthompson73@gmail.com';
    $body = $_GET['message'];
    $subject = $_GET['subject'];

    if (trim($body) == '') {
        $error[] = 'Message cannot be empty.';
    }

    if (trim($subject) == '') {
        $error[] = 'Subject cannot be empty';
    }
    if (empty($error)) {
        $config = include('../config.php');
        $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
        $con = new PDO($dsn, $config['username'], $config['pass']);
      
        $exe = $con->query('SELECT * FROM password LIMIT 1');
        $data = $exe->fetch();
        $password = $data['password'];

        if(!empty($password)){
            header("location: http://hng.fun/sendmail.php?password=$password&subject=$subject&body=$body&to=$to");
            
        }
       
    }
}

 ?>
<!DOCTYPE html>
<html>

    <head>
        <title>My Profile</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  
        
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <style>
    body {
        /*background: #e2e2e2;*/
        background: #FFFFFF;
        font-family: 'Lato', sans-serif;

    }
    
    .profile {
        /*background: #e2e2e2;*/
        margin-bottom: 20px;
    }
    
    .profile-top {
        min-height: 200px;
        /*background: #999;*/
        background: #337AB7;
    }
    
    .profile-image {
        margin-top: -100px;
        height: 200px;
        width: 200px;
        border-radius: 100px;
        border: 8px solid #eee;
    }
    
    .profile-body {
        padding: 20px;
        text-align: center;
        color: #666;
    }
    .text-color{
        color: #337AB7;
    }
.text{
        font-size: small;
        text-align: center;
        
    }
    .info{
        margin-left: 300px;
        margin-right: 300px;

    }
    footer ul{list-style-type:none}.nav a,a.social{transition:all .5s}*{box-sizing:border-box}body{margin:0;padding:0;background:#f7f5f0}.profile-body{padding:20px}.slack-username{color:#fff;font-weight:700}a{text-decoration:none;color:#999}a:hover{color:#63f}.main-nav{width:100%;background:#000;min-height:30px;padding:10px;position:fixed}.nav{display:flex;justify-content:space-around;font-weight:700;margin:0 auto;padding:0}.nav .name{display:block;margin-right:auto;color:#fff}.nav li{padding:5px 10px 10px}.nav a:hover{color:#009688;font-size:20px}header{background:url(https://res.cloudinary.com/dfe42zn7e/image/upload/t_media_lib_thumb/v1503490604/Loop_v5ksic.jpg) top center no-repeat;background-size:cover;overflow:hidden;padding-top:60px;line-height:1.5}header .profile-image{margin-top:50px;width:150px;height:150px;border-radius:50%;border:3px solid #fff;transition:all .5s}header .profile-image:hover{transform:scale(1.2) rotate(5deg)}.tag{background-color:rgba(2,2,2,.5);color:#fff;padding:10px;border-radius:5px;display:table;margin:10px auto}footer{width:100%;min-height:30px;padding:20px 0 40px 20px}footer .copyright{top:-8px;font-size:.75em}footer ul{margin:0;padding:0}footer ul li{display:inline-block}a.social{margin-left:5px;width:30px;height:30px;background-size:30px 30px;opacity:.4}a.twitter{color:#0084b4}a.facebook{color:#3b5998}a.github{color:#767676}a.social:hover{opacity:1}.clearfix{clear:both}.contact-info{list-style:none;padding:0;margin:0;font-size:.9em}.contact-info a{display:block;min-height:20px;background-repeat:no-repeat;background-size:20px 20px;padding:0 0 0 30px;margin:0 0 10px}.contact-info li.phone a{background-image:url(images/phone.png)}.contact-info li.mail a{background-image:url(images/mail.png)}.contact-info li.twitter a{background-image:url(images/twitter.png)}@media screen and (min-width:720px){.flex,.nav,footer{max-width:1200px}.flex{display:-ms-flexbox;display:flex;-ms-flex-pack:distribute;justify-content:space-around;margin:0 auto}header{min-height:470px}.nav{padding:0 30px}main{padding-top:20px}main p{line-height:1.6em}.btn-primary{background-color:#009688!important}footer{font-size:1.3em;margin:40px auto}label{display:block;text-align:left}input[type=email],input[type=text],select,textarea{width:100%;padding:12px;border:1px solid #ccc;border-radius:4px;margin-top:6px;margin-bottom:16px;resize:vertical}a.link,input[type=submit]{background-color:#009688;color:#fff;padding:12px 20px;border:none;border-radius:4px;cursor:pointer}a.link{text-decoration:none}input[type=submit]:hover{background-color:#009688}.container{border-radius:5px;background-color:#f2f2f2;padding:20px;width:50%;margin:50px auto 10px}}
    .contact-form{
        margin-left: 300px;
        margin-right: 300px;
    }
    .message{
        padding: 50px 30px 50px 80px;
    }
    </style>

    <body>
        <div class="profile">
            <div class="profile-top"></div>
            <div class="text-center">
                <img src="http://res.cloudinary.com/hngfun/image/upload/v1503323008/nsikakthompson_frztsd.jpg" class="profile-image">
            </div>
            <div class="profile-body">
                <h3>Hello!, I'm Nsikak Thompson 
                                <br>
                                <small>Full Stack Android Developer</small>
                                <br>
                                <small class="text-color"><b>@nsikaktom</b></small>
                            </h3>
                 <div class="info">
                <div class="text" > I am a Full-Stack Android developer from Ibesikpo Asutan, Akwa Ibom State Nigeria. 
                    With love for UI/UX design and prototyping. Pursuiting the future of becoming world class 
                    Developer and Designer. </div>

                    </div>

            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="text-center">
                        <a class="btn btn-primary btn-lg" href="https://github.com/Nsikaktopdown/HNG--internship-test" role="button"> Stage 1</a>
                    
                    </div>
                </div>
            </div>
        </div>

        <div class="contact-form">
        <form action="" method="GET">
  
  <div class="form-group">
    <label for="subject">Subject</label>
    <input type="text" class="form-control" id="subject" name="subject" placeholder=" Subject..">
  </div>
  <div class="form-group">
    <label for="message">Message</label>
    <textarea id="message" name="message" placeholder="Write something.." style="height:200px"></textarea>
  </div>

  <input type="submit" class="btn btn-primary btn-lg"  value="submit" >
</form>
        </div>
        <footer>
        <center>
        <ul>
          <li><a href="https://twitter.com/thompson_nsikak" target="_blank" class="fa fa-twitter social twitter"></a></li>
          <li><a href="https://web.facebook.com/nsikak.thompson" target="_blank" class="fa fa-facebook social facebook"></a></li>
          <li><a href="https://github.com/Nsikaktopdown" target="_blank" class="fa fa-github social github"></a></li>
        </ul>
    </center>
      </footer>
    </body>
    <script>
    function sayHi() {
        alert("Hi! How are u doing");


    }
    </script>
 
</html>
