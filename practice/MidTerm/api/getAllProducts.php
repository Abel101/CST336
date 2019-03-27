<?php
$product = array();
$productsArray = array();
include '../../../db/db_connection.php';
$conn = getDatabaseConnection("MidTerm");
$sql_1 = "SELECT * FROM mp_product ORDER BY productName";
$stmt = $conn->prepare($sql_1);
$stmt->execute();
$records = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($records);
?>