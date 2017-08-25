<?php
function load($class){
	require  'phphandler/'.$class .".php";
}

load('IOhander');
 $IO = new IOhandler;
$datas = $IO->getAll('password');
foreach ($datas as $row) {
	echo $row['password'];
}


?>