<?php
    include '../../../db/db_connection.php';
    $conn = getDatabaseConnection("OtterMart");

    $product =$_GET['product'];
    $namedParameters = array();
    
    $sql ="SELECT * FROM om_product WHERE 1
        And productName Like'%".$_GET['product']."%'";
        
        
if(!empty($_GET['product'])){
    $sql .= "AND productName LIKE :productName";
    $namedParameters[":productName"] = "%" . $_GET['product'] ."%";
}

if(!empty($_GET['category'])){
    $sql.="AND catID = :categoryId";
    $namedParameters[":categoryId"] = $_GET['category'];
}
if(!empty($_GET['priceFrom'])){
    $sql .= "AND price >= :priceForm";
    $namedParameters[":priceForm"] = "%" . $_GET['priceForm'] ."%";
}

if(!empty($_GET['priceTo'])){
    $sql.="AND price <= :priceTo";
    $namedParameters[":priceTo"] = $_GET['priceTo'];
}

if(isset($_GET['orderBy'])){
    if($_GET['orderBy']=='price'){
        $sql .="ORDER BY price";
    }
    else if($_GET['orderBy'] =="name"){
        $sql .= "ORDER BY productName";
    }
}

$stmt = $conn->prepare($sql);
$stmt->execute($namedParameters);
$records =$stmt ->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($records);
?>