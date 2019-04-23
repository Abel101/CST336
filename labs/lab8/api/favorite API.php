<?php

//receives these parameters: action, url, keyword

//TO GET THE 2 EXTRA POINTS IN THE HANDS-ON PORTION OF THE FINAL EXAM
//1. Add favorites to database
//2. Remove favorites from database
//3. Display the keyword list from database (use DISTINCT)

$action =$_GET['action'];
$keyword= $_GET['keyword'];

  switch (action) {
      
      case "add":
          $sql = "INSERT INTO `lab8_pixabay` (`Id`, `imageURL`, `keyword`, `timestamp`) VALUES (NULL, ':imageURL', ':keyword', ':date')";
          $namedParameter[]
          
                 break;
                 

      case "delete":
                 break;
                 
      
  }//switch

?>