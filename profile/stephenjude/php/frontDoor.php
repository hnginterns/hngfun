<?php

/**
 *
 * @package CoinMan
 */

class Coinman
{
  /**
   * Poloniex Wrapper Object
   * @var Object Poloniex
   */
  private $poloniex;

  // No description yet
  private $coins;

  /**
   * API calls counter
   * @var int
   */
  private $api_calls = 0;

  /**
   * Calls allowed by API
   * @var int
   */
  private $call_allowed = 6;

  /**
   * Time allowed by API
   * @var int
   */
  private $time_allowed = 1;

  /**
   * The last time the api was called
   * @var int
   */
  private $last_call_time = 0;


  public function __construct($api_key, $api_secret)
  {
    $this->poloniex = new Poloniex($api_key, $api_secret);
  }

  /**
   * Entry Method for running coinman
   * @return void
   */
  public function runCoinMan()
  {

    $data = $this->call_api('get_trading_pairs');
    $this->json_response($data);
  }
  /**
   * Sends back json_encoded data to the client
   * @param  mixed $data data to be sent
   * @return void
   */
  public function json_response($data)
  {
    header('Content-type: application/json');
    echo json_encode($data);
  }

  /**
   * This function will serve as a frontdoor for all our api requests,
   * so that we can monitor them as its coming, the function will allow us to make sure that
   * the request is limited to 6 API calls pre Second
   * @return void
   */
  public function call_api($handle, $params = [])
  {
    //var_dump($this->poloniex->get_ticker());
    //exit;
    /**
     * I need to check the time first, is it up to 1sec, if yes
     * i must check if the $api_calls is up to 6.
     * if its up to six, i must pause abit - delay i.e timeout a while, then resume for the next seconds
     *
     * If both
     * @var [type]
     */

    /**
     * This is the difference between the last api call time and now.
     * @var int
     */
    $diff_in_time = microtime(true) - $this->last_call_time;

    /**
     * If the last api call time is less that the allowed time (1 second)
     * and the API calls made from that time is less that the calls allowed (6 calls)
     * then we can still make an API request
     *
     * @var mixed
     */
    if($this->api_calls < $this->call_allowed && $this->diff_in_time < $this->time_allowed) {


      // Set the last call time
      $this->last_call_time = microtime( true );

      // We call the function
      $data = empty($params) ? $this->poloniex->{$handle}() : $this->poloniex->{$handle}($params[0]);

      // Then we  increment the API calls
      $this->api_calls++;

      // Then we return the data appropriately since all API calls returns data
      return $data;

    } else {

      /**
       * What happens here is that we have to know what made the above condition to return false
       * and take appropriate step to managing it
       * @var integer
       */

      /**
       * First I check if the api calls is up to 6
       *
       */
      if($this->api_calls == $this->call_allowed && $diff < $this->time_allowed) {

        // If time is not up to 1 seconds and we already have 6 API calls,
        // Then our script must wait till 1 second is reached before we will call the API again.


          // We tell the script to wait till execution time will be above the one seconds limit
          usleep($diff+100);

          // After Sleep we will call the API again
          $data = empty($params) ? call_user_func_array([$this->poloniex, $handle]) : call_user_func_array([$this->poloniex, $handle], $params) ;

          // We increment API call
          $this->api_calls++;

          // Then we reset the last API call time
          $this->last_call_time = microtime(true);

          // We then return the data.
          return $data;

      } else if($diff == $this->time_allowed && $this->api_calls < $this->call_allowed) {

        //I have violated the DRY principle here, but will refactor later. :D
        // 1 second is reached, but we will wait abit then call the API again.
        usleep(100);

        // Before we call the API, we will reset the number of calls to 0
        $this->api_calls = 0;

        // Call the API
        $data = empty($params) ? call_user_func_array([$this->poloniex, $handle]) : call_user_func_array([$this->poloniex, $handle], $params) ;

        // Then i increment the Api calls
        $this->api_calls++;

        // We reset ths last API call time
        $this->last_call_time = microtime(true);

        // Return the data
        return $data;
      } else {
        // 1 seconds is reached and max of 6 is reached

        //I have violated the DRY principle here, but will refactor later. :D
        // 1 second is reached, but we will wait abit then call the API again.
        usleep(100);

        // Before we call the API, we will reset the number of calls to 0
        $this->api_calls = 0;

        // Call the API
        $data = empty($params) ? call_user_func_array([$this->poloniex, $handle]) : call_user_func_array([$this->poloniex, $handle], $params) ;

        // Then i increment the Api calls
        $this->api_calls++;

        // We reset ths last API call time
        $this->last_call_time = microtime(true);

        // Return the data
        return $data;
      }
    }
  }





}
