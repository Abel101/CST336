<?php

$pass ="";

$letters=array();
$letters =range("a","z");
//print_r($letters);//display both the index and its content
for($i=0;$i<8;$i++){
    $random = rand(0,25);// generates a random number from 0-15 inclusive
   //use . instead of + for php to combine strings
    $pass .=$letters[$random];
}
$pass[0]=rand(0,9);
$pass = str_shuffle($pass);//this would shuffle the letters in the string




$data = array();
$data["suggestedPwd"] =$pass;
echo json_encode($data);

?>