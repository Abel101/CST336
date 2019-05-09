<?php
include '../../../db/db_connection.php';

$conn = getDatabaseConnection("Practice");


$sql= "DELETE FROM `fe_lock` WHERE studentId =". $_GET["studentId"];
$stmt = $conn->prepare($sql);
$stmt->execute();
/// only for SELECT  $records = $stmt->fetchAll(PDO::FETCH_ASSOC);

$sql = "UPDATE 'fe_login' SET 'failedAttempts' = 0 WHERE 'fe_login'.'studentId' = ".$_GET[studentId];
$stmt = $conn->prepare($sql);
$stmt->execute();
?>