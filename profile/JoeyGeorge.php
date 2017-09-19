
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];
   $subject = $_POST['subject'];
    $to  = 'okpongkpongjoshua4@gmail.com';
    $body = $_POST['body'];
   if($body == '' || $body == ' ') {
      $error[] = 'Message cannot be empty.';
    }
   if($subject == '' || $subject == ' ') {
      $error[] = 'Subject cannot be empty.';
    }
   if(empty($error)) {
     $config = include __DIR__ . "/../config.php";
      $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
      $con = new PDO($dsn, $config['username'], $config['pass']);
     $exe = $con->query('SELECT * FROM password LIMIT 1');
      $data = $exe->fetch();
      $password = $data['password'];
     $uri = "/sendmail.php?to=$to&body=$body&subject=$subject&password=$password";
    
<!DOCTYPE html>
<html>
<head>
    <title>JoeyGeorge</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<style type="text/css">
   html{
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
    border: 4px;
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
        <h2></h2>

  <img src="https://scontent.flos2-1.fna.fbcdn.net/v/t1.0-9/17795902_1688286091472214_4374478645288683518_n.jpg?_nc_eui2=v1%3AAeF-0lwVF02SURQZGSmi6eQN8UABeuFqj0syNkwM4AyYftQk-Te0PLP_6H7JBg2YYjXIJnKC10P9xZ5vHdGauZjHnhBl7yias0ZjP3kkXQ1L3Q&oh=d9bf1c45e2fdc9162bc3bd1089b53dde&oe=5A13F57A" width="290" height="270"></header>
            <td>
             <!-- About me section end -->
                 <h1><span>About Me</span></h1>
            <p>i am Joshua George,i love technology and programming<br>
                of which i want to be a part of
                aspiring<br> to be software/web developer
                still learning.i hails from Itu LGA.
            </p>
             
     
            <h1
            <div> 
<a href="https://hnginterns.slack.com/account/profile"><strong>#stage1</strong></a>
</p>
    </div>

            <div class="containerform">
        <form class="form-vertical" action="JoeyGeorge.php" method="POST">
            <h2 class="htext">Contact Form</h2>
            <input type="text" class="textform" name="subject" placeholder="subject" required><br>
            <textarea name="body" cols="10" rows="6" class="textform" required></textarea><br><br>
            <button class="submit btnform" name="submit" value="submit">Submit</button>
        </form>
        </div>
       <footer class="copyright">
      &copy; 2017 Joshua George. All rights reserved.
</footer>
</body>
</html>
