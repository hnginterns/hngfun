<?php
require('class/Poloniex.php');
require('class/Coinman.php');
$config = include('config.php');

// Crates an instance of CoinMan
$cm = new Coinman($config['api_key'], $config['api_secret']);

// We Run CoinMan
$cm->runCoinMan();
