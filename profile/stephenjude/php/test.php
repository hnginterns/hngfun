
<?php
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
				 $arrlength = count($trade_ticker);
				
				for ($i = 0; $i < 3; $i++) {	
						echo '<p>';
						//echo $load_trade->get_trade_history($trade_ticker[$i]);
						$trade_history = $load_trade->get_trade_history($trade_ticker['3']);				
						echo $trade_ticker.": ".$bcn_coin_status = $trade_history[3]["type"]."- ".count($trade_history);
						echo '</p>';
					}
			
				 	//$trade_history = $load_trade->get_trade_history($trade_ticker['3']);				
					//echo $bcn_coin_status = $trade_history[3]["type"];
				?>
		</body>
		</html>