
<?php
require ("p_api.php");
  
$api_key = "52P8WQDT-UNTGQINY-A7RUEC8A-PJ7RQCKL"; // Api Keys here
$api_secret = "1d63d60d45b510553c0bc7dd2aa4128e8b36c44d23a47459e03ef077bb5c1d25a098e1139434c7ceb97ed3ab7673164a6f12a67432d5062be08992b5c04e358e"; // Api Secret here

# loadclass
$load_trade = new poloniex($api_key, $api_secret);
$trade_ticker = $load_trade->get_trading_pairs();

?>
					
	<html>
		<head>
		</head>
		<body>
					
				<?php	
				echo $trade_ticker;
				foreach ($trade_ticker as $key => $arrays) {	
						echo '<tr>';
						echo '<td><a href="trade_history.php?pair='.$key.'">'.$key.'</a></td>';
						echo '<td>'.$arrays['id'].'</td>';
						echo '<td>'.$arrays['last'].'</td>';
						echo '<td>'.$arrays['lowestAsk'].'</td>';
						echo '<td>'.$arrays['highestBid'].'</td>';
						echo '<td>'.$arrays['percentChange'].'</td>';
						echo '<td>'.$arrays['baseVolume'].'</td>';
						echo '<td>'.$arrays['quoteVolume'].'</td>';
						echo '<td>'.$arrays['isFrozen'].'</td>';
						echo '<td>'.$arrays['high24hr'].'</td>';
						echo '<td>'.$arrays['low24hr'].'</td>';
						echo '</tr>';
					}
				?>
		</body>
		</html>
