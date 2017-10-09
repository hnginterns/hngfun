<?php
	

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://mobileairtimeng.com/httpapi/?userid=%2008189115870&pass=dbcc49ee2fba9f150c5e82&network=1&phone=08026737118&amt=50",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache",
    "postman-token: d420f27b-2a49-4391-c42d-61019fbb0968"
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