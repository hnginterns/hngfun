<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Phone</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div class="content">
        <div class="header">
            <img src="images/ham.png" alt="Hamburger" width="40" height="20">
            <h5>Phone Top up</h5>
            <input type="search" name="search" id="search" placeholder="Search">
        </div>
        <div class="content_two">
            <div class="balance">
                <h5>Balance</h5>
                <span class="box">
                        <p>Available <br>in Wallet<br>
                        <strong>
                            <?php
                                  $curl = curl_init();
                                  curl_setopt_array($curl, array(
                                    CURLOPT_URL => "https://mobileairtimeng.com/httpapi/balance.php?userid=%2008189115870&pass=dbcc49ee2fba9f150c5e82",
                                    CURLOPT_RETURNTRANSFER => true,
                                    CURLOPT_ENCODING => "",
                                    CURLOPT_MAXREDIRS => 10,
                                    CURLOPT_TIMEOUT => 30,
                                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                                    CURLOPT_CUSTOMREQUEST => "GET",
                                    CURLOPT_HTTPHEADER => array(
                                      "cache-control: no-cache",
                                      "postman-token: 28c061c4-a48c-629f-3aa2-3e4cad0641ff"
                                    ),
                                  ));
                                  $response = curl_exec($curl);
                                  $err = curl_error($curl);
                                  curl_close($curl);
                                  if ($err) {
                                    echo "cURL Error #:" . $err;
                                  } else {
                                    echo $response;
                                  }
                            ?>
                            </strong></p>
                </span>
            </div>
            <div class="wallet">
                    <h5>Refill Topup Wallet</h5>
                    <p>Select Amount</p>
                    <div class="button">
                         <form>
                            <button class="submit-amount" type="button" data-amount="500" value="500" id="submit">&nbsp; N500</button>
                            <button class="submit-amount" type="button" data-amount="1000" value="1000" id="submit">&nbsp; N1000</button>
                            <button class="submit-amount" type="button" data-amount="2000" value="2000" id="submit">&nbsp; N2000</button><br>
                            <button class="submit-amount" type="button" data-amount="3000" value="3000" id="submit">&nbsp; N3000</button>
                            <button class="submit-amount" type="button" data-amount="4000" value="4000" id="submit">&nbsp; N4000</button>
                            <button class="submit-amount" type="button" data-amount="5000" value="5000" id="submit">&nbsp; N5000</button>
                        </form>
                    </div>
            </div>
            
        </div>
            <div class="thirdblock">
                    <h5>Top Up Prepaid Mobile Phone</h5>
                    <div class="details">
                        <h6>Select Items</h6>
                        <img src="images/call.png" alt="call icon"><br><br><hr>
                        <p>Chef's Phone - <strong>417-873-60000</strong> </p>
                        <button class="history">Transaction History</button>
                            <div class="selectamount">
                                <span class="selecttopup"><h6>Select Amount</h6>
                                    <img src="images/naira.png" alt="naira" width="25px" height="25px" >
                                </span>
                                <span class="reach">
                                    <form action="script.php" method="POST">
                                            <input type="submit" name="load500" id="load500"  value="500"/>
                                            <input type="submit" name="load1000" id="load1000" value="1000"/>
                                            <input type="submit" name="load2000" id="load2000" value="2000"/>
                                            <input type="submit" name="load3000" id="load3000" value="3000"/>
                                            <input type="submit" name="load4000" id="load4000" value="4000"/>
                                            <input type="submit" name="load5000" id="load5000 " value="5000"/>                                            
                                    </form>
                                </span>
                               
                            </div>
                            <br><br><br><br><br><br><br><br><br><br><br><hr>
                            <div class="numbers">
                                <ul>
                                    <li>CTO's Phone</li> <hr>
                                    <li>HRM's Phone</li> <hr>
                                    <li>MD's Phone</li> <hr>
                                    <li>CSO's Phone</li> <hr>
                                    <li>DOCTOR's Phone</li> 
                                </ul>
                            </div>
                           
                           
                    </div>
                    <div class="details2">
                        <h6>TopUp Data Plans</h6><hr>
                        <ul>
                            <li> <button><img src="images/1.png" width="40" height="40" alt="9mobile"> </button></li> 
                            <li> <button><img src="images/2.png" width="40" height="40" alt="mtn"> </button></li> 
                            <li> <button><img src="images/3.png" width="40" height="40" alt="airtel"></button> </li> 
                            <li> <button><img src="images/4.png" width="40" height="40" alt="glo"> </button></li> <hr>
                        </ul>
                        <span class="data">
                            <form action="datascript.php" method="POST">
                               <button type="submit" name="data1000" id="data1000"  value="1000">1.5Gb <br> 30days<br> <strong>N1,000</strong></button>
                               <button type="submit" name="data2000" id="data2000"  value="2000">1.5Gb <br> 30days<br> <strong>N2,000</strong> </button>
                               <button "type="submit" name="data3000" id="data3000"  value="3000">1.5Gb <br> 30days<br> <strong>N3,000</strong> </button>
                               <br>
                               <button type="submit" name="data4000" id="data4000"  value="4000">1.5Gb <br> 30days<br> <strong>N4,000</strong> </button>
                               <button type="submit" name="data5000" id="data5000"  value="5000">1.5Gb <br> 30days<br> <strong>N5,000</strong> </button>
                               <button type="submit" name="data6000" id="data6000"  value="6000">1.5Gb <br> 30days<br> <strong>N6,000</strong> </button>
                            </form>
                           
                        </span>
                        
                    </div>
                     
                    <input type="button" value="TOP ALL">
            </div>

    </div>
     <script
        src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://flw-pms-dev.eu-west-1.elasticbeanstalk.com/flwv3-pug/getpaidx/api/flwpbf-inline.js"></script>
    <script type="text/javascript" src="wallet.js"></script>
</body>
</html>