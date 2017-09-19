<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 3e700aa04932485532bea076220823f8563012b6
<?php
	session_start();
	require ("ini/link.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Starlyvil's Profile</title>
<link rel="stylesheet"  type="text/css" href="styles/gen.css"/>
<style>
	#Cf{
		color: #005151;
		font-size: 24px;
		text-shadow: 0 0 8px white;
	}
	#Cf:hover{
		text-decoration: none;
	}
	
</style>
</head>

<body>
<div class="con">
	<div class="cv"></div>
	<div class="main">
		<div class="lft">
			<div class="tp">
				<div class="pic">
				</div>
			</div>
			<div class="bt">
				<span>Starlyvil</span>
			</div>
		</div>
		<div class="rgt">
			<?php
				if(isset($_SESSION['ok'])){
					include ("suc.php");
				}else{
					include ("fm.php");
				}
			?>
		</div>
	</div>
	<div class="ft">
		<div class="lCon">
			<div class="mainCon">
				<a href="index.php" id="Bi">Basic Info</a>
				<a href="contact.php"id="Ci">Contact Info</a>
				<a href="social.php" id="Sh">Social handler</a>
				<a id="Cf">Contact form</a>
			</div>
		</div>
	</div>
</div>
</body>
</html>
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 780f1d9a115e82455215112ab95d4c55f0801e76
>>>>>>> 3e700aa04932485532bea076220823f8563012b6
<?php
	session_start();
	require ("ini/link.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Starlyvil's Profile</title>
<link rel="stylesheet"  type="text/css" href="styles/gen.css"/>
<style>
	#Cf{
		color: #005151;
		font-size: 24px;
		text-shadow: 0 0 8px white;
	}
	#Cf:hover{
		text-decoration: none;
	}
	
</style>
</head>

<body>
<div class="con">
	<div class="cv"></div>
	<div class="main">
		<div class="lft">
			<div class="tp">
				<div class="pic">
				</div>
			</div>
			<div class="bt">
				<span>Starlyvil</span>
			</div>
		</div>
		<div class="rgt">
			<?php
				if(isset($_SESSION['ok'])){
					include ("suc.php");
				}else{
					include ("fm.php");
				}
			?>
		</div>
	</div>
	<div class="ft">
		<div class="lCon">
			<div class="mainCon">
				<a href="index.php" id="Bi">Basic Info</a>
				<a href="contact.php"id="Ci">Contact Info</a>
				<a href="social.php" id="Sh">Social handler</a>
				<a id="Cf">Contact form</a>
			</div>
		</div>
	</div>
</div>
</body>
</html>
<<<<<<< HEAD
>>>>>>> 1ba0f097f4a2ccdb6ac5e0e2d67dfc9f708c1ed1
=======
<<<<<<< HEAD
>>>>>>> 1ba0f097f4a2ccdb6ac5e0e2d67dfc9f708c1ed1
=======
>>>>>>> 780f1d9a115e82455215112ab95d4c55f0801e76
>>>>>>> 3e700aa04932485532bea076220823f8563012b6
