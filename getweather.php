<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.spesolution.com/trial/get-weather",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS =>"{\r\n        \"resource_type\" : \"get_weather\"\r\n}",
  CURLOPT_HTTPHEADER => array(
    "Content-Type: application/json",
    "ykJEHzldXGMDCPNfyNdqIWtOX63YgwtW: b29uZ3ZoZWpsZg==:cHlCa0VxQ1VnaERkQUdqUg=="
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
