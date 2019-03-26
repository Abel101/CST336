<?php
include '../../../inc/dbConnection.php';
$conn = getDatabaseConnection("midtermP");
$promoCode = $_GET['promoCode'];
$namedParameters = array();
$sql = "SELECT * FROM mp_codes ORDER BY promoCode WHERE 1";
if (!empty($promoCode)) { //user entered a product keyword
    $sql .=  " AND promoCode LIKE :promoCode";
    $namedParameters[":promoCode"] = "%$promoCode%";
}
$stmt = $conn -> prepare($sql);  //$connection MUST be previously initialized
$stmt->execute($namedParameters);
$records = $stmt->fetchAll(PDO::FETCH_ASSOC); //use fetch for one record, fetchAll for multiple
echo json_encode($records);
?>