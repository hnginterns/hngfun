<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];
    $subject = $_POST['subject'];
    $to  = 'aniesedet@gmai.com';
    $body = $_POST['body'];
    if($body == '' || $body == ' ') {
      $error[] = 'Message cannot be empty.';
    }
    if($subject == '' || $subject == ' ') {
      $error[] = 'Subject cannot be empty.';
    }
    if(empty($error)) {
      $config = include('../config.php');
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
    <title>Ani-Edet</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<style type="text/css">
   html{
    background-color:grey;
     margin: 0;
    padding: 0;
    border-radius: 5px;
   }

    header{
    background-color: #5ACDE6;
    border-radius: 5px;
    padding: 5px;
    margin: 5px;
    text-align: center;
}
body {
    font-family: 'Handlee', cursive;
    font-size: 13pt;
    background-color: #efefef;
    padding: 10px;
    margin: 0;
}
h1 {
    font-size: 15pt;
    color: #20bcd5;
    text-align: center;
    padding: 18px 0 18px 0;
    margin: 0 0 10px 0;
    letter-spacing: 5

}
h1 span {
    border: 4px dashed #20bcd5;
    padding: 10px;
}
h2{
 font-family:monospace;
 font-size: 20pt;

}
p {
    padding: 0;
    margin: 0;
    text-align:center; ;
}
img{
    border: solid white 5px;
    border-radius: 7px;
}
footer{
     text-align:center;
 }
 .section{
     text-align:center;
 }
 aside{
    text-align:center;
 }
    input{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
 } 

 textarea{
     width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
 }
</style>
<body>
<header>
        <h2><strong>Meet Aniekan Edet</strong></h2>
</header>
<table align="center"> 
 <tr>
  <td><img src="https://scontent.flos2-1.fna.fbcdn.net/v/t1.0-0/p206x206/20476360_1070795646389293_510622748301289542_n.jpg?_nc_eui2=v1%3AAeFX9BelJdF-4826xmr2OgA921-YZUnAisP0ufB5LSDekqF1sDJbmmMZbXrsy34IGGHBwZ5bj164kPpwbi7UMp8Ih3feHm1-TjLbPr10LCNKxw&oh=62e0b2c1c752d407eff3ca9f300672ac&oe=5A5B29B9" width="290" height="270"> <br></td>
            <td>
             <!-- About me section end -->
                 <h1><span>About Me</span></h1>
            <p>
 Hey! I'm <strong>Aniekan Edet</strong>. Coding has changed my world.<br>Learning to code gave me <i>problem-solving skills</i><br> and a way to communicate with others on a technical level.<br> I can also develop websites and use my coding skills to get a better job.<br>Join me in this rewarding journey. You'll have fun,<br> get help, and learn along the way!<br>I hail from Nsit Atia L.G.A Uyo,Akwa ibom state.
            </p>
             <!-- About me section end -->
            </td>
   </tr>
   <tr>
      <td><br />
       <!-- Contacts section starts -->
      <div align="center" class="section">
            <h1><span>Contact Me</span></h1>
           <form action = "aniekanedet.php" id = "contact-form" method = "POST" >
                <input type = "text" name = "subject" placeholder= "Enter subject for Name" required><br><br>
                <input type = "text" name = "subject" placeholder= "Enter subject for email" required><br><br>
                <textarea name = "body" placeholder = "Type your message here"  required></textarea><br>
                <br><input type ="submit" name="submit" value ="Send Message">
            </form>
        </div>
         <!-- Contacts section end
     </td>

 <td><br/>
      <section>
        Skills section starts
            <h1><span>My Skills</span></h1>
            <ul>
                HTML <br />
                    <progress min="0" max="100" value="100"></progress> <br />
                 
                 CSS<br />
                    <progress min="0" max="100" value="60"></progress>
                    <br />
                Boostrap<br />
                    <progress min="0" max="100" value="40"></progress>
                 <br />
                JavaScript<br />
                    <progress min="0" max="100" value="5"></progres>
            </ul> 
             <!--Skills section
        </section>-->
    </td>
</table>
 <aside>
            <h1><span>Follow Me</span></h1>
            <div> 
<strong>Facebook:</strong>@aniekan edet|
<strong>Github:</strong>@aniekan edet|
<strong>Twitter:</strong>@aniekan edet|
<strong>Slack:</strong>@aniekan edet|
            </div>
        
 </aside>
       <footer class="copyright">
      &copy; 2017 Aniekan Edet. All rights reserved.
</footer>
</body>
</html>
