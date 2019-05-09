<?php
include '../../db/db_connection.php';

$conn = getDatabaseConnection("Practice");

function displayLockedAccount(){
    global $conn;
    $sql= "SELECT * FROM `fe_login` NATURAL JOIN fe_lock";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    for($i=0; $i<count($records);$i++){
        //username, attempts,and button
        echo $records[$i]['username']." ".$records[$i]['failedAttempts']." "."<button onClick=unlock(this,".$records[$i]['studentId'].")>Unlocked</button>"; 
        echo "<br>";
    }
    
    
}

?>


<!DOCTYPE html>
<html>
    <head>  

        <title> Program 2 : Final Exam Practice </title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script>
        //Gloabal
            function unlock(btn,id){
                //alert(id);
                $(btn).html("Unlocked!!!");
                $(btn).atrr("disabled","disabled");
                 $.ajax({
                    type: "GET",
                    url: "api/unlock.php",
                    dataType: "json",
                    data:{"studentId":id},
                    success: function(data, status) {
                             
                    }
                });
                
            }
        </script>
    </head>
    <body>
        <h1> Unlocking Account </h1>
        
        <?= displayLockedAccount() ?>
        
    </body>
</html>