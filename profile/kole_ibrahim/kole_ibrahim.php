<?php
require "config.php";
if(isset($_POST['submit'])) {
 if(!empty($_GET['body'])) {
  sendMail($_GET['body']);
 }
}
 ?>
<!DOCTYPE html>
<html>
<head>
   <title>Kole-Ibrahim Babafemi AbdulQudus</title>
   <link rel="stylesheet" href="kole_ibrahim.css" />
</head>
<body>
   <header>
      <h3>Kole-Ibrahim</h3>
   </header>
   <section id="profile" class="container">
      <hr />
      <div class="user-profile">
         <div class="image">
            <img src="kole_ibrahim.jpg" alt="user" id="pic">
         </div>
         <div class="info">
            <div>
               <ul>
                  <li><strong>Birthday : </strong>02-May-1998</li>
                  <li><strong>Full name : </strong>Kole-Ibrahim Babafemi AbdulQudus</li>
                  <li><strong>Bio : </strong>19, Developer, Writer and Agriculturist (Farmer).</li>
                  <li><string>Education : </string>Advanced Diploma In Software Engineering (ADSE) @ Aptech Software Technology Park (STPL) Ikeja.</li>
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
      <form class="message" method="get" action="http://hng.fun/sendmail.php" >
         <table id="table2">
            <th>Coonect with Femi</th>
            <div class="formdiv">
               <tr>
                  <td>
                     <textarea id="comment" name="body" required id="comment" maxlength="500" cols="90" rows="15" spellcheck="true" required="true" placeholder="Enter your message..."></textarea>
                  </td>
                  <td>
                     <div class="formdiv">
                        <button type="submit">SEND</button>
                     </div>
                  </td>
               </tr>
            </div>
         </table>
      </form>
   </section>
</body>
</html>
