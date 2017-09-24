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
           $body = htmlentities(strip_tags(trim($_GET['body'])));
           $to = "amara.odunze@gmail.com";
   
           $location = "../sendmail.php?to=$to&subject=$subject&password=$password&body=$body";
   
           header("Location: " . $location);
   
       }
   
   ?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>My Profile</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
<style>
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
.form-style-6{
    font: 95% Arial, Helvetica, sans-serif;
    max-width: 400px;
    margin: 10px auto;
    padding: 16px;
    background: #F7F7F7;
}
.form-style-6 h1{
    background-color: black;
    padding: 20px 0;
    font-size: 140%;
    font-weight: 300;
    text-align: center;
    color: #fff;
    margin: -16px -16px 16px -16px;
}
.form-style-6 input[type="text"],
.form-style-6 input[type="date"],
.form-style-6 input[type="datetime"],
.form-style-6 input[type="email"],
.form-style-6 input[type="number"],
.form-style-6 input[type="search"],
.form-style-6 input[type="time"],
.form-style-6 input[type="url"],
.form-style-6 textarea,
.form-style-6 select
{
    -webkit-transition: all 0.30s ease-in-out;
    -moz-transition: all 0.30s ease-in-out;
    -ms-transition: all 0.30s ease-in-out;
    -o-transition: all 0.30s ease-in-out;
    outline: none;
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    width: 100%;
    background: #fff;
    margin-bottom: 4%;
    border: 1px solid #ccc;
    padding: 3%;
    color: #555;
    font: 95% Arial, Helvetica, sans-serif;
}
.form-style-6 input[type="text"]:focus,
.form-style-6 input[type="date"]:focus,
.form-style-6 input[type="datetime"]:focus,
.form-style-6 input[type="email"]:focus,
.form-style-6 input[type="number"]:focus,
.form-style-6 input[type="search"]:focus,
.form-style-6 input[type="time"]:focus,
.form-style-6 input[type="url"]:focus,
.form-style-6 textarea:focus,
.form-style-6 select:focus
{
    box-shadow: 0 0 5px grey;
    padding: 3%;
    border: 1px solid grey;
}

.form-style-6 input[type="submit"],
.form-style-6 input[type="button"]{
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    width: 100%;
    padding: 3%;
    background: black;
    border-bottom: 2px solid #30C29E;
    border-top-style: none;
    border-right-style: none;
    border-left-style: none;   
    color: #fff;
}
.form-style-6 input[type="submit"]:hover,
.form-style-6 input[type="button"]:hover{
    background: grey;
}

</style>
    </head>
    
<body>
    <br/><br/>
<div class="card">

  <img class="pic" src="http://res.cloudinary.com/dy7cwxayz/image/upload/v1505229962/amy_kbnz08.jpg" style="width:100%">
    
  <div class="container">
    <h1>Vanessa Raymond</h1>
      
    <p class = "white"; class="title">Software Development Intern></p>
    <p>I studied Industrial chemistry.I have a flair for software development. I currently interns with Hotels.ng</p>
    <a href="www.twitter.com"><i class="fa fa-twitter"></i></a> 
    <a href="#"><i class="fa fa-linkedin"></i></a> 
    <a href="www.facebook.com"><i class="fa fa-facebook"></i></a>
    <p><button onclick= href="https://drive.google.com/open?id=0B7rB7LYcNvbmaG9ZTk8zRUtTRDQ">Android App Link</button></p> <br/>
    <p><button onclick="myFunction()">Contact Info</button></p>
  </div>
    <div class = "white" id="myDIV">
        Slack: @Vanessa17 <br/>
        Github: amydiva
    </div>
    
                    <div class="container">
         <form action="#" method="get">
            <h1>Contact Me</h1>
            <input placeholder="Name" name="name" type="text" value="" required>
            <input placeholder="Email address" type="email" onblur="this.setAttribute('value', this.value);" value="" required>
            <div>
               <span class="validation-text">Please enter a valid input
               </span>
            </div>
            <div class="flex">
               <textarea placeholder="Type your Message here" rows="4" cols="50" name="body" required></textarea>
            </div>
            <button type="submit" name="sendmessage">
            Send Message
            </button>
         </form>
      </div>
                    
                    </div>
                    </div>
                    </body>
                    </html>

