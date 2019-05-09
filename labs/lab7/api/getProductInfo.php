<?php

    
    include '../../../db/db_connection.php';
    $conn = getDatabaseConnection("OtterMart");

    $productId = $_GET['productId'];
    
    $sql = "SELECT * FROM om_product WHERE productId = $productId";
    
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $product = $stmt->fetch(PDO::FETCH_ASSOC);
    echo json_encode($product);

?>