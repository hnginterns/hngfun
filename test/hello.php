<?php

include('New.php');
//include('Polo.php');

$poloniex = new Poloniex("U5ZUDL9X-20HYGDKV-MZ4D7300-Z6UZTFHE","3f5705466251ff4ea9e5a744b38265295382190792435b63b9102a69e85d5ceaf1cbe06116000125f667520d825190705d067d7ae0feaf641d021cdc4bcd5ea9");

echo "Ticker: ";
print_r($poloniex->returnTicker());
echo "<br>";
echo "24h volume: ";
print_r($poloniex->return24hVolume());
echo "<br>";



?>
