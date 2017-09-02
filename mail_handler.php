<<<<<<< HEAD

<?php
// The message
$message = "Line 1\r\nLine 2\r\nLine 3";

// In case any of our lines are larger than 70 characters, we should use wordwrap()
$message = wordwrap($message, 70, "\r\n");

// Send
mail('lanzer09@gmail.com', 'My Subject', $message);
?>
=======

<?php
// The message
$message = "Line 1\r\nLine 2\r\nLine 3";

// In case any of our lines are larger than 70 characters, we should use wordwrap()
$message = wordwrap($message, 70, "\r\n");

// Send
mail('lanzer09@gmail.com', 'My Subject', $message);
?>
>>>>>>> 91bb498bd26ad95912babad7c26c9159d3a3bf6a
