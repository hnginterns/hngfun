
<?php
require ("Thread.php");
require ("p_api.php");
  
$api_key = "52P8WQDT-UNTGQINY-A7RUEC8A-PJ7RQCKL"; // Api Keys here
$api_secret = "1d63d60d45b510553c0bc7dd2aa4128e8b36c44d23a47459e03ef077bb5c1d25a098e1139434c7ceb97ed3ab7673164a6f12a67432d5062be08992b5c04e358e"; // Api Secret here

# loadclass
$load_trade = new poloniex($api_key, $api_secret);

//$trade_ticker = $load_trade->get_ticker();
$trade_ticker = $load_trade->get_trading_pairs();

?>
					
	<html>
		<head>
		</head>
		<body>
					
				<?php	
				
				
			// test to see if threading is available
			if( ! Thread::isAvailable() ) {
			    die( 'Threads not supported' );
			}

			// function to be ran on separate threads
			function task( ) {
			     $arrlength = count($trade_ticker);
				
				for ($i = 0; $i < 20; $i++) {	
					//echo $load_trade->get_trade_history($trade_ticker[$i]);
					$trade_history = $load_trade->get_trade_history($trade_ticker['3']);	
					$trade_history_count = count($trade_history);					
					$count_sell = 0;
					$count_buy = 0;					
					foreach($load_trade->get_trade_history($trade_ticker[$i]) as $x => $x_value) {
					    if($x_value["type"] == "sell"){
						$count_sell = $count_sell+1;
					    }else if($x_value["type"] == "buy"){
						$count_buy = $count_buy+1;
					    }
					}
					echo '<p>';
					echo $trade_ticker[$i].": ".$trade_history_count."; Total Buy = ".$count_buy."; Total Sell =  ".$count_sell."</p>";
					echo '</p>';
				}
			}

			// create 2 thread objects
			$t1 = new Thread( 'task' );

			// start them
			$t1->start();

			// keep the program running until the threads finish
			while( $t1->isAlive() && $t2->isAlive() ) {

			}
			
				?>
		</body>
		</html>
