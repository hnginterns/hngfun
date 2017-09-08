<?php
$from=$_POST['from'];
$email="victorilozulu@gmail.com";
$subject=$_POST['subject'];
$name=$_POST['name'];
$message="From:".$name."Message:".$_POST['message'];

mail ($email, $subject, $message, "From:".$from);
?>