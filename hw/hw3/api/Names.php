<?php
header('Access-Control-Allow-Origin: *');

//******
//This Web API checks whether a username exists in the "usernames" array
//It returns the data in JSON format
//******

$name = array("Abel", "Exia", "John", "Maria", "John","Drew","Norris","Jess","Jacob");


echo json_encode($username);

?>