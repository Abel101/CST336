<?php
$codes = array();
$codeArray=aray();

$codes["promo"] = "half";
$codes["discount"] = "50";
$codes["info"] = "50% off this order";

array_push($codeArray,$codes);

$codes["promo"] = "foot";
$codes["discount"] = "20";
$codes["info"] = "20% off this order";
array_push($codeArray,$codes);

$codes["promo"] = "six";
$codes["discount"] = "10";
$codes["info"] = "10% off this order";
array_push($codeArray,$codes);

$codes["promo"] = "supersub";
$codes["discount"] = "80";
$codes["info"] = "80% off this order";
$codeArray = array();


array_push($codeArray,$codes);

echo json_encode($code[rand(0,3)]);
?>