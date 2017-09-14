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
		$dsn = 'mysql:hosts='.$config['host'].';dbname='.$config['dbname'];
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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mayowa Fagbayi Profile</title>
    <link rel="stylesheet" href="https://drive.google.com/uc?export=download&id=0B2Zqj5XRWQXDYWROTWxoZEtqZzA">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div id="notification" class="clearfix">
        <p></p>
    </div>
    <div class="container">
        <div class="" id="profile">
            <div class="heading">
                <p>Intern Profile</p>
            </div>
            <div>
                <img src="https://i.imgur.com/RqdTg09.jpg" alt="profile picture" height="500" width="400">
            </div>
            <div class="card-footer">
                <a href="git@github.com:Major2big/hng-stage1-task.git"><span class="fa fa-external-link"><span id="stage1"> First stage task</span></span></a>
                <p id="slack-username"><span class="fa fa-slack"> Slack: </span> @major2big</p> 
            </div>
        </div>
        <!--<div class="flex-"> -->
            <div id="bio">
                <div class="heading">
                    <p>About me</p>
                </div>
                <p id="bio-text">
                    My name is Mayowa Micheal Fagbayi, a graduate of Pure and Applied Physics in Ladoke Akintola University of Technology.
                    <br>
                    <br>
                    I develop passion for programming early this year and have been written code in .Net language <b>C-SHARP</b>. But recently, i pick interest in <b>HTML</b> because is composary to complete the tasks of the intern.
                    <br>
                    <br>
                    Joining the hng intern has given me the oppurtunity to work with expect in written code which i konw am going to learn much from them.
                </p>
            </div>
             <!-- </div> -->  
            

							<?php 
						if(!empty($error)){
							$output= "<section class='alert danger'>
											<p> Mail not sent . The following errors occured </p>
											<ul>	";
							foreach($error as $val){
								$output .= "	<li>".$val."</li>";
							}
							$output.= "		</ul>
					
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
                    </div>
                    
<br>
<div id="footer">
        
        <a href="https://hnginterns.slack.com/team/major2big" target="_blank"><span class="fa fa-slack icons"></span></a>
        <a href="https://github.com/major2big/" target="_blank"><span class="fa fa-github icons"></span></a>
        <a href="mailto:mayowafagbayi@gmail.com" target="_blank"><span class="fa fa-envelope icons"></span></a>        
    </div>
</body>
</html>
