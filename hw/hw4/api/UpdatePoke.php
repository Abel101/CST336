<?php

include '../../../db/db_connection.php';
$conn = getDatabaseConnection("PokeSearch");

$name = $_GET['name'];
$Id = $_GET['id'];

$sql = "INSERT INTO `Search` (`Name`, `ID`, `Look`) VALUES ('$name','$Id','1')";
$stmt = $conn->prepare($sql);
$stmt->execute();
// $sql = "UPDATE `Search` SET `Look` = 'Look' + 1 WHERE ID = $Id";
// $stmt = $conn->prepare($sql);
// $stmt->execute();
//$records = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($records);
?>