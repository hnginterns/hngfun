<?php

namespace poloniex\api;

use poloniex\api\tools\Request;

/**
 * Poloniex Trading API Methods.
 *
 * Please note that making more than 6 calls per second to the public API, or
 * repeatedly and needlessly fetching excessive amounts of data, can result in
 * your IP being banned.
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
class PoloniexAPITrading {

    private $apiKey = "";
    private $apiSecret = "";

    private $request = null;

    /**
     * Constructor of the class.
     *
     * @param string $apiKey Poloniex API key.
     * @param string $apiSecret Poloniex API secret.
     */
    public function __construct($apiKey, $apiSecret) {
        $this->apiKey = $apiKey;
        $this->apiSecret = $apiSecret;

        $this->request = new Request($this->apiKey, $this->apiSecret);
    }

    /**
     * Returns all of your available balances.
     *
     * @return json
     */
    public function returnBalances() {
        return $this->request->exec([
            'command' => 'returnBalances'
        ]);
    }

    /**
     * Returns all of your balances, including available balance, balance on orders,
     * and the estimated BTC value of your balance. By default, this call is limited
     * to your exchange account; set the "account" POST parameter to "all" to
     * include your margin and lending accounts.
     *
     * @param string $account Set to "all" to include your margin and lending accounts.
     *
     * @return json
     */
    public function returnCompleteBalances($account = null) {
        $params = [
            'command' => 'returnCompleteBalances'
        ];

        if (!is_null($account) && (in_array($account, PoloniexAPIConf::$accounts) || $account === PoloniexAPIConf::ACCOUNT_ALL)) {
            $params['account'] = $account;
        }

        return $this->request->exec($params);
    }

    /**
     * Returns all of your deposit addresses.
     *
     * @return json
     */
    public function returnDepositAddresses() {
        return $this->request->exec([
            'command' => 'returnDepositAddresses'
        ]);
    }

    /**
     * Generates a new deposit address for the currency specified by the "currency"
     * POST parameter. Only one address per currency per day may be generated, and
     * a new address may not be generated before the previously-generated one has
     * been used.
     *
     * @param string $currency Currency name.
     *
     * @return json
     */
    public function generateNewAddress($currency) {
        return $this->request->exec([
            'command' => 'generateNewAddress',
            'currency' => strtoupper($currency)
        ]);
    }

    /**
     * Returns your deposit and withdrawal history within a range, specified by
     * the "start" and "end" POST parameters, both of which should be given as
     * UNIX timestamps.
     *
     * @param int $start Start timestamp.
     * @param int $end End timestamp.
     *
     * @return json
     */
    public function returnDepositsWithdrawals($start, $end) {
        return $this->request->exec([
            'command' => 'returnDepositsWithdrawals',
            'start' => $start,
            'end' => $end
        ]);
    }

    /**
     * Returns your open orders for a given market, specified by the "currencyPair"
     * POST parameter, e.g. "BTC_XCP". Set "currencyPair" to "all" to return open
     * orders for all markets.
     *
     * @param string $currencyPair In the 'BTC_NXT' format or 'all'.
     *
     * @return json
     */
    public function returnOpenOrders($currencyPair = "all") {
        return $this->request->exec([
            'command' => 'returnOpenOrders',
            'currencyPair' => $currencyPair
        ]);
    }

    /**
     * Returns your trade history for a given market, specified by the "currencyPair"
     * POST parameter. You may specify "all" as the currencyPair to receive your
     * trade history for all markets. You may optionally specify a range via
     * "start" and/or "end" POST parameters, given in UNIX timestamp format;
     * if you do not specify a range, it will be limited to one day.
     *
     * @param type $currencyPair
     * @param int $start Start timestamp.
     * @param int $end End timestamp.
     *
     * @return json
     */
    public function returnTradeHistory($currencyPair = "all", $start = null, $end = null) {
        $request = [
            'command' => 'returnTradeHistory',
            'currencyPair' => strtoupper($currencyPair)
        ];

        if (!is_null($start) && !is_null($end) && $end > $start) {
            $request['start'] = $start;
            $request['end'] = $end;
        }

        return $this->request->exec($request);
    }

    /**
     * Returns all trades involving a given order, specified by the "orderNumber"
     * POST parameter. If no trades for the order have occurred or you specify
     * an order that does not belong to you, you will receive an error.
     *
     * @param string $orderNumber Order number.
     *
     * @return json
     */
    public function returnOrderTrades($orderNumber) {
        return $this->request->exec([
            'command' => 'returnOrderTrades',
            'orderNumber' => $orderNumber
        ]);
    }

    /**
     * Places a limit buy order in a given market. Required POST parameters are
     * "currencyPair", "rate", and "amount". If successful, the method will return
     * the order number.
     *
     * You may optionally set "fillOrKill", "immediateOrCancel", "postOnly" to 1.
     * - A fill-or-kill order will either fill in its entirety or be completely aborted.
     * - An immediate-or-cancel order can be partially or completely filled, but
     * any portion of the order that cannot be filled immediately will be canceled
     * rather than left on the order book.
     * - A post-only order will only be placed if no portion of it fills immediately;
     * this guarantees you will never pay the taker fee on any part of the order that fills.
     *
     * @param string $currencyPair In the 'BTC_NXT' format or 'all'.
     * @param float $rate Order rate.
     * @param float $amount Order amount.
     * @param array $optional Optional parameters array.
     *
     * @return json
     */
    public function buy($currencyPair, $rate, $amount, $optional = []) {
        $request = [
            'command' => 'buy',
            'currencyPair' => strtoupper($currencyPair),
            'rate' => $rate,
            'amount' => $amount
        ];

        if (!empty($optional) && is_array($optional)) {
            $request = array_merge($request, $optional);
        }

        return $this->request->exec($request);
    }

    /**
     * Places a sell order in a given market. Parameters and output are the same
     * as for the buy method.
     *
     * @param string $currencyPair In the 'BTC_NXT' format or 'all'.
     * @param float $rate Order rate.
     * @param float $amount Order amount.
     * @param array $optional Optional parameters array.
     *
     * @return json
     */
    public function sell($currencyPair, $rate, $amount, $optional = []) {
        $request = [
            'command' => 'sell',
            'currencyPair' => strtoupper($currencyPair),
            'rate' => $rate,
            'amount' => $amount
        ];

        if (!empty($optional) && is_array($optional)) {
            $request = array_merge($request, $optional);
        }

        return $this->request->exec($request);
    }

    /**
     * Cancels an order you have placed in a given market. Required POST parameter
     * is "orderNumber".
     * If successful, the method will return: {"success":1}.
     *
     * @param string $orderNumber Order number.
     *
     * @return json
     */
    public function cancelOrder($orderNumber) {
        return $this->request->exec([
            'command' => 'cancelOrder',
            'orderNumber' => $orderNumber
        ]);
    }

    /**
     * Cancels an order and places a new one of the same type in a single atomic
     * transaction, meaning either both operations will succeed or both will fail.
     * Required POST parameters are "orderNumber" and "rate";
     * you may optionally specify "amount" if you wish to change the amount of the
     * new order. "postOnly" or "immediateOrCancel" may be specified for exchange
     * orders, but will have no effect on margin orders.
     *
     * @param string $orderNumber Order number.
     * @param float $rate Order rate.
     * @param float $amount Order amount (optional)
     * @param array $optional Optional parameters.
     *
     * @return json
     */
    public function moveOrder($orderNumber, $rate, $amount = null, $optional = []) {
        $request = [
            'command' => 'moveOrder',
            'orderNumber' => $orderNumber,
            'rate' => $rate
        ];

        if (!is_null($amount) && $amount > 0.00) {
            $request['amount'] = $amount;
        }

        if (!empty($optional) && is_array($optional)) {
            $request = array_merge($request, $optional);
        }

        return $this->request->exec($request);
    }

    /**
     * Immediately places a withdrawal for a given currency, with no email
     * confirmation. In order to use this method, the withdrawal privilege must
     * be enabled for your API key. Required POST parameters are "currency",
     * "amount", and "address". For XMR withdrawals, you may optionally specify
     * "paymentId".
     *
     * @param string $currency Currency name.
     * @param float $amount Amount to withdraw.
     * @param string $address Address to withdraw.
     * @param string $paymentId Payment ID for the XMR currency.
     *
     * @return json
     */
    public function withdraw($currency, $amount, $address, $paymentId = null) {
        $request = [
            'command' => 'withdraw',
            'currency' => strtoupper($currency),
            'amount' => $amount,
            'address' => $address
        ];

        if ($currency === "XMR" && !empty($paymentId)) {
            $request['paymentId'] = $paymentId;
        }

        return $this->request->exec($request);
    }

    /**
     * If you are enrolled in the maker-taker fee schedule, returns your current
     * trading fees and trailing 30-day volume in BTC. This information is updated
     * once every 24 hours.
     *
     * @return json
     */
    public function returnFeeInfo() {
        return $this->request->exec([
            'command' => 'returnFeeInfo'
        ]);
    }

    /**
     * Returns your balances sorted by account. You may optionally specify the
     * "account" POST parameter if you wish to fetch only the balances of one
     * account. Please note that balances in your margin account may not be
     * accessible if you have any open margin positions or orders.
     *
     * @return json
     */
    public function returnAvailableAccountBalances($account = null) {
        $request = [
            'command' => 'returnAvailableAccountBalances'
        ];

        if (!is_null($account) && in_array($account, PoloniexAPIConf::$accounts)) {
            $request['account'] = $account;
        }

        return $this->request->exec($request);
    }

    /**
     * Returns your current tradable balances for each currency in each market
     * for which margin trading is enabled. Please note that these balances may
     * vary continually with market conditions.
     *
     * @return json
     */
    public function returnTradableBalances() {
        return $this->request->exec([
            'command' => 'returnTradableBalances'
        ]);
    }

    /**
     * Transfers funds from one account to another (e.g. from your exchange account
     * to your margin account). Required POST parameters are "currency", "amount",
     * "fromAccount", and "toAccount".
     *
     * @param string $currency Currency name.
     * @param float $amount Amount.
     * @param string $fromAccount From account name.
     * @param string $toAccount To account name.
     *
     * @return json
     */
    public function transferBalance($currency, $amount, $fromAccount, $toAccount) {
        if (!in_array($fromAccount, PoloniexAPIConf::$accounts)) {
            throw new \Exception("Invalid 'fromAccount' parameter");
        }

        if (!in_array($toAccount, PoloniexAPIConf::$accounts)) {
            throw new \Exception("Invalid 'toAccount' parameter");
        }

        return $this->request->exec([
            'command' => 'transferBalance',
            'currency' => strtoupper($currency),
            'amount' => $amount,
            'fromAccount' => $fromAccount,
            'toAccount' => $toAccount
        ]);
    }

    /**
     * Returns a summary of your entire margin account. This is the same information
     * you will find in the Margin Account section of the Margin Trading page,
     * under the Markets list.
     */
    public function returnMarginAccountSummary() {
        return $this->request->exec([
            'command' => 'returnMarginAccountSummary'
        ]);
    }

    /**
     * Places a margin buy order in a given market. Required POST parameters are
     * "currencyPair", "rate", and "amount". You may optionally specify a maximum
     * lending rate using the "lendingRate" parameter. If successful, the method
     * will return the order number and any trades immediately resulting from your order.
     *
     * @param string $currencyPair In the 'BTC_NXT' format.
     * @param float $rate Order rate.
     * @param float $amount Order amount.
     * @param float $lendingRate Maximum lending rate (optional)
     *
     * @return json
     */
    public function marginBuy($currencyPair, $rate, $amount, $lendingRate = null) {
        $request = [
            'command' => 'marginBuy',
            'currencyPair' => strtoupper($currencyPair),
            'rate' => $rate,
            'amount' => $amount
        ];

        if (!is_null($lendingRate) && $lendingRate > 0.00) {
            $request['lendingRate'] = $lendingRate;
        }

        return $this->request->exec($request);
    }

    /**
     * Places a margin sell order in a given market.
     * Parameters and output are the same as for the marginBuy method.
     *
     * @param string $currencyPair In the 'BTC_NXT' format.
     * @param float $rate Order rate.
     * @param float $amount Order amount.
     * @param float $lendingRate Maximum lending rate (optional)
     *
     * @return json
     */
    public function marginSell($currencyPair, $rate, $amount, $lendingRate = null) {
        $request = [
            'command' => 'marginSell',
            'currencyPair' => strtoupper($currencyPair),
            'rate' => $rate,
            'amount' => $amount
        ];

        if (!is_null($lendingRate) && $lendingRate > 0.00) {
            $request['lendingRate'] = $lendingRate;
        }

        return $this->request->exec($request);
    }

    /**
     * Returns information about your margin position in a given market, specified
     * by the "currencyPair" POST parameter. You may set "currencyPair" to "all"
     * if you wish to fetch all of your margin positions at once. If you have no
     * margin position in the specified market, "type" will be set to "none".
     * "liquidationPrice" is an estimate, and does not necessarily represent the
     * price at which an actual forced liquidation will occur.
     * If you have no liquidation price, the value will be -1.
     *
     * @param string $currencyPair In the 'BTC_NXT' format or 'all'.
     *
     * @return json
     */
    public function getMarginPosition($currencyPair) {
        return $this->request->exec([
            'command' => 'getMarginPosition',
            'currencyPair' => strtoupper($currencyPair)
        ]);
    }

    /**
     * Closes your margin position in a given market (specified by the "currencyPair"
     * POST parameter) using a market order. This call will also return success
     * if you do not have an open position in the specified market.
     *
     * @param string $currencyPair In the 'BTC_NXT' format.
     *
     * @return json
     */
    public function closeMarginPosition($currencyPair) {
        return $this->request->exec([
            'command' => 'closeMarginPosition',
            'currencyPair' => strtoupper($currencyPair)
        ]);
    }

    /**
     * Creates a loan offer for a given currency. Required POST parameters are
     * "currency", "amount", "duration", "autoRenew" (0 or 1), and "lendingRate".
     *
     * @param string $currency In the 'BTC_NXT' format.
     * @param float $amount Offer amount.
     * @param int $duration Offer days.
     * @param int $autoRenew Auto-renew flag.
     * @param float $lendingRate Offer lending rate.
     *
     * @return json
     */
    public function createLoanOffer($currency, $amount, $duration, $autoRenew, $lendingRate) {
        return $this->request->exec([
            'command' => 'createLoanOffer',
            'currency' => strtoupper($currency),
            'amount' => $amount,
            'duration' => $duration,
            'autoRenew' => $autoRenew,
            'lendingRate' => $lendingRate
        ]);
    }

    /**
     * Cancels a loan offer specified by the "orderNumber" POST parameter.
     *
     * @param string $orderNumber Order number.
     *
     * @return json
     */
    public function cancelLoanOffer($orderNumber) {
        return $this->request->exec([
            'command' => 'cancelLoanOffer',
            'orderNumber' => $orderNumber
        ]);
    }

    /**
     * Returns your open loan offers for each currency.
     *
     * @return json
     */
    public function returnOpenLoanOffers() {
        return $this->request->exec([
            'command' => 'returnOpenLoanOffers'
        ]);
    }

    /**
     * Returns your active loans for each currency.
     *
     * @return json
     */
    public function returnActiveLoans() {
        return $this->request->exec([
            'command' => 'returnActiveLoans'
        ]);
    }

    /**
     * Returns your lending history within a time range specified by the "start"
     * and "end" POST parameters as UNIX timestamps.
     * "limit" may also be specified to limit the number of rows returned.
     *
     * @param int $start Start timestamp.
     * @param int $end End timestamp.
     * @param int $limit Limit the number of rows returned.
     *
     * @return json
     */
    public function returnLendingHistory($start, $end, $limit = null) {
        $request = [
            'command' => 'returnLendingHistory',
            'start' => $start,
            'end' => $end
        ];

        if (!is_null($limit) && $limit > 0) {
            $request['limit'] = $limit;
        }

        return $this->request->exec($request);
    }

    /**
     * Toggles the autoRenew setting on an active loan, specified by the "orderNumber"
     * POST parameter. If successful, "message" will indicate the new autoRenew setting.
     *
     * @param string $orderNumber Order number.
     *
     * @return json
     */
    public function toggleAutoRenew($orderNumber) {
        return $this->request->exec([
            'command' => 'toggleAutoRenew',
            'orderNumber' => $orderNumber
        ]);
    }

}
