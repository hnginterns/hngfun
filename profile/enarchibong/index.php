<?php require 'form_process.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>enarchibong</title>
    <link rel="stylesheet" type="text/css" href="enarch.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>

  <body>
  	<div id="container">
	    <header>
	 			<h2><center>(E. A.) Enomfon's Profile </center></h2>
	    </header>

		<center><img src="http://i.imgur.com/soZDbld.jpg" title="source: imgur.com" /></center><br><br>
		
		<ul>
			<li><a href="https://github.com/enarchibong" target="_blank"><button> Stage 1</button></a></li>
			<li><a href="#" target="_blank"><button> Stage 2</button></a></li>
		</ul><br>
		<h3><center>About E. A.</center></h3><br><br>
		
		<article>
			A technophile and a student of computer engineering who loves solving challenging real time problems and who also has
			knowledge of but not an expert in;<br>Html<br>Css<br>Java<br>javascript<br>C<br>C++<br>Database(Mssql, MySql)<br>
		</article>
		
		<form action="<?= $_SERVER[PHP_SELF]?>" method="post" >
            <div class="form-group">
                <input type="text" name="name" placeholder="Enter name" required><br>
            </div>
            <div class="form-group">
                <input type="text" name="subject" placeholder="Enter Subject" required><br>
            </div>
            <div class="form-group">
            	<textarea name="message" class="form-control" rows="7" placeholder=" Type Message Here" required></textarea>
            </div>
                <input type="submit" id="submitt" value="send">
            </form>
	    
	    <footer>
	    	<center><i class="fa fa-copyright"></i> enarchibong-2017</center>
	    </footer>
   </div>
</body>
</html>
