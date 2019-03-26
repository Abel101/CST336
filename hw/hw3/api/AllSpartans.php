<?php
include '../../../db/db_connection.php';
$conn = getDatabaseConnection("Spartans");
$sql_1 = "SELECT * FROM Name ORDER BY ID";
$stmt = $conn->prepare($sql_1);
$stmt->execute();
$records = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($records);
?>