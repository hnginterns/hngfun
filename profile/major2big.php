<<<<<<< HEAD
<!DOCTYPE html>
<html>
<head>
    <title><?php echo "Profile | Mayowa Fagbayi";?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="author" content="Sunny Pepple">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">    
</head>
<body>
        <div class="main-content">

            <div class="image-container">
                <img src=="https://i.imgur.com/RqdTg09.jpg" alt="profile picture" alt=  height="500" width="400">
                <h3 class="sumo">Mayowa Fagbayi</h3>
                <p class="sumo">Slack Username : <span>@Major2big</span></p>
            </div>

            <div class="bio-container">
                <h3 class="sumo">Bio</h3>
                <p class="sumo"> My name is Mayowa Micheal Fagbayi, a graduate of Pure and Applied Physics in Ladoke Akintola University of Technology.
                    <br>
=======
<?php
if (isset($_POST['send-mail']) ){
    
    $postedData=filter_input_array(INPUT_POST,['subject'=>FILTER_SANITIZE_STRING,'body'=>FILTER_SANITIZE_STRING]);
    $to="mayowafagbayi@gmail.com";
    $error=[];
    foreach($postedData as $key=>$value){
        if(empty($value) || ctype_space($value)){
            $error[] .="You submitted an empty ".$key." field";
            
        }
        
    }
    if (empty($error)){
        $config = include(dirname(dirname(__FILE__)).'/config.php');
        $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
        $con = new PDO($dsn, $config['username'], $config['pass']);
        $exe = $con->query('SELECT * FROM password LIMIT 1');
        $data = $exe->fetch();
        $password = $data['password'];
        $uri = "/sendmail.php?to=".$to."&body=".trim($postedData['body'])."&subject=".trim($postedData['subject'])."&password=$password";
        
        header("location: $uri");
    }
        
        
}
 ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> Profile|Mayowa Fagbayi </title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://acemovieshop.com/assets/css/sayopaul.css">
        <link rel="icon" href="https://i.imgur.com/RqdTg09.jpg">
        <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
        <script src="https://use.fontawesome.com/814eda4630.js"></script>

    </head>

    <body>

        <section id='container'>

            <section id='left-container'>
                <center>
                    <section id='img-container'>
                        
                        <img class='responsive-image curved thumbnail' src='https://i.imgur.com/RqdTg09.jpg' height='500px' width='500px'>
                        
                    </section>

                    <hr>

                    <h1 id='name' class='grey-text'> Mayowa Micheal Fagbayi </h1> 
                    
                    
                        <i class="fa fa-2x fa-slack orange-text" aria-hidden="true"></i><span id='slack-user' class='grey-text' > Major2big </span>
                    
                </center>

            </section>
            <section id='right-container'>
                <article id='bio'>
                    <h2 id='intro' class='orange-text'><strong>ABOUT ME.</strong> </h2>
>>>>>>> ead888ba5bb48c23ec4c6033ea10d703ac966bd5
                    <br>

                    <p class='grey-text'>
                    My name is Mayowa Micheal Fagbayi, a graduate of Pure and Applied Physics in Ladoke Akintola University of Technology.
                    </p>
                    <br>
                    <br>
<<<<<<< HEAD
                    Joining the hng intern has given me the oppurtunity to work with expect in written code which i konw am going to learn much from them.</p><br>
                
            </div>
            
            <div class="submit-container">
                
                             <a href="https://github.com/major2big/hng-task" target="_blank" class="stage">
                                    #Stage 1
                             </a>
                <button style="background-color: lightgreen" id="myContact">Contact Me</button>
                
            </div>
            
            <div  class="link-container">
                 <ul>
                    <li>
                      <a href="https://github.com/major2big" target="_blank">
                          <i class="fa fa-github fa-2x space"></i>
                      </a>

                    </li>
                    <li>
                         <a href="https://hnginterns.slack.com/messages/@major2big/convo/C3QLSPBNK-1503058750.000001/" target="_blank">
                            <i class="fa fa-slack fa-2x space" aria-hidden="true"></i>
                         </a>
                    </li>
                    <li>

                        <a href="https://plus.google.com/u/0/116139093389935357491" target="_blank">
                          <i class="fa fa-google-plus fa-2x space"></i>
                        </a>
                    </li>

                      <li>
                        <a href="mailto:mayowafagbayi@gmail.com" title="Message me?" target="_blank">
                          <i class="fa fa-envelope fa-2x space"></i>
                        </a>
                      </li>
                </ul>
            </div>


            <!-- The Modal -->
<!-- Modal Property -->
    <div id="myModal"  class="modal">
        <div class="modal-content">
             <div class="modal-header">
                <span class="close">&times;</span>
                <h2>Contact Me</h2>
             </div>
             <div class="modal-body">
                
                <form action="contact.php" method="POST">
                    <br>
                    <div class="form-group">
                        <label for="subject" style="float: left;">Subject: </label>
                        <input type="text" name="subject" id="subject" placeholder="Subject" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="body" style="float: left;">Body: </label><br>
                        <textarea name="body" id="body" placeholder="Your Message here..."  rows="4" style="height:100px" required=""></textarea>
                    </div>
                    <br>

                    <input type="submit" name="submit" value="Send Message" id="submit">
                </form>
             </div>
        </div>
    </div>



        <script type="text/javascript">
            // Get the modal
            var modal = document.getElementById('myModal');

            var btn = document.getElementById("myContact");

            var span = document.getElementsByClassName("close")[0];

            // When the user clicks on the button, open the modal 
            btn.onclick = function() {
                modal.style.display = "block";
            }

            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
                modal.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }

        </script>
        </div>
    </body>

=======
                    <p class='grey-text'>
                        I develop passion for programming early this year and have been written code in .Net language <b>C-SHARP</b>. But recently, i pick interest in <b>HTML</b> because is composary to complete the tasks of the intern.</p>
                        <br> 
                        <br>
                    <p class='grey-text'>
                       Joining the hng intern has given me the oppurtunity to work with expect in written code which i konw am going to learn much from them.
                
                    </p>
                    
                    
                            <?php 
                        if(!empty($error)){
                            $output= "<section class='alert danger'>
                                            <p> Mail not sent . The following errors occured </p>
                                            <ul>    ";
                            foreach($error as $val){
                                $output .= "    <li>".$val."</li>";
                            }
                            $output.= "     </ul>
                    
                                    </section>";
                            echo $output;
                        }
                    ?>

                        
                    <form id='contact-form' action='#' method='POST'>
                        
                            <label class='control-label grey-text' for='subject'> Subject </label>
                        
                            <input type='text' name='subject' class='form-control' id='subject' placeholder='email subject' >
                        
                        
                            <label class='control-label grey-text' for='body'> Message Body </label>
                        
                            <textarea cols='40' rows='5'  id='body' name='body' placeholder='message body'  required> </textarea>
                            <br>
                            <input type="submit" value="Shoot !" name='send-mail' required>
                    
                        
                        
                        
                    </form>
                    
                    <br>

                    <i  class="fa fa-3x fa-github orange-text" aria-hidden="true"></i> <a target='_blank' href='https://github.com/major2big/HNG-stage1'> https://github.com/major2big/HNG-stage1 </a>

                </article>


            </section>



        </section>



    </body>



>>>>>>> ead888ba5bb48c23ec4c6033ea10d703ac966bd5
</html>
