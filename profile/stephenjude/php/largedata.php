<?php
require ("p_api.php");
$api_key = "52P8WQDT-UNTGQINY-A7RUEC8A-PJ7RQCKL"; // Api Keys here
$api_secret = "1d63d60d45b510553c0bc7dd2aa4128e8b36c44d23a47459e03ef077bb5c1d25a098e1139434c7ceb97ed3ab7673164a6f12a67432d5062be08992b5c04e358e"; // Api Secret here
# loadclass
$load_trade = new poloniex($api_key, $api_secret);
//$trade_ticker = $load_trade->get_ticker();
$trade_ticker = $load_trade->get_trading_pairs();
$arrlength = count($trade_ticker);
$alldata = Array();		
$biggest = Array();	
$bigger = Array();	
$big = Array();		
$first_runner_up = 0;
$second_runner_up = 0;
$third_runner_up = 0;
for ($i = 0; $i < 6; $i++) {
	
	$trade_history = $load_trade->get_trade_history($trade_ticker['3']);	
	$trade_history_count = count($trade_history);					
	$count_sell = 0;
	$count_buy = 0;
	
	 $coin_histry = $load_trade->get_trade_history($trade_ticker[$i]) ;
	foreach($coin_histry as $x => $x_value) {	
	    $coin_histry = $load_trade->get_trade_history($trade_ticker[$i]) ;	
	    //echo array_search("buy", $coin_histry);
	}
}	
	
	
	//echo json_encode($biggest)." <br>";
	//echo json_encode($bigger)." <br>";
	//echo json_encode($big)." <br>";
?>	
