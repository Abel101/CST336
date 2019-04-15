<?php

    include '../../../db/db_connection.php';
    $conn = getDatabaseConnection("OtterMart");
    
    $arr = array();
    
    $arr[":productName"] = $_GET["productName"];
    $arr[":productDescription"] = $_GET["productDescription"];
    $arr[":productImage"] = $_GET["productImage"];
    $arr[":price"] = $_GET["productPrice"];
    $arr[":catId"] = $_GET["catId"];
  
   $sql = "INSERT INTO om_product ( `productName`, `productDescription`, `productImage`, `price`, `catId`) 
    VALUES (:productName, :productDescription, :productImage, :price, :catId)";
   
    $stmt = $conn->prepare($sql);
    $stmt->execute($arr);
    $sql ="SELECT COUNT(1) totalproducts FROM om_product";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetch(PDO::FETCH_ASSOC);
    echo json_encode($records);
    
    ?>