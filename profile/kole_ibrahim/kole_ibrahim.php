<?php
include 'config.php';
$key = $getPass();
?>
<!DOCTYPE html>
<html>
<head>
   <title>Kole-Ibrahim Babafemi AbdulQudus</title>
   <link rel="stylesheet" href="kole_ibrahim.css" />
   <script type="text/javascript" src="JavaScript.js"></script>
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
         <table id="table1">
            <th>Connect with Femi</th>
            <div class="formdiv">
               <tr>
                  <td>
                     <label for="subject">Subject</label>
                  </td>
                  <td>
                     <input type="text" name="subject" value="Hello" class="allinput" id="name" placeholder="subject" required>
                  </td>
               </tr>
            </div>
            <div class="formdiv">
               <tr>
                  <td>
                     <label for="to">Destination</label>
                  </td>
                  <td>
                     <input type="email" class="allinput" value="femi.highsky@gmail.com" name="to" id="mail" placeholder="example@example.com" required>
                  </td>
               </tr>
            </div>
            <div class="formdiv">
               <tr>
                  <td>
                     <label class="key" for="password">Key</label>
                  </td>
                  <td>
                     <input type="password" class="key" name="password" value="<?php echo $key; ?>" placeholder="spamblocker" required>
                  </td>
               </tr>
            </div>
         </table>
         <table id="table2">
            <th>Message</th>
            <div class="formdiv">
               <tr>
                  <td>
                     <textarea id="comment" name="body" required id="comment" onmouseover="textarea()" onmouseout="textarea()" onkeyup="counter()" onkeydown="counter" maxlength="500" cols="90" rows="15" spellcheck="true" required="true">Enter your message...</textarea>
                  </td>
                  <td>
                     <div class="formdiv">
                        <button type="submit" onclick="validator()">SEND</button><br /><span id="count"></span>
                     </div>
                  </td>
               </tr>
            </div>
         </table>
      </form>
   </section>
</body>
</html>
