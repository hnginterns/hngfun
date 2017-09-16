

<DOCTYPE>
    <html lang=en>
        
        <head>
            <title>hngprofile</title>
            <link rel="stylesheet" href="stylehng.css">
            <meta charset="utf-8">
            <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        </head>
                    <?php
                if($_SERVER['REQUEST_METHOD'] == 'POST') {
                $error = [];
                $subject = $_POST['subject'];
                $to  = 'judeukana@gmail.com';
                $body = $_POST['body'];
                if($body == '' || $body == ' ') {
                  $error[] = 'Message cannot be empty.';
                }
                if($subject == '' || $subject == ' ') {
                  $error[] = 'Subject cannot be empty.';
                }
                if(empty($error)) {
                  $config = include(dirname(dirname(dirname(__FILE__))).'/config.php');
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
        <body>
            
            <div id="main_wrapper">
            
            <header id="main_header"><h1>Profile page</h1></header>

                <nav id="top_nav">
                    <ul>
                        <li><img src="git.png" class="logo">JudeUk</li>
                        <li><img src="twitter.png" class="logo">@Judee_boi</li>
                        <li><img src="Slack_Icon.png" class="logo">Judeukana</li>

                    </ul>
                </nav>
                
                <section id=main_section>
                    <article>
                        <img src="jay.jpg" id="pp">
                        <br>
                        <br>
                        <h1>Personal Profile</h1>
                       <p> <i class="glyphicon glyphicon-education"></i>went to Hillcrest High School Ekorinim Calabar</p>
                      <p><i class="glyphicon glyphicon-education"></i>Bsc Hons Computer Science Kwame Nkrumah University of Science and Technology Ghana</p>
                      <p><i class="glyphicon glyphicon-home"></i>from Mkpat Enin Akwa Ibom State</p>
                      
                    </article>
                    
                    <article>
                        <h1>Technical background</h1>
                        <p> HTML(intermediate level)</p>
                           <p>CSS(intermediate level)</p>
                           <p>JAVASCRIPT(intermediate level)</p>
                           <p>JQUERY(intermediate level)</p>
                           <p>PHP(intermediate level)</p>
                        <p><a href="https://github.com/JudeUk/Androidapp/raw/master/judeukana.app3.apk">download the app here</a></p>
                    </article>
                </section>
                
                <aside id="side">
                    
                    <form action="index.php" method="post">
                        
                        
                    <fieldset>
                        
                    <legend>CONTACT FORM</legend>
                    
                       
                        <label>Subject <input type="text" name="subject"  length="15"  /></label><br>
                        Message:<br>
                        <textarea name="body" rows="8" cols="30">type message here</textarea><br>
                        <br>
                        <input type="submit" value="Send Message">
                    </fieldset>
                        </form>
                </aside>
                
                <footer id="the_footer" >copyright Jude Ukana 2017</footer>
                
            </div>
        </body>
    </html>