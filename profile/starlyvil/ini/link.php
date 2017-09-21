
<?php
	require("conn.php");
	$dsn = 'mysql:host='.HOST.';dbname='.DB;
    $con = new PDO($dsn, USER, PASSWORD);
?>
