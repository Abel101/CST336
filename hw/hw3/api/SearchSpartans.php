<?php
include '../../../db/db_connection.php';
$conn = getDatabaseConnection("Spartans");
$promoCode = $_GET['Name'];
$code=array();
$sql = "SELECT CodeName FROM Name WHERE 1";
$stmt = $conn->prepare($sql);
$stmt->execute();
$records = $stmt->fetchAll(PDO::FETCH_ASSOC);
//print_r($records);

for ($num = 0; $num <= count($records)-1; $num += 1) { 
//$str = implode("",$records[$num]);
     echo $str;
    if($promoCode===$str){
        $code['here']=true;
    }else{
        $code['here']=false;
    }
}  
// if(in_array('Jai',$records)){
//     $code['here']=true;
// }else{
//     $code['here']=false;
// }
 echo json_encode($code);
?>