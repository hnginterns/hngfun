<?php
//define server and database constants  
  defined('SERVER') ? null : define("SERVER", "localhost");
  defined('DB_USER') ? null : define("DB_USER", "intern");
  defined('DB_PASS') ? null : define("DB_PASS", "@hng.intern1");
  defined('DB_NAME') ? null : define("DB_NAME", "hng");

//setup connection to server
  $dsn = 'mysql:host='.SERVER.';dbname='.DB_NAME;
  $connection = new PDO($dsn, DB_USER, DB_PASS);
  
  $result = $connection->query('SELECT * FROM password LIMIT 1');
  $row = $result->fetch(PDO::FETCH_ASSOC);
  
  $password = $row['password'];
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Profile Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="main.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <h1 class="hd">Main Content</h1>
    <div class="main_wrap">
      <div class="abt">
        <section class="img_wrap">
          <h2 class="hd">Profile</h2>
          <img src="profile.jpg" alt="profile picture">
          <p><strong>Name:&nbsp;</strong>Otuekong Shield</p>
          <p><strong>Username:&nbsp;</strong>shield</p>
          <p><strong>Hobbies:&nbsp;</strong>Playing games, Studying, Tennis, Travelling</p>
          <p><strong>Slack Task:&nbsp;</strong><a href="https://github.com/otu02/first-task/blob/master/index.php">Stage 1</a></p>
        </section>
      </div>
      <section class="bio">
        <h2>My Bio</h2>
        <p>
          Am an indigene of Akwa Ibom State. Ikot Ekpene Local Governmane Area. Am a student of 
          University of Uyo. Department of Mathematics. I have so much passion for calculations.</p>
        <p>
          Am also a developer with OOP knowledge. Languages am familiar with include: HTML, CSS, 
          JAVASCRIPT (including JQuery, Node.js), PHP, MYSQL  and a little bit of Java SE
          under my belt. I can use Linux OS and Oracle Database.</p>
      </section>
      <article class="contact">
        <h2>Send me your thoughts let's discuss</h2>
        <div class="contact_form">
          <form id="contact" class="contactus" action="../../sendmail.php" method="get" enctype="application/x-www-form-urlencoded">
            <p><input type="hidden" name="to" id="email" class="send_mail" spellcheck="false" required="required" value="ellipseshub@gmail.com"></p>
              <input type="hidden" name="password" value="<?php echo $password; ?>">
            <label for="subject"><strong>Message Title</strong></label>
              <p><input type="text" name="subject" id="subject" class="msg_sub" required="required"></p>
            <label for="email"><strong>Message</strong></label>
            <p><textarea name="body" id="message" class="" rows="6" required="required"></textarea></p>
            <p><button id="send" name="submit" type="submit">send</button></p>
          </form>
        </div>
      </article>
    </div>
  </body>
</html>

