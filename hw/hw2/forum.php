<html>
    
    <head>
        <title>  </title>
        <meta charset ="utf-8"/>
         <link rel="stylesheet" href="css/styles.css" type="text/css" />

    </head>
    
    <body>
           <div id ="top">
            <h1>User Information</h1>
        </div>
        
        <div id = "wow">
        <?php
if(isset($_POST["print"])){
    $name = $_POST["fullname"];
    $feedback = $_POST["feedback"];
    $color = $_POST["color"];
    $degree = $_POST["degreeChoices"];
    $pet =$_POST["pets"];
    
    echo "<hr1> Your name is ".$name. "<br /> </hr1>";
    echo "Your feedback: ".$feedback. "<br />";
    echo "Your favorite color is ".$color. "<br />";
    echo "Your highest degree is ".$degree. "<br />";
    echo "Your favorite pet is ".$pet. "<br />";
    echo "Thanks you for visiting my site <br/>";

    }else{
        echo "No input page!!!!!";
    }
?>
  <form action="home.html">
     <input type="submit" value="Go back !" name ="back" />  
  </form>
</div>

 <footer>
            
            <hr>
           
            CST336.2019&copy; Gonzalez<br/>
            <strong> Disclaimer:</strong>The information in this webpage is fake.<br />
            It is used for academic purposes only.
            <br>
            <figure id="logo">
                <img src = "../../img/otter.png" alt="csumb logo" />
            </figure>
        </footer>
    </body>
</html>
