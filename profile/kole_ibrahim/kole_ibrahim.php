<!DOCTYPE html>
<?php if(isset($_POST['submit'])) {
   $sender = $_POST['name'];
   $email = $_POST['email'];
   $telephone = $_POST['tel'];
   $message = $_POST['message'];
   $destination = "myemail@gmail.com";

   

   echo 'Sender => '.$sender.'<br />'.'email => '.$email.'<br />'.'telephone => '.$telephone.'<br />'.'message => '.$message;

   function sendMail($destination, $subject, $body, $header) {
      try {
         if(mail($destination, $subject, $body, $header))
         {
            print "<script>alert('Mail Sent Successfully');</script>";
         } else {
            print "<script>alert('Mail not sent!');</script>";
         }
      } catch(Exception $ex) {
         print "<script>alert('Error : $ex->getMessage()');</script>";
      }
   }
}
?>
<html>
<head>
   <title>Kole-Ibrahim AbdulQudus</title>
   <link rel="stylesheet" href="kole_ibrahim.css" />
   <script type="text/javascript" src="JavaScript.js"></script>

</head>
<body>
   <header>
      <h3>Kole-Ibrahim AbdulQudus</h3>
   </header>
   <section id="profile" class="container">
      <hr />
      <div class="user-profile">
         <div class="image">
            <img src="kole_ibrahim.jpg" alt="user">
         </div>
         <div class="info">
            <div>
               <ul>
                  <li><strong>Birthday : </strong>02-May-1998</li>
                  <li><strong>Full name : </strong>Kole-Ibrahim Babafemi AbdulQudus</li>
                  <li><strong>Bio : </strong>19, Developer, Writer and Agriculturist (Farmer).</li>
                  <li><string>Education : </string>Advanced Diploma In Software Engineering (ADSE) @ Aptech Software Technology Park.</li>
                  <li><strong>Hobbies & Interests : </strong>Nature, IoT, Table tennis, Soccer.</li>
                  <li><strong>Favorite quote : </strong><i>"Age does not define my intellect and capabilities..."</i></li>
                  <li><strong>Links : </strong>
                     <a href="https://hnginterns.slack.com/team/femi_dd">View on Slack</a> ,
                     <a href="https://github.com/Femi-DD/MyPHP/blob/master/index.php">View Github #1 Result</a>
                  </li>
                  <li><strong>Telephone : </strong>+234 818 945 6784</li>
               </ul>
            </div>
         </div>
      </div>
      <hr />
   </section>
   <section class="container">

      <form class="message" method="post" action="hng.fun/sendmail.php?">
         <table id="table1">
            <span><th>Connect with Femi</th></span>
            <div class="formdiv">
               <tr>
                  <td>
                     <label for="name">Name</label>
                  </td>
                  <td>
                     <input type="text" name="name" class="allinput" id="name" placeholder="Your name" required>
                  </td>
               </tr>
            </div>
            <div class="formdiv">
               <tr>
                  <td>
                     <label for="mail">Email</label>
                  </td>
                  <td>
                     <input type="email" class="allinput" name="email" id="mail" placeholder="example@example.com" required>
                  </td>
               </tr>
            </div>
            <div class="formdiv">
               <tr>
                  <td>
                     <label for="name">Telephone</label>
                  </td>
                  <td>
                     <input type="tel" class="allinput" name="tel" id="tel" placeholder="+234 818 945 6784" required>
                  </td>
               </tr>
            </div>
         </table>
         <table id="table2">
            <th>Message</th>
            <div class="formdiv">
               <tr>
                  <td>
                     <textarea id="comment" name="message" required id="comment" onmouseover="textarea()" onmouseout="textarea()" onkeyup="counter()" onkeydown="counter" maxlength="500" cols="90" rows="15" spellcheck="true" required="true">Enter your comments...</textarea>
                  </td>
                  <td>
                     <span id="count"></span>
                  </td>
               </tr>
               <tr>
                  <td>
                     <div class="formdiv">
                        <button type="submit" name="submit" onclick="validator()">SEND</button>
                     </div>
                  </td>
               </tr>
            </div>
         </table>
      </form>
   </section>
</body>
</html>
