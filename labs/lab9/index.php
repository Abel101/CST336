<?php
if(!empty($_FILES)){
   // print_r($_FILES);
    
   // echo"Image size:" . $_FILES['myFile']['size'];
    
    move_uploaded_file($_FILES['myFile']['tmp_name'],"gallery/". $_FILES['myFile']['name']);
}
    
    function displayImagesUploaded(){
    
    $images = scandir("gallery");//Returns all file name within a folder

    for($i=2;$i<count($images);$i++){
        echo "<img src='gallery/$images[$i]' width='50'/>";
        }//loop
    }//function

?>
<!DOCTYPE html>


<html>
    <head>
        <title>Lab9 : File Upload </title>
        <link rel="stylesheet" href="css/styles.css" type="text/css" />
    </head>
    <body>
        <h1> File Uploading </h1>
       <hr>
        <form method ="POST" enctype="multipart/form-data">
          
            <input type="file" name ="myFile"/>
            <button id='but'> Upload File </button>
             
        </form>
        
        <hr>
          <br/>
        <br/>
        <br/>
        <h3> Images Uploaded :</h3>
        <div id ="pic">
        <?= displayImagesUploaded() ?>
        </div>
        <br>
    </body>
    
    <hr>
</html>