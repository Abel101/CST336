<?php
if(!empty($_FILES)){
    //print_r($_FILES);
    echo"Image size:" . $_FILES['myFile']['size'];
    move_uploaded_file($_FILES['myFile']['tmp_name'],"gallery/". $_FILES);
}
function disaplyImagesUplaoded
$imgaes = scandir("gallery");//Returns all file name within a folder

for($i=2;$i<count($images);$i++){
    echo "img src='gallery/$images[$i]' width='50'/>";
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Lab9 : File Upload </title>
    </head>
    <body>
        
        <form method ="POST" enctype="multipart/form-data">
          
            
            <input type="file" name ="myFile"/>
            <button> Upload File </button>
             
        </form>
        <hr>
        <h3> Images Uploaded :</h3>
        <0        

    </body>
</html>