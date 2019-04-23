<?php



$keyword = $_GET['keyword'];

$curl = curl_init();
      curl_setopt_array($curl, array(
      CURLOPT_URL => "https://pokeapi.co/api/v2/pokemon/$keyword",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_HTTPHEADER => array(
      "cache-control: no-cache"
      ),
  ));

$jsonData = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);

echo $jsonData



?>