<!DOCTYPE html>
<html>
    <head>
        <title> View Favorites </title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   
        <script>
        /*global $*/
            function displayFavorites(keywordLink) {
                
               // alert($(keywordLink).html());
               var keyword = $(keywordLink).html();
               //alert(keyword);
               
                $.ajax({
                    method: "get",
                       url: "api/favoriteAPI.php",
                  dataType: "json",
                      data: {
                              "action": "favorites",
                             "keyword": keyword
                            },
                    success: function(data, status) {
                        //alert(data[0].keyword);
                        
                         $("#favorites").html("");
                          data.forEach(function(i){
                            
                           $("#favorites").append("<img width='200' src='" + i.imageURL+ "'> ");
                            
                        });
                    },
                    complete: function(data, status) { //optional, used for debugging purposes
                     // alert(status);
                    }
                  });//ajax
                
            }
        
        
            $(document).ready(function(){
            
                $.ajax({
                    method: "get",
                       url: "api/favoriteAPI.php",
                  dataType: "json",
                      data: {
                             "action": "keyword",
                            },
                    success: function(data, status) {
                        //alert(data[0].keyword);
                        data.forEach(function(i){
                            
                             $("#keywords").append("<a class='favorites'  href='#'>" + i.keyword+ "</a> ");
                        });
                        
                        
                    },
                    complete: function(data, status) { //optional, used for debugging purposes
                      //alert(status);
                    }
                  });//ajax
                  
                  
                  $("#keywords").on("click", ".favorites", function(){
                      
                      displayFavorites(this);
                      
                  });
            
            });//documentReady
            
        </script>
        
    </head>
    <body>

           <div class="jumbo">
                <h1 class="letters"> Pixabay Image Search </h1>    
           </div><br><br>
           
               
            <div id="keywords"></div>
            
            
            <div id="favorites"></div>
            
            <div>
                <form action="index.html">
                    <button class="buttonstyle"> Back to Search </button>
                </form>
            </div><br>

    </body>
    
    
</html>