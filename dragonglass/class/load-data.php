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
// $json = $cm->loadData();
// $json = json_decode($json, TRUE);

print_r($json);
?>
