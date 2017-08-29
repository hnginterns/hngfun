<?php

namespace poloniex\api;

/**
 * Poloniex API Configuration constants.
 *
 * @category Poloniex API
 * @author Dmytro Zarezenko <dmytro.zarezenko@gmail.com>
 * @copyright (c) 2017, Dmytro Zarezenko
 *
 * @git https://github.com/dzarezenko/poloniex-api
 * @license http://opensource.org/licenses/MIT
 */
class PoloniexAPIConf {

    const URL_PUBLIC  = "https://poloniex.com/public";
    const URL_TRADING = "https://poloniex.com/tradingApi";

    const ACCOUNT_ALL = 'all';
    const ACCOUNT_EXCHANGE = 'exchange';
    const ACCOUNT_MARGIN = 'margin';
    const ACCOUNT_LENDING = 'lending';

    public static $accounts = [
        self::ACCOUNT_EXCHANGE, self::ACCOUNT_MARGIN, self::ACCOUNT_LENDING
    ];

}
