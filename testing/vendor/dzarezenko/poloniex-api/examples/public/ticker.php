<?php

/**
 * Returns the ticker for all markets.
 */

require_once("../../vendor/autoload.php");

use poloniex\api\PoloniexAPIPublic;
use poloniex\api\Poloniex;

// Static call
$ticket = PoloniexAPIPublic::returnTicker();
var_dump($ticket);

// Dynamic call
$poloniex = new Poloniex();
$ticket = $poloniex->returnTicker();
var_dump($ticket);
