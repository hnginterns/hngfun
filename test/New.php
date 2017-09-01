<?php
class Poloniex
{
    protected $key = '';
    protected $secret = '';
    /**
     * Poloniex constructor.
     *
     * @param null $key
     * @param null $secret
     */
    public function __construct($key = null, $secret = null)
    {
        $this->key = $key;
        $this->secret = $secret;
    }
    /**
     * @return array
     */
    public function returnTicker()
    {
        return $this->queryPublic('returnTicker');
    }
    /**
     * @return array
     */
    public function return24hVolume()
    {
        return $this->queryPublic('return24hVolume');
    }
    /**
     * @param null $currenyPair
     *
     * @return array
     */
    public function returnOrderBook($currencyPair = null)
    {
        if ($currencyPair === null) {
            $currencyPair = 'all';
        }
        return $this->queryPublic('returnOrderBook&currencyPair='.$currencyPair);
    }
    /**
     * @param null $currenyPair
     * @param $start (UNIX TIME)
     * @param $end (UNIX TIME)
     *
     * @return array
     */
    public function returnTradeHistory($currencyPair, $start, $end)
    {
        if ($currencyPair === null) {
            $currencyPair = 'all';
        }
        return $this->queryPublic('returnOrderBook&currencyPair='.$currencyPair.'&start='.$start.'&end='.$end);
    }
    /**
     * @param null $currencyPair
     * @param $start (UNIX TIME)
     * @param $end (UNIX TIME)
     * @param $period (candlestick period in seconds; valid values are 300, 900, 1800, 7200, 14400, and 86400)
     *
     * @return array
     */
    public function returnChartData($currencyPair, $start, $end, $period)
    {
        if ($currencyPair === null) {
            $currencyPair = 'all';
        }
        return $this->queryPublic('returnChartData&currencyPair='.$currencyPair.'&start='.$start.'&end='.$end.'&period='.$period);
    }
    /**
     * @return array
     */
    public function returnCurrencies()
    {
        return $this->queryPublic('returnCurrencies');
    }
    /**
     * @param $currency (Example: BTC)
     *
     * @return array
     */
    public function returnLoanOrders($currency)
    {
        return $this->queryPublic('returnCurrencies&currency='.$currency);
    }
//        https://poloniex.com/public?command=returnChartData&currencyPair=BTC_XMR&start=1405699200&end=9999999999&period=14400
    /**
     * @param $command
     *
     * @return array
     */
    private function queryPublic($command)
    {
        $uri = file_get_contents('https://poloniex.com/public?command='.$command);
        return json_decode($uri, true);
    }
}

?>
