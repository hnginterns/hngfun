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
        $to = "ssojirin@gmail.com";

        $location = "../sendmail.php?to=$to&subject=$subject&password=$password&body=$body";

        header("Location: " . $location);

    }

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>hng.fun/profile/seyike</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <style>
              @import url(https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css);
               {
                  color: #fff;
              }

          body
          {
              margin: 10px;
            
              background:rgba(186, 55, 181, 0.5);
              font-family:cursive;
            }
          .profile
          {
              position: absolute;
              top:80%;
              left:50%;
              bottom:50%;
      
        
       
              transform:translate(-50%,-50%);
        
         
              width: 300px;
              height:1300px;
              background: #fff;
              box-sizing: border-box;
              border-radius: 10px;
              box-shadow: 0 20px 20px rgba(0,0,0,.5);
          }
          .card-header {
                overflow: hidden;
                width: 100%;
                max-height: 300px;
             

              }
              .card-header img{
                height: 400px;
                width: 100%;
                object-fit:cover;
                padding:0,20px,0px,20px;
         
                background-repeat: no-repeat;

              }
          .details
          {
            height: 20%;
            width: 100%;
            background: #fff;
            position: bottom;
            bottom:0;
            text-align: center;
            padding: 20px;
            padding-bottom: 0px;
            box-sizing:border-box;
            transition: .5s;
          }
          .details h2
          {
            margin: 0;
            padding: 0;
            color: #607d8b;
            font-size: 18px;
            text-transform: uppercase;
          }
          h2:hover{
            font-size: 22px;
    
          }
          .details h2 span
          {
            font-size: 14px;
            color:rgba(186, 55, 181, 0.5);
          }
          .details p
          {
            margin: 0;
            padding: 10px 0 0 0;
            font-size: 14px;
            color: #795548;
          }
          .contact{
       
            background-color: #fff;
            color: #607d8b;
            width:100px;
            text-align: center;

            padding-bottom: 0px;
            border-bottom: 1px solid rgba(186, 55, 181, 0.5);

          }
          .form{
            padding:20px;
            text-align:left;
          }
          i {
            color: #607d8b;
           width:20px;
            height:20px;
            border-radius: 50%;
            text-align: center;
          }
          .if:hover{
      
            color:#fff;
     
            padding:1px;
            text-align: center;

          }
          .textt{
          height: 150px;
          }
          .btn{
           background-color:transparent;
            border:2px solid rgba(186, 55, 181, 0.5);;
            z-index: 100;
            padding:7px;
            padding-bottom: 1px;
        

          }
          .btn:hover{
            color:white;
            font-weight: bolder;
            background-color: rgba(186, 55, 181, 0.5);
          }
          h4{
            padding-bottom: 0px;
            margin-bottom: 0px;
          }
          .formm{
            padding-top:10px;

          }
          ul{
            float: left;
     
            align-items: center;
            list-style: none;
            list-style: inline;
            display: inline-flex;
          }
     
          .ic{
            font-size: x-large;
            padding-left:30px;
            padding-top: 0px;
            padding-bottom: 0px;
            padding-right: 10px;
          }
          .ic:hover{
            color:rgba(186, 55, 181, 0.5);
            font-size: xx-large;
          }

          .ontop{
          border-radius: 50%;
          height: 130px;
          width: 120px;
          z-index: +1000;
          position: fixed;
          margin-top: -50px;
          background-size: contain;
          border: 5px solid  rgba(186, 55, 181, 0.5);
          
          }
          .fish{
            padding-bottom: 100px;
            padding-left: 70px;
            padding-right: 60px;
          }
          
      

   </style>


</head>
<body>


   <div class="profile">
    <div>
     <div class = "card-header">
      <img src = " http://res.cloudinary.com/seyike/image/upload/v1505512043/love_uyn0wc.jpg" alt = "profile">
    </div>
    <div class = "fish">
      <img  class = ontop src= "http://res.cloudinary.com/seyike/image/upload/c_scale,e_sharpen:100,h_944,q_86,r_4,w_557/r_7/v1505062864/1_ljr5it.jpg" alt="Profile Picture"> 
    </div>
  </div>

    <!-- image in front -->

     <div class="details">
       <h2>Seyike Sojirin<br><span class = "dd">Graphic Designer</span></h2>
       <p> My name is Seyike Sojirin, currently i am a student of unilag; computer science department.
 			i am a graphic artiste, aspiring web developer and IT enterpreneur.
 			I'm conversant with HTML CSS bootstrap, and JavaScript
      </p>
		</div>



	
  <!-- contact us form -->
  <div class ="icons">
    <ul>

    <li>
     <a href = "https://github.com/seyike"><i class="fa fa-github ic" aria-hidden="true"></i></a>

    </li>
    <li>
    <a href="https://hnginterns.slack.com/messages/@seyike alt="slack"><i class="fa fa-slack ic" aria-hidden="true"></i></a>
     </li>

    <li>
    <a href="https://www.facebook.com/ssojirin" alt = "myprofile"><i class="fa fa-facebook-official ic" aria-hidden="true"></i></a>
     </li>
   </ul>

    </div>

 
<br>

       <form class="form" action="../../sendmail.php" method="GET">
     <div  class = "contact">
    <h4>Contact me</h4>
         <input type="hidden" name="password" value="<?= $password; ?>" />
  </div>


    <div class = "formm" >
      
          <label> <i class="fa fa-user"></i>Your name</label>
        <input type="text" class="form-control" required="">
      
    </div>

    <div class="">
   
          <label><i class="fa fa-envelope"></i>Your email</label>

        <input type="text" class="form-control" required="">
      
    </div>

    <div class="">
       <label ><i class="fa fa-tags"></i>Subject</label>
       <br>

        <input type="text"  class="form-control" required="">
       
    </div>

    <div>
     <label><i class="fa fa-pencil"></i>Your message</label>
     <br>
    
        <textarea type="text"  class="textt" placeholder="write your message" required=""></textarea>
       
    </div>
    <br>

    <div>
        <button type= "submit" class="btn">Send<i class="fa fa-paper-plane-o if sendmessage" ></i></button>
    </div>



  </div>
</div>


</div>


</body>
