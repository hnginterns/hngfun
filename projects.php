<?php 



ob_start();
    include("header.php");
    $buffer=ob_get_contents();
    ob_end_clean();

    $title = "Projects";
    $buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);

    echo $buffer;



?>


<style type="text/css">
	body{
		background-image: none !important;
		background-color: #fff;
	}
</style>


<div class="team4-card-container">

<div style="height: 50px; width: 100%; margin-top: 150px;">
<center>

<h2 style=""><b>All Ongoing Project(s)</b></h2>

</center>

</div>
		<div class="team4-card">
			<div class="team4-card-photo" style="background-image: url(https://pbs.twimg.com/profile_images/836907288921276416/ahoX6Eke.jpg); background-size: cover; background-repeat: no-repeat;"></div>
			<div class="team4-card-info">
				<a href="http://hng.fun/singleproject.php"><h3 class="team4-card-title">Build Hng.fun website</h3></a>
				<p class="team4-card-description">All teams/groups are to work on specific parts of the website for the Hotels.ng remote internship program.</p>
			</div>
			<div class="team4-card-footer">
				<div class="team4-footer-separate">
					
						<span class="dot">&#9679; </span> All Teams
					
				</div>
				<div class="team4-footer-separate">
					
						<span class="dot2">&#9679; </span> PHP &nbsp; &nbsp;
					
					
						
						<span class="dot3">&#9679; </span> 29 Aug, 17 &nbsp; &nbsp;
					
				</div>

			</div>
		</div>
	</div>



<?php include ('footer.php'); ?>