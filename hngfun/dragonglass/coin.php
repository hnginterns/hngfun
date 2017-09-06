<?php

  include ('Poloniex.php');

  $api_key = 'U5ZUDL9X-20HYGDKV-MZ4D7300-Z6UZTFHE';
  $secret = '3f5705466251ff4ea9e5a744b38265295382190792435b63b9102a69e85d5ceaf1cbe06116000125f667520d825190705d067d7ae0feaf641d021cdc4bcd5ea9';

  $px = new Poloniex($api_key, $secret);

  $coins = json_decode(file_get_contents('coin.json'), true);

  /**
   * Holds all coin types data
   * @var array
   */
  $general_coin_data = [
    // Format
    //'BTC_XPM' => [nos_of_buys, nos_of_sales],
  ];

  /**
   * We get tradeHistory for each coin type and.
   *
   */
  foreach ($coins as $key) {
    $buys = 0;
    $sales = 0;

    $history = getTradeHistory($key);
    $coin_data = json_decode($history, true);

    /**
     * We analyze to get the numbers of sales and buys
     * @var [type]
     */
    foreach ($coin_data as $a => $value) {
      if($value['type'] == 'buy')
        $buys++;
      if($value['type'] == 'sell')
        $sales++;
    }

    /**
     * We add the current coin stats to the $general_coin_data array
     *
     */

    //$general_coin_data[$key] = [$buys, $sales];

    /**
     * Holds the diiference in the sales, the samething as saying
     * +1 for buy and -1 for sell, this is done for more modularity.
     * i.e i can switch between what i want.
     * @var [type]
     */
    $diff = $buys - $sales;
    $general_coin_data[$key] = [$diff];
  }

  // Now we can analyze which one hhas the highest sale and highest bought
  //
  // We sor the $general_coin_data ArrayAccess
  //
  usort($general_coin_data, function($a, $b) {
    if($a[0] == $b[0])
      return 0;
    return ($a[0] > $b[0]) ? 1 : -1;
  });

  /**
   * Sort is complete, we can now have the data.
   */
