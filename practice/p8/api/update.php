<?php
    include '../../../db/db_connection.php';
    $conn = getDatabaseConnection("c9");

     $qID = $_GET['pollId'];
     $choice = $_GET['user'];
     
     
    
     //UPDATE `poll_response` SET `pollId`=[value-1],`option1`=[value-2],`option2`=[value-3],`option3`=[value-4],`option4`=[value-5],`option5`=[value-6] WHERE 1
    // echo ($user);
     $sql = "UPDATE 'poll_response' SET 'pollId' = $qID WHERE $choice = $choice + 1";
      
     $stmt = $conn->prepare($sql);
     $stmt->execute();
    // $product = $stmt->fetch(PDO::FETCH_ASSOC);
     echo json_encode($qID,$choice);
    
?>