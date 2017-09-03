<?php

require('class/Poloniex.php');
require('class/Coinman.php');
$config = include('config.php');

// Crates an instance of CoinMan
$cm = new Coinman($config['api_key'], $config['api_secret']);

// We Run CoinMan
$json = $cm->runCoinMan();

?>



<section>
    <!--for demo wrap-->
	  <h1>DragonGlass</h1>

	      	<?php
                
                
    				echo '
						<div class="tbl-header table-responsive">
					    <table class="table" cellpadding="0" cellspacing="0" border="0">
					      <thead>
					        <tr>
					          <th>S/N</th>
					          <th>Currency Pairs</th>
					          <th>Number Buys</th>
					          <th>Number of Sells</th>
					          <th>Diffrence</th>
					          <th>$ Percent Change</th>
					          <th>Pointer</th>
					          <th>Summary</th>
					        </tr>
					      </thead>
					    </table>
					  	</div>
						<div class="tbl-content">
						<table cellpadding="0" cellspacing="0" border="0">
	      				<tbody>
	      			';


				foreach ($json as $key => $sub_array) {
					# code...
					//echo strtoupper($key).'<hr />';

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

	      	?>
	        
</section>
