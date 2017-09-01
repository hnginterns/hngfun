
<?php
require ("p_api.php");
  
$api_key = "52P8WQDT-UNTGQINY-A7RUEC8A-PJ7RQCKL"; // Api Keys here
$api_secret = "1d63d60d45b510553c0bc7dd2aa4128e8b36c44d23a47459e03ef077bb5c1d25a098e1139434c7ceb97ed3ab7673164a6f12a67432d5062be08992b5c04e358e"; // Api Secret here

# loadclass
echo $load_trade = new poloniex($api_key, $api_secret);
echo $trade_ticker = $load_trade->get_trading_pairs();


					
	<html>
		<head>
		</head>
		<body>
					
					foreach ($load_ticker as $key => $arrays) {	
						echo '<br>';
						echo '<br><a href="trade_history.php?pair='.$key.'">'.$key.'</a></td>';
						echo '<br>'.$arrays['id'];
						echo '<br>'.$arrays['last'];
						echo '<br>'.$arrays['lowestAsk'];
						echo '<br>'.$arrays['highestBid'];
						echo '<br>'.$arrays['percentChange'];
						echo '<br>'.$arrays['baseVolume'];
						echo '<br>'.$arrays['quoteVolume'];
						echo '<br>'.$arrays['isFrozen'];
						echo '<br>'.$arrays['high24hr'];
						echo '<br>'.$arrays['low24hr'];
						echo '<br>';
					}	
				?>
		</body>
		</html>
