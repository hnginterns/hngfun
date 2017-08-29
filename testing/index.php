<?php

require_once("vendor/autoload.php");
use poloniex\api\PoloniexAPIPublic;
use poloniex\api\Poloniex;
// Static call
$ticket = PoloniexAPIPublic::returnTicker();
// Dynamic call
$poloniex = new Poloniex();
$tickets = $poloniex->returnCurrencies();


  
 
  
  $tickers = $poloniex->returnTradeHistory("BTC_BELA", 1504042566, 1504042566);
 
  
 

var_dump($tickers);

//require 'index.view.php';
