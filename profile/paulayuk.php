
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];
    $subject = $_POST['subject'];
    $to  = 'ayukpaul1@gmail.com';
    $body = $_POST['message'];
    if($body == '' || $body == ' ') {
        $error[] = 'Message cannot be empty.';
    }
    if($subject == '' || $subject == ' ') {
        $error[] = 'Subject cannot be empty.';
    }
    if(empty($error)) {
         $config = [
            'dbname' => 'hng',
            'pass' => '@hng.intern1',
            'username' => 'intern',
            'host' => 'localhost'
        ];
        $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
        $conn = new PDO($dsn, $config['username'], $config['pass']);
        $exe = $conn->query('SELECT * FROM password LIMIT 1');
        $data = $exe->fetch();
        $password = $data['password'];
        $uri = "/sendmail.php?to=$to&body=$body&subject=$subject&password=$password";
        header("location: $uri");
    }
}
?>
<!doctype html>
  <html>
    <head>
       <meta charset="utf-8">
       <title>Paul Ayuk's Profile</title>
    <script src="https://use.fontawesome.com/de1f216bfa.js"></script>
        <link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="paulayuk.css" type="text/css">
       <style>
           body {
               margin: 0;
               padding: 0;
           }
           
           .box {
               width: 400px;
               margin: 0 auto;
               margin-top: 50px;
               text-align: center;
               border: 1px solid #000;
               padding: 10px;
           }
           
           .box img {
               border-radius: 50%;
               width: 200px;
               height: 200px;
           }
           
           p {
             text-align: justify;
             font-size: 16px;
           }
           
           ul {
               margin: 0;
               padding: 0;
           }
           
           ul li {
               display: inline-block;
               margin: 5px;
               font-size: 18px;
               list-style: none;
           }
           
           ul li a {
               text-decoration: none;
           }
           
           a {
               text-decoration: none;
               color: orange;
           }
           .project {
               text-align: center;
           }
           
           
.module{
  position:relative;
  top:10%;    
  height:65%;
  width:450px;
  margin-left:auto;
  margin-right:auto;
}


::-moz-selection {
  background: #19547c;
}
::selection {
  background: #19547c;
}
input::-moz-selection {
  background: #037db6;
}
input::selection {
  background: #037db6;
}


select,
textarea,
input[type="text"],
input[type="email"]
{
  height:30px;
  width:300px;
  margin: 0 auto;
  display: block;
  vertical-align: middle;
  height: 34px;
  padding: 0 10px;
  margin-top: 3px;
  margin-bottom: 10px;
  font-size: 15px;
  line-height: 20px;
  border: 1px solid black;
  background-color: white;
  color: rgba(255, 255, 255, 0.7);
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  border-radius: 2px;
}

select,
textarea,
input[type="text"],
input[type="password"],
input[type="email"] {
 
}
select:hover,
textarea:hover,
input[type="text"]:hover,
input[type="password"]:hover,
input[type="email"]:hover {
  border-color: rgba(255, 255, 255, 0.5);
  background-color: white;
  color: black;
}
select:focus,
textarea:focus,
input[type="text"]:focus,
input[type="password"]:focus,
input[type="email"]:focus {
  border: 2px solid;
  border-color: #1e5f99;
  background-color: white;
  color: #000;
}
.btn {
  text-overflow: ellipsis;
  white-space: nowrap;
  overflow: hidden;
  margin: 3px 0;
  padding: 6px 20px;
  font-size: 15px;
  line-height: 20px;
  height: 34px;
  background-color: orange;
  color: #00aeff;
  border: 1px solid black;
  box-shadow: 0 0 rgba(0, 0, 0, 0);
  border-radius: 2px;
  
}
.btn.active,
.btn:active {
  padding: 7px 19px 5px 21px;
}
.btn.disabled:active,
.btn[disabled]:active,
.btn.disabled.active,
.btn[disabled].active {
  padding: 6px 20px !important;
}
.btn:hover,
.btn:focus {
  background-color: rgba(0, 0, 0, 0.25);
  color: #ffffff;
  border-color: rgba(255, 255, 255, 0.3);
  box-shadow: 0 0 rgba(0, 0, 0, 0);
}

.btn-block {
  display: block;
  width: 280px;
  margin: 0 auto;
  padding-left: 0;
  padding-right: 0;
}

.area_text{
    width: 300px;
    height: 200px;
}
       </style>
    </head>
    <body>
        <div class="box">
      
        <img src="https://s3.postimg.org/ss3h5exf7/12274735_1230649710285633_2189770792182668981_n.jpg"  alt="Paul Ayuk" class="box-img"/>
          
        <h1>Paul Ayuk</h1>
          
        <h3>Full Stack Web Developer</h3>
          
        <p>Hey there! I'm a Full Stack Web Developer from Cross River State, I'm Proficient in PHP, JS,
          CODEIGNITER, WORDPRESS THEME AND PLUGIN DEV, HTML/CSS AND BOOTSTRAP, I'm the co-founder of <a href="http://lend.ng"> Lend.ng</a></p>
          
        
           
          <p class="project"><a href="https://github.com/paulayuk/HNG-Internship">Check Out my stage one project here</a></p>
          <br/>
            <p class="project"><a href="https://drive.google.com/file/d/0B36iXO7kO3KdOC1KUzFZNHlYS1U/view">Download My App Here</a></p>
        <ul>
          <li><a href="https://hnginterns.slack.com/messages/@paulayuk"><i class="fa fa-slack" aria-hidden="true"></i></a></li>
          <li><a href="https://github.com/paulayuk"><i class="fa fa-github" aria-hidden="true"></i></a></li>
          <li><a href="https://twitter.com/paulayukk"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>          
        </ul>
      
      
        
    

  <div class="module">
    <h4>Send me an email</h4>
    <form class="form" action="paulayuk.php" method="post" autocomplete="off">
      <div class="alert alert-error"></div>
     
      <input type="text" placeholder="Enter Subject" name="subject" required />
      <textarea  class="area_text" name="message">Type in your message here, the box would expand automaticallyS </textarea> 
      
      <input type="submit" value="Send" class="btn btn-block btn-primary" />
    </form>
  </div>
</div>
        
</body>
</html>
