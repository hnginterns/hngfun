<?php
// include core files
$config = include('../config.php');
require('Poloniex.php');
require('Coinman.php');

// Crates an instance of CoinMan
$cm = new Coinman($config['api_key'], $config['api_secret']);

// We Run CoinMan
// $json = $cm->runCoinMan();

// decode json 
$json = '{
		"buys":[
			{"id":"280","0":"280","pair":"BTC_NOTE","1":"BTC_NOTE","buys":"178","2":"178","sales":"22","3":"22"},
			{"id":"259","0":"259","pair":"BTC_BTCD","1":"BTC_BTCD","buys":"164","2":"164","sales":"36","3":"36"},
			{"id":"258","0":"258","pair":"BTC_BLK","1":"BTC_BLK","buys":"157","2":"157","sales":"43","3":"43"},
			{"id":"302","0":"302","pair":"BTC_SC","1":"BTC_SC","buys":"156","2":"156","sales":"44","3":"44"},
			{"id":"282","0":"282","pair":"BTC_PINK","1":"BTC_PINK","buys":"150","2":"150","sales":"50","3":"50"}],
		"sales":[
			{"id":"289","0":"289","pair":"BTC_VIA","1":"BTC_VIA","buys":"26","2":"26","sales":"174","3":"174"},
			{"id":"297","0":"297","pair":"BTC_XPM","1":"BTC_XPM","buys":"32","2":"32","sales":"168","3":"168"},
			{"id":"270","0":"270","pair":"BTC_GAME","1":"BTC_GAME","buys":"40","2":"40","sales":"160","3":"160"},
			{"id":"318","0":"318","pair":"BTC_NXC","1":"BTC_NXC","buys":"44","2":"44","sales":"156","3":"156"},
			{"id":"266","0":"266","pair":"BTC_DOGE","1":"BTC_DOGE","buys":"45","2":"45","sales":"155","3":"155"}]
	}
';
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
