<?php
// include core files
$config = include('../config.php');
require('Poloniex.php');
require('Coinman.php');

// Crates an instance of CoinMan
$cm = new Coinman($config['api_key'], $config['api_secret']);

// We Run CoinMan
$cm->runCoinMan();

// get request from the home page query 
if(isset($_GET['data'])){
	// this pages only return loaded json
	$load_data = $cm->loadData();

	// if the data is already in Json decode it
	echo json_decode($load_data);
}
?>
