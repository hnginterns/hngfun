<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $body = $_POST['body'];
    $from = 'From: hng@jointhands.net'; 
    $to = 'ruggedemails@gmail.com'; 
			
    $body = "From: $name\n E-Mail: $email\n Message:\n $body";
								 
        if (mail ($to, $subject, $body, $from)) { 
	    echo '<p>Your message has been sent!</p>';
	} else { 
	    echo '<p>Something went wrong, go back and try again!</p>'; 
	}
    } else {
        echo '<p>You need to fill in all required fields!!</p>';
    }
?>
