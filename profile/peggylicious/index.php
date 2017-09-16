<?php

   $user = 'intern';
   $pass = '@hng.intern1';
   $db = 'hng';
   $connect = new mysqli('localhost', $user, $pass, $db);
   mysqli_select_db($connect, 'password');
   $query = "SELECT * FROM password LIMIT 1";
   $passes = mysqli_query($connect, $query);
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>New Profile</title>
  <meta charset="utf-8"/>
  <link rel="stylesheet" type="text/css"/>
  <meta name="viewport" content= "width=device-width, initial-scale=1.0, maximum-scale=5.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>


body{
  background-color:#0174DF;
}
  .jumbotron{

    /*
    margin-left: 0rem;*/
    margin-top: auto;
    margin: 16rem;
    background-image: url("https://imgur.com/a/2Tfsl");
    background-repeat: no-repeat;
    background-size: 100%;
    margin-top: 2rem;
    max-height: 50%;


    /*



    min-width: 200px*/
  }

  /*.container img{
    width: inherit;
    height: inherit;

    margin: 2rem;
    display: block;


  }*/

  .container h6{
    font-size: 24px;
    font-family: gabriola;
    margin-top: 0px;
    color: black;
    text-align: center;
  }


  .container h5{
    font-size: 25px;
    font-family: calibri;
    margin-top: 465px;
    color: white;
    text-align: center;

  }


  .container h4{
    font-size: 20px;
    font-family: gabriola;
    margin-top: 0px;
    color: white;

  }


  .container {
    text-align: center;

  }
  .jumbotron p{
    font-size: 16px;
    text-align: left;
    margin-top: 30px;
  }

  .contact{
      margin: 0rem;

  }

  .contact input, textarea{
    width: 100%;
    color: #747862;
    background: transparent;
    height: 30px;
    border-radius: 10px;
    background-color: white;
  }

  .contact button{
    width: 221px;
    color: white;
    background: #0174DF;
    height: 30px;
    border-radius: 10px;
  }
  .contact h6{
    text-align: center;
    font-size: 25px;
    margin-top: 50px;
  }

  .slack_id h6{
    text-align: left;
    margin: 0rem;
    color: white;
    text-align: center;
  }

  .interest p{
    word-spacing: 2rem;
    text-align: center;
    font-size: 14px;
    margin: 0rem;

  }
  .hide{
    display: none;
  }

</style>
</head>

<body>

    <div class="container">
      <section class="jumbotron">
          <!--img src="C:/Users/PEGGY/Desktop/Sight_2016_12_30_134511_564.jpg" /-->
          <div class"about">
            <h5><b>MARGARET OGBOR</b></h5>
            <div class="slack_id">
              <h6>@peggylicious</h6>
            </div>
            <h4>Software Developer and Amateur Photographer<br>
            in Abuja</h4>

            <p>Software developer with an easy going personality.
               Margaret is an enthusiastic young Nigerian who loves to take photographs of beautiful places.
               She spends most of her time developing her programming skills and has a keen interest in HTML,
               CSS and Python programming languages.
              <br>She is currently taking html and CSS courses on Codecademy.<br><br>
              <div class="interest">
                <p>#career #teamPlayer #photography #music #boardGames </p><br>
              </div>
              <div >
                <p style="float:left">Work <br> Freelancer</p>
                  <p style="float:right">Education <br> University of Calabar</p>
              </div>


          <div>

            <div class="contact"><br><br>
              <h6>Send a Message</h6>
              <form action="/sendmail.php" method="GET">
              <input name="to" size="30" type="email" class="hide" value="mailto:p.asq@live.com"><br><br>
              <input name="subject" size="30" type="text" placeholder="subject" >
              <div class="hide">
                   <input type="password" name="password" value=<?php while($password=mysqli_fetch_assoc($passes)){ echo "".$password[ 'password']; } ?>>
               </div> <br><br>
                <textarea id="msg" name="message" placeholder="Message" width="30"></textarea>
              <br><br>
              <button type="submit"> Send  </button>
              </form>
            </div>

      </section>
    </div>
    <div>



    </div>



</body>
</html>


<!--  <p>An aspiring software developer from Nigeria, Margaret loves to spend her idle time taking photographs of beautiful places. Margaret is a graduate of
      Electronics and Computer Technology from the University of Calabar, Nigeria.
      <br>She has a strong will to improve her programming skills. And is currently taking html <br><br> and CSS courses on Codecademy.<br><br> -->
