<?php

include '../../../db/db_connection.php';
$conn = getDatabaseConnection("PokeSearch");

$name = $_GET['name'];
$Id = $_GET['id'];

$sql = "INSERT INTO `Search` (`Name`, `pokeID`) VALUES ('$name','$Id')";
$stmt = $conn->prepare($sql);
$stmt->execute();
$sql = "SELECT `Name` FROM `Search` ORDER BY Name";
$stmt = $conn->prepare($sql);
$stmt->execute();
$records = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($records);
?>