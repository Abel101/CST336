<?php

// $host = "localhost";
// $dbname = "OtterMart";
// $username = "root";
// $password = "";

// // Establishing a connection
// $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

 include '../../../db/db_connection.php';
 $conn = getDatabaseConnection("OtterMart");


// Setting Errorhandling to Exception
// $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

$sql = "SELECT * FROM om_product ORDER BY price";
$stmt = $conn -> prepare($sql);  //$connection MUST be previously initialized
$stmt->execute();
$records = $stmt->fetchAll(PDO::FETCH_ASSOC); //use fetch for one record, fetchAll for multiple

//print_r($records); //displays array content

echo json_encode($records);

//echo $records[0]['productName'];
?>