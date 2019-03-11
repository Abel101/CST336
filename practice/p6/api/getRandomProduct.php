<?php
$Products = array();
$ProductArray = array();

$Products["iteam"]="Microfiber Beach Towel";
$Products["price"] ="40";
$Products["amount"] ="2";
array_push($ProductArray,$Products);

$Products["iteam"]="Flip-Flop Sandals";
$Products["price"] ="30";
$Products["amount"] ="5";
array_push($ProductArray,$Products);

$Products["iteam"]="Sunscreen 80SPF";
$Products["price"] ="25";
$Products["amount"] ="3";
array_push($ProductArray,$Products);

$Products["iteam"]="Plastic Flying Disc";
$Products["price"] ="15";
$Products["amount"] ="4";
array_push($ProductArray,$Products);

$Products["iteam"]="Beach Umbrella";
$Products["price"] ="75";
$Products["amount"] ="1";
array_push($ProductArray,$Products);




echo json_encode($ProductArray[rand(0,sizeof($ProductArray)-1)]);

?>