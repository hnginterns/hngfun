<?php
	session_start();
	require ("includes/link up.php");
?>

<?php
                if(isset($_SESSION['ok'])){
                    include ("includes/success.php");
                }else{
                    include ("includes/form.php");
                }
?>