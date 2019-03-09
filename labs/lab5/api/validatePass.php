<?php
//Validates that the username is not part of the password
$username = $_GET{'username'};
$password = $_GET{'pass'};

//echo $username."<br>";
//echo $password."<br>";

$data = array();

if(stripos( $username, $password) != false){
    $data["validPass"] = false;
}else{
    $data["validPass"] = true;
}

echo json_encode($data);
?>