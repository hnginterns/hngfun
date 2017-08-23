 
<?php 
//html starts 

$con = mysqli_connect('localhost','intern','@hng.intern1','hng');
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

//sql query
$result = mysqli_query($con, "SELECT password from password limit 1");
$channel_info = mysqli_fetch_row($result);
$password = $channel_info[0];

print <<< eot
 <!doctype html>
   <html lang = "en">
     <head>
    <meta charset = "utf-8">
    <title>Bio|Ndubuisi Onyemenam</title>
    <style type="text/css" rel = "stylesheet" >
       body{
             font-size: small;
              font-family: Verdana, Helvetica, Arial, sans-serif;
              line-height: 1.6em;
              padding-left:20%;
              background-color:white;

         }

         .write_up{
             color:#444444;

         }
         h1,h2{
             color:#007e7e;;
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

     <p>
       <img id = "image"src="http://res.cloudinary.com/testi/image/upload/v1503316215/Ndubuisi_g7apoe.jpg" width="250" height="200">
    </p>
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
     <form method = "get" action = "http://hng.fun/sendmail.php?password=$password&subject=Hello&body=The email body&to=onyemenamndu@gmail.com" id = "login_form">
       <textarea></textarea>
       <button   type = "submit" class = "button" id = "signup_button" >Send me a mail</button>
     </form>
     </span>
     </body>
eot;

?>