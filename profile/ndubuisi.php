 
<?php 
//html starts 

$con = mysqli_connect('localhost','intern','@hng.intern1','hng');
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

//sql query
$error_message;
$body;
$result = mysqli_query($con, "SELECT password from password limit 1");
$channel_info = mysqli_fetch_row($result);
$password = $channel_info[0];

if($_GET['text'] != "" &  filter_input(INPUT_GET,"email",FILTER_VALIDATE_EMAIL))
{
  $body = $_GET['email']."  ".$_GET['text'];
    header("location: ../sendmail.php?password=$password&subject=Hello&body=$body&to=onyemenamndu@gmail.com");
}
else
{
  $error_message =  $body;


}

print <<< eot
 <!doctype html>
<html lang = "en">
  <head>
    <meta charset = "utf-8">
    <title>Bio|Ndubuisi Onyemenam</title>
    <style type="text/css" rel = "stylesheet" >

      @media screen and (min-width: 481px)
      {

              body{
              font-size: small;
              font-family: Verdana, Helvetica, Arial, sans-serif;
              line-height: 1.6em;
              padding-left:30%;

              background-color:white;
              width:400px;
               }

        } 

        @media screen and (max-width: 481px)
        {

              body{
              font-size: small;
              font-family: Verdana, Helvetica, Arial, sans-serif;
              line-height: 1.6em;
              padding-left:5%;
              background-color:white;
              width:400px;

                 }


        }

         

         .write_up{
             color:#444444;

         }

         .form_content{
              display: block;
              padding:5px;
              margin:5px;

         }
         #contact{
             background-color: #444444;
             border:1px;
             border-style: dashed;

         }
         #image{
             margin-left:10px;
             background-color: #444444;
             border:1px;
             border-style: dashed;
             border-radius: 50%;

         }
         h1,h2{
             color:#007e7e;
         }

         h1{
             font-size:2em;
         }

         h2{
             font-size:1.3em;

         }

    </style>
  </head>
  <body>
    <div>
       <img id = "image"src="http://res.cloudinary.com/testi/image/upload/v1503316215/Ndubuisi_g7apoe.jpg" width="220" height="220">
    </div>
    <h1>Onyemenam Ndubuisi</h1>
    <p class="write_up">
        Am a student of Life. I code. Am looking forward to technopreneurship. Yeah nice meeting you.
    </p>
    <p>
    <span class = "write_up">Link to<span> <a href="https://github.com/NdubuisiO/HNG1"> Stage 1</a>
    <p>
      <h2>
        Contact
      </h2>
      <h2>
        Slack @prondubuisi
      </h2>
      <a href="https://web.facebook.com/ndubuisi.onyemenam">Facebook</a>>
      <a href="https://twitter.com/NdubuisiS0">Twitter</a>
    </p>
     <form method = "get" action = "#" id = "login_form">

       
       <div id="contact">
           <input class ="form_content" type = "text" name="email" placeholder = "Enter your email">
            <textarea class ="form_content" name ="text" placeholder = "$error_message"></textarea>

           <button  class ="form_content"  type = "submit" class = "button" id = "signup_button" >Send me a mail</button>
       </div>
       
     </form>
  </body>
</html>



eot;

  

?>