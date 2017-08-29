<?php

namespace poloniex\api;

use poloniex\api\tools\Request;

/**
 * Poloniex Public API Methods.
 *
 * Please note that making more than 6 calls per second to the public API, or
 * repeatedly and needlessly fetching excessive amounts of data, can result in
 * your IP being banned.
 *
 * There are six public methods, all of which take HTTP GET requests and return
 * output in JSON format.
 *
 * @link URL https://poloniex.com/support/api/
 *
 * @category Poloniex API
 * @author Dmytro Zarezenko <dmytro.zarezenko@gmail.com>
 * @copyright (c) 2017, Dmytro Zarezenko
 *
 * @git https://github.com/dzarezenko/poloniex-api
 * @license http://opensource.org/licenses/MIT
 */
class PoloniexAPIPublic {

    /**
     * Returns the ticker for all markets.
     *
     * @return json
     */
    public static function returnTicker() {
        return Request::json(
            PoloniexAPIConf::URL_PUBLIC . '?command=returnTicker'
        );
    }

    /**
     * Returns the 24-hour volume for all markets, plus totals for primary
     * currencies.
     *
     * @return json
     */
    public static function return24hVolume() {
        return Request::json(
            PoloniexAPIConf::URL_PUBLIC . '?command=return24hVolume'
        );
    }

    /**
     * Returns the order book for a given market, as well as a sequence number
     * for use with the Push API and an indicator specifying whether the market
     * is frozen. You may set currencyPair to "all" to get the order books of
     * all markets.
     *
     * @param string $currencyPair In the 'BTC_NXT' format or 'all'.
     * @param int $depth Depth.
     *
     * @return json
     */
    public static function returnOrderBook($currencyPair = "all", $depth = null) {
        $request = PoloniexAPIConf::URL_PUBLIC . "?command=returnOrderBook"
                 . "&currencyPair={$currencyPair}";

        if ($depth) {
            $request.= "&depth={$depth}";
        }

        return Request::json($request);
    }

    /**
     * Returns the past 200 trades for a given market, or up to 50,000 trades
     * between a range specified in UNIX timestamps by the "start" and "end" GET
     * parameters.
     *
     * @param string $currencyPair In the 'BTC_NXT' format.
     * @param int $start Start timestamp.
     * @param int $end End timestamp.
     *
     * @return json
     */
    public static function returnTradeHistory($currencyPair, $start, $end) {
        return Request::json(
            PoloniexAPIConf::URL_PUBLIC . "?command=returnTradeHistory"
                . "&currencyPair={$currencyPair}"
                . "&start={$start}&end={$end}"
        );
    }

    /**
     * Returns candlestick chart data.
     * "Start" and "end" are given in UNIX timestamp format and used to specify the
     * date range for the data returned.
     *
     * @param string $currencyPair In the 'BTC_NXT' format.
     * @param int $period Candlestick period in seconds:
     *           valid values are 300, 900, 1800, 7200, 14400, and 86400.
     * @param int $start Start time in the UNIX timestamp format.
     * @param int $end End time in UNIX timestamp format.
     *
     * @return json
     */
    public static function returnChartData($currencyPair, $period, $start, $end) {
        return Request::json(
            PoloniexAPIConf::URL_PUBLIC . "?command=returnChartData"
                . "&currencyPair={$currencyPair}"
                . "&start={$start}&end={$end}"
                . "&period={$period}"
        );
    }

    /**
     * Returns information about currencies.
     *
     * @return json
     */
    public static function returnCurrencies() {
        return Request::json(PoloniexAPIConf::URL_PUBLIC . '?command=returnCurrencies');
    }

    /**
     * Returns the list of loan offers and demands for a given currency,
     * specified by the "currency" GET parameter.
     *
     * @param string $currency Currency name.
     *
     * @return json
     */
    public static function returnLoanOrders($currency = null) {
        $request = PoloniexAPIConf::URL_PUBLIC . '?command=returnLoanOrders';
        if ($currency) {
            $request.= "&currency={$currency}";
        }

        return Request::json($request);
    }

}
