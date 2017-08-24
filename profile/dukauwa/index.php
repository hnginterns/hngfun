<?php

    $config = include('../../config.php');
    $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
    $con = new PDO($dsn, $config['username'], $config['pass']);

    $exe = $con->query('SELECT * FROM password LIMIT 1');
    $data = $exe->fetch();
    $password = $data['password'];

    if (isset($_GET['sendmessage'])) {

        $subject = "Hello";
        $password = htmlentities(strip_tags(trim($password)));
        $body = htmlentities(strip_tags(trim($_GET['body'])));
        $to = "dukauwa.du@gmail.com";

        $location = "../../sendmail.php?to=$to&subject=$subject&password=$password&body=$body";

        header("Location: " . $location);

    }

 ?>
<!doctype html>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <!-- STYLE -->
    <style>
              @import url(https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css);
              .social-icon
               {
                  color: #fff;
              }
              ul.social-icons {
                  margin-top: 10px;
                  align-items: center;
              }
              .social-icons li {
                  vertical-align: top;
                  display: inline;
                  height: 100px;
              }
              .social-icons a {
                  color: #322f30;
                  text-decoration: none;
                  }
            .fa-twitter {
                padding:10px 12px;
                -o-transition:.5s;
                -ms-transition:.5s;
                -moz-transition:.5s;
                -webkit-transition:.5s;
                transition: .5s;
                background-color: #ffffff;
            }
            .fa-twitter:hover {
                background-color: #00aced;
                border-radius: 50%;
            }
            .fa-slack {
              padding:10px 12px;
              -o-transition:.5s;
              -ms-transition:.5s;
              -moz-transition:.5s;
              -webkit-transition:.5s;
              transition: .5s;
              background-color: #ffffff;
            }
            .fa-slack:hover {
                background-color: #03bb85;
                border-radius: 50%;
            }
            .fa-github {
              padding:10px 12px;
              -o-transition:.5s;
              -ms-transition:.5s;
              -moz-transition:.5s;
              -webkit-transition:.5s;
              transition: .5s;
              background-color: #ffffff;
            }
            .fa-github:hover {
                background-color: #c161ce;
                border-radius: 50%;
            }
          body
          {
              margin: 0;
              padding: 0;
              background: #03bb85;
              font-family:arial	#D3D3D3;
            }
          .profile
          {
              position: absolute;
              top: 50%;
              left: 50% ;
              transform: translate(-50%,-50%);
              width: 300px;
              height:500px;
              background: #fff;
              box-sizing: border-box;
              border-radius: 10px;
              box-shadow: 0 20px 20px rgba(0,0,0,.5);
          }
          .card-header {
                overflow: hidden;
                width: 100%;
                max-height: 200px;
              }
              .card-header img{
                width: 100%;
              }
          .details
          {
            height: 50%;
            width: 100%;
            background: #fff;
            position: bottom;
            bottom:0;
            text-align: center;
            padding: 20px;
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
          .details h2 span
          {
            font-size: 14px;
            color: #ccc;
          }
          .details p
          {
            margin: 0;
            padding: 10px 0 0;
            font-size: 14px;
            color: #aaa;
          }
          .details ul
          {
            margin: 0;
            padding: 00
            display: flex;
          }
          .details ul li
          {
            list-style: none;
            font-size: 20px;
            width: 33.3%;
          }
          h3
          {
            background:#00bcd4;
            color:#fff;
            padding: 8px 20px;
            border-radius: 25px;
            display: -webkit-inline-box;
            text-transform:capitalize;
          }
          /*contact */
          .form
          {
          position: relative;
          top: 80%;
          left: 50% ;
          transform: translate(-50%,-50%);
          width: 300px;
          height:450px;
          padding:20px 30px;
          background: #fff;
          box-sizing: border-box;
          border-radius: 10px;
          box-shadow: 0 20px 20px rgba(0,0,0,.5);
          }
          h4
          {
          margin:0;
          padding-bottom:0;
          color:#607d8b;
          border-bottom:3px solid #ccc
          }
          input
          {
          width:100%;
          padding:10px;
          box-sizing:border-box;
          background:none;
          outline:none;
          resize:none;
          border:0;
          font-family:'Montserrat',sans-serif;
          transition:all .3s;
          border-bottom:2px solid #bebed2
          }
          input:focus
          {
          border-bottom:2px solid #78788c
          }
          .form input:before
          {
          content:attr(type);
          display:block;
          margin:0;
          font-size:14px;
          color:#ccc
          }
          button
          {
          float:right;
          padding:8px 12px;
          margin:8px 0 0;
          font-family:'Montserrat',sans-serif;
          border:2px solid #78788c;
          background:0;
          color:#5a5a6e;
          cursor:pointer;
          transition:all .3s
          }
          button:hover
          {
          background:#78788c;
          color:#fff
          }
          .form div
          {
          content:'Hi';
          position:absolute;
          bottom:-15px;
          right:-20px;
          background:#50505a;
          color:#fff;
          width:320px;
          padding:16px 4px 16px 0;
          border-radius:6px;
          font-size:13px;
          box-shadow:10px 10px 40px -14px #000
          }
          .form span
          {
            margin:0 5px 0 15px
          }
          .repo a{
            color: #fff;
            text-decoration:none;
          }
    </style>
        <!-- end of style-->
        <!-- TITLE -->
        <title>My Profile Card</title>
    </head>
    <body>
        <div class="profile">
          <div class = "card-header">
          <img src= "http://res.cloudinary.com/de14v8crs/image/upload/v1503447909/profile_q3tjli.jpg" alt="Profile Picture">
        </div>
          <div class="details">
            <h2>Ukauwa David<br><span>Web Designer</span></h2>
            <p>My Name is Ukauwa David, a software Engineer from Lagos state.
              I build web applications with incredible designs.
              My major tools are PHP,Laravel,CSS and Bootstrap.I also play well with wordpress and unity 3d(AR/VR).</p>

              <div class = "repo">
                <h3><a href= "http://github.com/dukauwa/hng-stage1" > Stage 1 repo</a>
                </h3></div>

              <ul class="social-icons">

                  <li><a href="https://github.com/dukauwa" class="social-icons"><i class="fa fa-github" aria-hidden="true"></i> </a></li>
                  <li><a href="https://hnginterns.slack.com/messages/@dukauwa" class="social-icons"> <i class="fa fa-slack" aria-hidden="true"></i></a></li>
                  <li><a href="https://twitter.com/ukauwa_david" class="social-icons"> <i class="fa fa-twitter" aria-hidden="true"></i></a></li>

              </ul>
                  <form class="form" action="../../sendmail.php" method="GET">

                    <h4>CONTACT ME</h4>
                    <input type="hidden" name="password" value="<?= $password; ?>" >
<<<<<<< HEAD
                    <p type="Name:"><input type="text"  name="name" placeholder="Write your name here.."></input></p>
                    <p type="Email:"><input type="email" name="email" placeholder="Let me know how to contact you back.."></input></p>
                    <p type="Message:"><input name="body" placeholder="What would you like to tell me.."></input></p>
=======
                    <input type="Name"  name="name" placeholder="Write your name here.."></input>
                    <input type="Email" name="email" placeholder="Let me know how to contact you back.."></input>
                    <input name="Message" placeholder="What would you like to tell me.."></input>
>>>>>>> 597996f2108b6e7046e24274081c3d1618c70dc2
                    <button type="submit" name="sendmessage" class="sendmessage">Send Message</button>
                    <div>
                      <span class="fa fa-phone"></span>09024095111
                      <span class="fa fa-envelope-o"></span> dukauwa.du@gmail.com
                    </div>
                  </form>
            </div>

        </div>

    </body>
    <!--end html  -->



</html>
