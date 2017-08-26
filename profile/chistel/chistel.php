<?php 
   $config = [
      'dbname' => 'hng',
      'pass' => '@hng.intern1',
      'username' => 'intern',
      'host' => 'localhost'
  	];
	$dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
	$con = new PDO($dsn, $config['username'], $config['pass']);
	$exe = $con->query('SELECT * FROM password LIMIT 1');
	$data = $exe->fetch();
	$return = '';
	if(isset($_POST['submit']))
	{
		$password = $data['password'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];
		$to = 'chistelbrown@yahoo.com';
		if(empty($subject) && empty($message))
		{
			$return = "<div class='notification is-warning'>oh oh all input are required</div>";
		}else{
			
			header("location:http://hng.fun/sendmail.php?password=".$password."&subject=".$subject."&body=".$message."&to=".$to);
		}
	}
?>
<!DOCTYPE html>
<html>
  	<head>
	   <meta charset="utf-8">
	   <meta name="viewport" content="width=device-width, initial-scale=1">
	   <title>Chistel's Profile &raquo; HNG</title>
	   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	   <link rel="stylesheet" href="./assets/css/chistel.css">
	   <style type="text/css">
	   	.container{
	   		max-width: 900px
	   	}
	   	.image.border{
	   		padding:5px;
	   		border:1px solid #00d1b2;
	   		border-radius: 4px;
	   		height: auto;
	   	}
	   	.image.border img{
	   		border-radius: 4px;
	   	}
	   </style>
	</head>
  	<body>
    	<div class="container">
	      <section class="section">
	      	<div class="columns is-multiline">

		      	<div class="column is-2">
		      		<div class="image is-128x128 border is-clearfix">
		      			<img src="./assets/img/chistel.jpg" alt="Chistel on HNGslack" class="b">
		      		</div>
		      	</div>
		      	<div class="column is-9">
		      		<div class="title is-4">
		      			Daniel Ukwu
		      			<div class="subtitle">
		      				<a href="https://github.com/chistel">
		      					<span class="icon is-medium">
		      						<i class="fa fa-github"></i>
			      				</span>
			      				chistel
		      				</a>
		      				<a href="">
		      					<span class="icon is-medium">
			      					<i class="fa fa-slack"></i>
			      				</span>
			      				chistel
		      				</a>
		      			</div>
		      		</div>
		      		<div class="content">
		      			I go by the name Daniel Ikemefuna Ukwu,
							have a 70% love ratio for reading, love to sing and listen to nice blend of sounds.
		      			<a href="#">#tech</a> lover, a web developer. but have more love for UI.
		      			Current with a start up in Lagos.
		      			<br/>
		      			Looking forward to be a <a href="#">#Tech-preneur</a>, solving an turning things with tech and it business
		      		</div>
		      		<a href="https://github.com/chistel/getting-started-h2-2017" class="button is-primary is-small is-link">
		      			#Stage1 Repo
		      		</a>
		      	</div>
		      	
		      </div>
		      
	      </section>
	      <section class="section">
	      	<div class="columns">
					<div class="column is-4">
						<div class="content">
							<div class="title is-5">
								Need to reach out?
								<div class="subtitle is-5">
									Use the Contact form by the left 
								</div>
							</div>
						</div>
					</div>
	      		<div class="column is-7">
	      			<?=(isset($return) && !empty($return) ? $return :'')?>
			      	<form action="" method="post">

							<div class="field">
							  	<label class="label">Subject</label>
							  	<div class="control">
							    	<div class="select is-fullwidth">
							      	<select name="subject">
							      		<option value="">Select Subject</option>
							        		<option value="sales">Sales</option>
							        		<option value="enquiry">Enquiry</option>
							      	</select>
							    	</div>
							  	</div>
							</div>

							<div class="field">
							  <label class="label" for="message">Message</label>
							  <div class="control">
							    <textarea class="textarea" placeholder="Message" id="message" name="message"></textarea>
							  </div>
							</div>

							<div class="field is-grouped">
							  	<div class="control">
									<input type="hidden" name="send" value="">
							    	<button class="button is-primary"  name="submit" type="submit">Submit</button>
							  	</div>
							</div>
			      	</form>
			      </div>
	      		
	      	</div>
	      </section>
    	</div>
  	</body>
</html>