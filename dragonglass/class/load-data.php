<?php
// include core files
$config = include('../config.php');
require('Poloniex.php');
require('Coinman.php');

// Crates an instance of CoinMan
$cm = new Coinman($config['api_key'], $config['api_secret']);

// We Run CoinMan
$cm->runCoinMan();

// We Load CoinMan
$json = $cm->loadData();


// get request from the home page query 
/*
if(isset($_GET['type'])){
print_r($json);
}elseif(isset($_GET['type']) && isset($_GET['i'])){
print_r($json);
}else{
print_r ($json);
}*/

/*
$json = '{"buys":[{"id":"34","0":"34","pair":"BTC_SYS","1":"BTC_SYS","buys":"98","2":"98","sales":"102","3":"102","difference":"-4","4":"-4","perIncrease":"0","5":"0"},{"id":"54","0":"54","pair":"BTC_DCR","1":"BTC_DCR","buys":"98","2":"98","sales":"102","3":"102","difference":"-4","4":"-4","perIncrease":"0","5":"0"},{"id":"18","0":"18","pair":"BTC_HUC","1":"BTC_HUC","buys":"98","2":"98","sales":"102","3":"102","difference":"4","4":"4","perIncrease":"0","5":"0"},{"id":"53","0":"53","pair":"BTC_AMP","1":"BTC_AMP","buys":"97","2":"97","sales":"103","3":"103","difference":"-6","4":"-6","perIncrease":"0","5":"0"},{"id":"48","0":"48","pair":"BTC_SC","1":"BTC_SC","buys":"97","2":"97","sales":"103","3":"103","difference":"-6","4":"-6","perIncrease":"-70","5":"-70"}],"sales":[{"id":"51","0":"51","pair":"BTC_FCT","1":"BTC_FCT","buys":"106","2":"106","sales":"94","3":"94","difference":"12","4":"12","perIncrease":"-25","5":"-25"},{"id":"61","0":"61","pair":"BTC_ARDR","1":"BTC_ARDR","buys":"107","2":"107","sales":"93","3":"93","difference":"14","4":"14","perIncrease":"40","5":"40"},{"id":"63","0":"63","pair":"BTC_STRAT","1":"BTC_STRAT","buys":"109","2":"109","sales":"91","3":"91","difference":"18","4":"18","perIncrease":"200","5":"200"},{"id":"49","0":"49","pair":"BTC_BCY","1":"BTC_BCY","buys":"112","2":"112","sales":"88","3":"88","difference":"24","4":"24","perIncrease":"20","5":"20"},{"id":"59","0":"59","pair":"BTC_ETC","1":"BTC_ETC","buys":"112","2":"112","sales":"88","3":"88","difference":"24","4":"24","perIncrease":"-20","5":"-20"}]}
';
*/


var_export($json);
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
					          <th>% Change in trade</th>
					          <th>Trade Shift <i class="fa fa-timer"></i> (5mins ago) </th>
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
						if(preg_match('/-/', $sub_array["difference"])){
							$pointer = '<i class="fa fa-chevron-down" style="color:red;"></i>';
							$examination = 'decreasing trade vol in the last 5mins';
						}else{
							$pointer = '<i class="fa fa-chevron-up" style="color:green;"></i>';
							$examination = 'increasing trade vol in the last 5mins';
						}
						
						echo '<tr>';
					    echo '<td>'.$sub_array["id"].'</td>';
					    echo '<td>'.$sub_array["pair"].'</td>';
					    echo '<td>'.$sub_array["buys"].'</td>';
					    echo '<td>'.$sub_array["sales"].'</td>';
					    echo '<td>'.$sub_array["difference"].'% </td>';
					    echo '<td>'.$sub_array["perIncrease"].'</td>';
					    echo '<td>'.$pointer.'</td>';
					    echo '<td>'.$examination.'</td>';   
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

?>
		
