<?php

require_once("vendor/autoload.php");
use poloniex\api\PoloniexAPIPublic;
use poloniex\api\Poloniex;
// Static call
$ticket = PoloniexAPIPublic::returnTicker();
// Dynamic call
$poloniex = new Poloniex();
$tickets = $poloniex->returnCurrencies();


  
 
  
  $tickers = $poloniex->returnTradeHistory("BTC_BELA");
 
  
 

var_dump($tickers);

//require 'index.view.php';
