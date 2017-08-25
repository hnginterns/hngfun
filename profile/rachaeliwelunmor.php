<?php
    $fName = $_POST['fName'];
    $lName = $_POST['lName'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $to = "rachaeliwelunmor@gmail.com";

    if (mail($to, $subject, $message, "From: ".$fName." ". $lName)) {
        echo "your message has been sent, i'll get back to you as soon as i can";
    } else {
        echo "There was an error sending your mail";
    }
    
    
?>