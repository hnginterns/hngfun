<?php
// include core files
$config = include('../config.php');
require('Poloniex.php');
require('Coinman.php');

// Crates an instance of CoinMan
$cm = new Coinman($config['api_key'], $config['api_secret']);

// We Run CoinMan
$json = $cm->runCoinMan();

// decode json 
$json = json_decode($json, TRUE);
?>

<section>
	<!--for demo wrap-->
	  <h1>DragonGlass</h1>

	      	<?php

				foreach ($json as $key => $array) {
					# code...
					echo strtoupper($key).'<hr />';

					echo '
						<div class="tbl-header">
					    <table cellpadding="0" cellspacing="0" border="0">
					      <thead>
					        <tr>
					          <th>S/N</th>
					          <th>Currency Pairs</th>
					          <th>Buy</th>
					          <th>Sell</th>
					          <th>% <i class="fa fa-timer"></i> (5mins ago) </th>
					          <th>Pointer</th>
					          <th>Examination</th>
					        </tr>
					      </thead>
					    </table>
					  	</div>
						<div class="tbl-content">
						<table cellpadding="0" cellspacing="0" border="0">
	      				<tbody>
	      			';
					foreach ($array as $sub_array) {
						# compare pointer
						if($sub_array["buys"] > $sub_array["sales"]){
							$pointer = '<i class="fa fa-chevron-up" style="color:green;"></i>';
						}else{
							$pointer = '<i class="fa fa-chevron-down" style="color:red;"></i>';
						}

						$percentage_100 = 100;
						$total = $sub_array["buys"] + $sub_array["sales"];
						$average = $total / 2;


						
						echo '<tr>';
					    echo '<td>'.$sub_array["id"].'</td>';
					    echo '<td>'.$sub_array["pair"].'</td>';
					    echo '<td>'.$sub_array["buys"].'</td>';
					    echo '<td>'.$sub_array["sales"].'</td>';
					    echo '<td> % change</td>';
					    echo '<td>'.$pointer.'</td>';
					    echo '<td>increases in trade in the last 5mins</td>';   
					    echo '</tr>';
					}

					echo '
						</tbody>
	    				</table>
	    				</div>
	    				<br />
	    			';
				}
	      	?>
	        
	       
	      
	  
</section>
