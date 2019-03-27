<?php
include '../../../db/db_connection.php';
$conn = getDatabaseConnection("MidTerm");
$promoCode = $_GET['promoCode'];
$code=array();
$sql = "SELECT promoCode FROM mp_codes WHERE 1";
$stmt = $conn->prepare($sql);
$stmt->execute();
$records = $stmt->fetchAll(PDO::FETCH_ASSOC);
for ($num = 0; $num <= count($records)-1; $num += 1) { 
    $str = implode("",$records[$num]);
    // echo $str;
    if(strcmp($promoCode,$str) == 0){
        $code['here']=true;
    }else{
        $code['here']=false;
    }
}  
echo json_encode($code);
?>