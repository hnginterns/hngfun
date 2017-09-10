<?php

/**
 *
 * @package CoinMan
 */

class Coinman
{

  private $db;


  public function __construct($api_key, $api_secret)
  {
    $this->poloniex = new Poloniex($api_key, $api_secret);
    $this->db = new PDO('mysql:host=localhost;dbname=hng', 'root', '@hng.funmysql');
  }

  /**
   * Entry Method for running coinman
   * @return void
   */
  public function runCoinMan()
  {
    // two Ajax calls running
    if(isset($_GET['type']) && $_GET['type'] == 'catchData') {
      $this->catchData();
    } else {
      return $this->loadData();
    }
  }


  public function catchData() {
    $coins = $this->getPairsFromDb();
    if(empty($coins)) {
      $coins = $this->poloniex->get_trading_pairs();
      $coins = $this->getOnlyBtc($coins);
      $this->savePairs($coins);
    }

    //$coins = $this->getOnlyBtc($coins);


    $cnt_coins = 0;

    foreach ($coins as $key => $coin) {

        $tradeData = $this->poloniex->get_trade_history($coin);
        $sales = $this->countTransaction($tradeData, 'sell');
        $buys = $this->countTransaction($tradeData, 'buy');
        $newDifference = $buys - $sales;

        //$oldDifference = $this->getOldTransaction($coin, 'difference');
        $oldAvgDiff = $this->coinDifference($coin);

        $increase = $newDifference - $oldAvgDiff;
        $percentIncrease = $oldAvgDiff != 0 ? ($increase/$oldAvgDiff) * 100 : 0;

        $coinData = [
                    $coin,
                    $buys,
                    $sales,
                    $newDifference,
                    $percentIncrease,
        ];

        $this->saveCoinData($coinData);
    }

  }

  private function coinDifference($coin) {
    $sql = "SELECT * FROM trade_history WHERE pair = '$coin'";
    $exe = $this->db->query($sql);
    $data = $exe->fetchAll(PDO::FETCH_ASSOC);
    $total_occurence = count($data);
    $total_diff = 0;
    $avg = 0;
    if($total_occurence != 0) {
      foreach ($data as $key => $value) {
        $total_diff = $total_diff + $value['difference'];
        
      }
      $avg = $total_diff / $total_occurence;
    }

    return $avg;
  }

  private function getOldTransaction($pair, $type) {
    $previousData = $this->db->query("SELECT $type FROM trade_history WHERE pair = '$pair' LIMIT 1");
    $previousData = $previousData->fetch()[$type];
    return $previousData;
  }

  public function loadData() {
    $pairs = $this->getPairsFromDb();
    

    $arr = [];
    foreach ($pairs as $key => $pair) {
      $arr[] = $this->getCoinData($pair);
    }

    $nos = count($arr); 
    $totalPercentIncrease = 0;
    foreach ($arr as $key => $value) {
      $totalPercentIncrease = $totalPercentIncrease + $value['perIncrease'];
    }

    $avg = $totalPercentIncrease / $nos;
    $avg = $avg < 1 ? -1 * $avg : $avg; // Make sure its positive

    foreach ($arr as $key => $pair) {
      if($pair['perIncrease'] > 0) {
          $arr[$key]['perIncrease'] = $pair['perIncrease'] - $avg;
        }
    }

    usort($arr, function($a, $b) {
      $p1 = $a['perIncrease'];
      $p2 = $b['perIncrease'];

      if ($p1 == $p2) return 0;
      return $p1 > $p2 ? 1 : -1;
    });
    
    $arr = array_reverse($arr);
    
    $a1 = array_slice($arr, -3, 3);
    $a2 = array_slice($arr, 3, 3);
    
    $data = array_merge($a1, $a2);
    
    foreach($data as $key => $v) {
        $data[$key]['perIncrease'] = $v['perIncrease'] / 100;
    }
    
    usort($data, function($a, $b) {
      $p1 = $a['perIncrease'];
      $p2 = $b['perIncrease'];

      if ($p1 == $p2) return 0;
      return $p1 > $p2 ? 1 : -1;
    });
    
    $data = array_reverse($data);
    return $data;
    $this->json_response($data);
  }

  private function getCoinData($pair) {
    $exe = $this->db->query("SELECT * FROM trade_history WHERE pair = '$pair' ORDER BY id DESC LIMIT 1");
    return $exe->fetch();
  }


  private function getAllAveragePercentIncrease() {
    $exe = $this->db->query("SELECT * FROM trade_history ");
    $trades = $exe->fetchAll(PDO::FETCH_ASSOC);
    $nos = count($trades);
    $totalPercentIncrease = 0;
    foreach ($trades as $key => $value) {
      $totalPercentIncrease = $totalPercentIncrease + $value['perIncrease'];
    }

    $avg = $totalPercentIncrease / $nos;

    return ($avg > 0) ? $avg : (-1 * $avg);
  }

  private function saveCoinData($coinData) {
    $coin = $coinData[0];
    $buys = $coinData[1];
    $sales = $coinData[2];
    $diff = $coinData[3];
    $perIncrease = $coinData[4];
    $e = $this->db->query("INSERT INTO trade_history VALUES (NULL, '$coin', '$buys', '$sales', '$diff', '$perIncrease')");
    if(!$e) {
     //echo  $this->db->errorInfo()[2];
      //exit;
    }
  }

  private function getPairsFromDb() {
    $exe = $this->db->query("SELECT pairs FROM pair LIMIT 1");
    $pairJSON = $exe->fetch(PDO::FETCH_ASSOC)['pairs'];
    return json_decode($pairJSON, true);
  }

  private function savePairs($pairs) {
    $pairs = json_encode($pairs);
    $exe = $this->db->query("INSERT into pair VALUES (null, '$pairs')");
  }


  private function getOnlyBtc($pairs) {
    foreach ($pairs as $key => $value) {
        $pos = strpos($value, 'BTC');
      if($pos === false) {
        unset($pairs[$key]);
      }
    }
    return $pairs;
  }

  private function countTransaction($tradeData, $type) {
    $count = 0;
    if(!empty($tradeData)) {
      foreach ($tradeData as $key => $value) {
        if($value['type'] == $type)
          $count++;
      }
    }
    return $count;
  }

  // Not being used for now
  private function getDifference($pair, $buys, $sales) {
    $previousData = $this->db->query("SELECT * FROM trade_history WHERE pair = '$pair'");
    $previousData = $previousData->fetch();
  }

  /**
   * Sends back json_encoded data to the client
   * @param  mixed $data data to be sent
   * @return void
   */
  public function json_response($data)
  {
    header('Content-type: application/json');
    $jsonData = json_encode($data);
    return $jsonData;
  }
}
