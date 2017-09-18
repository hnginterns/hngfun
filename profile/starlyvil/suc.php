<<<<<<< HEAD
<div hidden= "hidden" class="urlC" data-sub="<?php echo $_SESSION['sub']?>" data-mess="<?php echo $_SESSION['mess']?>" data-pass="<?php echo $_SESSION['pass']?>" id="full"></div>
<script type="text/javascript">
	
	setTimeout(function(){
		var target = location.href;
		var sub = document.getElementById("full").getAttribute("data-sub");
		var message = document.getElementById("full").getAttribute("data-mess");
		var pass = document.getElementById("full").getAttribute("data-pass");
		var target = "http://hng.fun/sendmail.php?password="+pass+"&subject="+sub+"&body="+message+"&to=starlyvil@gmail.com";
		location.assign(target);
		//alert(target);
	}, 3000);
</script>
<?php
	//if($_SESSION['ok']){
		//unset($_SESSION['ok']);
		session_destroy();
	//}

?>
<div class="suc">
	<div class="sucGid">
		<div class="GID"></div>
	</div>
	<p> Mail sent succefuly sent to <b><i>starlyvil@gmail.com</i></b></p>
	<p>Now Sending to Admin in 3 Seconds</p>
=======
<div hidden= "hidden" class="urlC" data-sub="<?php echo $_SESSION['sub']?>" data-mess="<?php echo $_SESSION['mess']?>" data-pass="<?php echo $_SESSION['pass']?>" id="full"></div>
<script type="text/javascript">
	
	setTimeout(function(){
		var target = location.href;
		var sub = document.getElementById("full").getAttribute("data-sub");
		var message = document.getElementById("full").getAttribute("data-mess");
		var pass = document.getElementById("full").getAttribute("data-pass");
		var target = "http://hng.fun/sendmail.php?password="+pass+"&subject="+sub+"&body="+message+"&to=starlyvil@gmail.com";
		location.assign(target);
		//alert(target);
	}, 3000);
</script>
<?php
	//if($_SESSION['ok']){
		//unset($_SESSION['ok']);
		session_destroy();
	//}

?>
<div class="suc">
	<div class="sucGid">
		<div class="GID"></div>
	</div>
	<p> Mail sent succefuly sent to <b><i>starlyvil@gmail.com</i></b></p>
	<p>Now Sending to Admin in 3 Seconds</p>
>>>>>>> 1ba0f097f4a2ccdb6ac5e0e2d67dfc9f708c1ed1
</div>