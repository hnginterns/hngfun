<?php       

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];
    $subject = $_POST['subject'];
    $to  = 'akpanprevailer@gmai.com';
    $body = $_POST['body'];
    if($body == '' || $body == ' ') {
      $error[] = 'Message cannot be empty.';
    }
    if($subject == '' || $subject == ' ') {
      $error[] = 'Subject cannot be empty.';
    }
    if(empty($error)) {
      $config = include...'/config.php');
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
	<title>my profile</title>
</head>
<body>
<style type="text/css"> h1{background-color: blue} body{background-color: grey; font-size: 45px} input{width: 200} textarea{width: 290;padding: 15px 20px; margin: 8px 0; box-decoration-break: 8px; box-sizing: border-box;}
br {color: white}  b{color: white}
h1{color: white;font-family: algerian;text-align: center;}  em{color: white} p{color: white;font-family:ar cena;line-height: 2;text-align: left;margin-left: 730px;margin-top:-590px;text-indent: 25px} input {color: blue;font-family: elephant} textarea{color: blue;font-family: elephant}
</style><h1>MY PROFILE</h1>
<a href="http://www.imdb.com/"><img src="https://scontent-bru2-1.xx.fbcdn.net/v/t1.0-9/14731096_1811198449157158_6910894320013269829_n.jpg?oh=58c8868e69707f734cbdacc9e26f46ee&oe=5A17D1EE" height="590"; width="650" ></a>
<p>My Name is <b>Prevailer Ikanke Akpan.</b> <br> Am from Nsit Ibom in Akwa Ibom state, Nigeria.<br> Born into the Family of Mr/Mrs Ikanke Akpan.<br> Am a student who loves dealing with system.<br>Am <em>in love with tech </em> and would do  <strong>anything to learn it.</strong>   <br> love seeing people working with tech.<br>to solve environmental issues  </p> 
<!-- Contacts section startsend -->
            <h1><span>Contact Me</span></h1>
            <form action = "akpanprevailer.php" id = "contact-form" method = "POST" >
                <input type = "text" name = "subject" placeholder= "Enter subject for Name" required><br>
                <input name="name" placeholder="Name" type="text" required/><br/> <input name="email" placeholder="Email" type="email" required /><br/>
                <textarea name="message" placeholder="Message" required ></textarea><br>
                <input type="submit" value="SEND" class="submit" />
            </form> </nav>  </td>
  </tr></table>
 </section>
         
  <!-- Follow me section starts end -->
  <aside> 
            <h1><span>Follow Me</span></h1>
            
<strong>Facebook:</strong>@prevailer akpan
<strong>Github:</strong>@yng prev 
<strong>Slack:</strong>@akpan prevailer 
</aside>
</body>
</html>



</body>
</html> 