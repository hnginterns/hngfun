<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //something posted
    if (isset($_POST['data1000'])) {
        loadData('1000');
    } else if (isset($_POST['data2000'])) {
        loadData('2000');
    } 
     else if (isset($_POST['data3000'])) {
        loadData('2000');
    } 
     else if (isset($_POST['data4000'])) {
        loadData('3000');
    }
     else if (isset($_POST['data5000'])) {
        loadData('5000');
    } 
     else if (isset($_POST['data6000'])) {
        loadData('6000');
    }     
   
}
function loadData($amount)
{
  $curl = curl_init();
  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://mobileairtimeng.com/httpapi/datatopup.php?userid=%2008189115870&pass=dbcc49ee2fba9f150c5e82&network=1&phone=08026737118&amt=$amount",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
      "cache-control: no-cache",
      "postman-token: a4bdc5ea-15c4-5781-9a98-99ef1ee81e5b"
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
}
?>