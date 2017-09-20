<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];
    $subject = $_POST['subject'];
    $to  = 'amara.odunze@gmail.com';
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

<html>
    <head>
        <meta charset="utf-8">
        <title>My Profile</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <style type = "text/css">
        .white {color: white;}

body{
        
    background: url("http://res.cloudinary.com/dy7cwxayz/image/upload/v1505229010/jakub-gorajek-133566_y8wjxl.jpg") no-repeat center center;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    }
    
.pic{
        
    border-radius: 50px;  
        
    }    
.card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    max-width: 300px;
    margin: auto;
    text-align: center;
}

.container {
    padding: 0 16px;
}

.title {
    color: midnightblue;
    font-size: 20px;
    font-style: oblique;
    font-weight: bold;
}

button {
    border: none;
    outline: 0;
    display: inline-block;
    padding: 8px;
    color: white;
    background-color: #000;
    text-align: center;
    cursor: pointer;
    width: 100%;
    font-size: 18px;
}

a {
    text-decoration: none;
    font-size: 22px;
    color: white;
}

button:hover, a:hover {
    opacity: 0.7;
}

#name{
     border-radius: 4px;
    height: 30px;
            }
#subject{
     border-radius: 4px;  
    height: 30px;
            }
#message{
       border-radius: 5px;         
            }
#submit_button{
    background-color: blue;
    cursor: pointer;
    border-radius: 10px;
    height: 30px;
    width: 100px;
                
}     
#submit_button:hover {
   background-color: #3e8e41;
            
}          
            
#submit_button:active{
    background-color: #3e8e41;
    transform: translateY(4px);
    
}
</style>
    </head>
    
<body>
    <br/><br/>
<div class="card">

  <img class="pic" src="http://res.cloudinary.com/dy7cwxayz/image/upload/v1505229962/amy_kbnz08.jpg" style="width:100%">
    
  <div class="container">
    <h1>Vanessa Raymond</h1>
      
    <p class = "white"; class="title">Software Development Intern>
    <p>I studied Industrial chemistry.I have a flair for software development. I currently interns with Hotels.ng</p>
    <a href="www.twitter.com"><i class="fa fa-twitter"></i></a> 
    <a href="#"><i class="fa fa-linkedin"></i></a> 
    <a href="www.facebook.com"><i class="fa fa-facebook"></i></a> 
    <p><button onclick="myFunction()">Contact Info</button></p>
  </div>
    <div class = "white"; id="myDIV">
        Slack: @Vanessa17 <br/>
        Github: amydiva
    </div>
    <br/>
    
    
    
    <br/><br/>
    
     
      <div>
    <section class="contact">
    
      <section class="contact-form" >
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
        <div class = "card-form">
          <form  action="nse4real.php" method="post" >
            <p class = "title" >CONTACT ME</p>
          
    			    
    			    <input type="text" id="subject" name="subject" placeholder="Your subject here">
    			    <br>

    			   
    			    <textarea id="body" name="body" placeholder="Write some subjects here" style="height:120px"></textarea>
    			    <br><br>

    			    <input type="submit" name="process" value="Submit">
          </form>
        </div>
      </section>
   </section>
  </div>
</body>
    <style>
.contact 
  {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    width: 95%;
    margin-bottom: 10%;
    text-align:center;
    position: relative;
    left: 30%;
  }
  .contact section 
  {
    width: 50%;
  }
  .title 
  {
    font-size: 24px;
  }
  .subheading-text{
    padding:10px;
  }
  .contact-form input,
  .contact-form textarea 
  {
    width: 80%;
    margin-top: 15px;
    padding: 12px 20px;
    border: .5px solid #ccc;
    border-radius: 5px;
    background-color: #eaeaea;
  }
  input[type=submit] 
  {
    background-color: #26acd9;
  }
  input[type=submit]:hover 
  {
    background: white;
    border: .5px solid #ccc;
    cursor: pointer;
  }
  textarea 
  {
    font-family: inherit;
    resize: none;
  }
  .social-links span 
  {
    margin-right: 30px;
  }
  .map 
  {
    margin-top: 15px;
  }
  p > span 
  {
    margin-right: 10px;
  }
  .map iframe 
  {
    width: 100%;
    height: 100%:
  }
  @media only screen and (max-width:1024px) 
  {
  .contact 
  {
    width: 90%;
  }
  .contact section 
  {
    width: 45%;
  }
  }
  @media only screen and (max-width:768px) 
  {
    .contact section 
    {
      width: 95%;
    }
  }
    </style>
</html>
