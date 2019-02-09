
         //var ran =5+6;
        //console.log(ran);
           
        var ran =Math.floor(Math.random()*99)+1;
        var guesses = document.querySelector("#guesses");
        var lr = document.querySelector("#ls");
        var lh = document.querySelector("#lh");
        
        var guessSubmit = document.querySelector(".guessSubmit");
        var guessField = document.querySelector(".guessField");
        
        var count = 1;
        var resetButton = document.querySelector("#reset");
        resetButton.style.display ="none";
        var resetButton;
        
        guessField.focus();
    
        function checkguess(){
            var user = Number(guessField.value);
            if(count==1){
                guesses.innerHTML= "Previous guess:"; 
            }
            guesses.innerHTML += user + " ";
            if(user==ran){
                lr.innerHTML = " Congratulations ! You got it right! ";
                lr.style.backgroundColor="green";
                lh.innerHTML="";
                setGameOver();
            }else if(count == 7){
                lr.innerHTML= "Sorry you lost";
                setGameOver();
            }else{
                lr.innerHTML = "Wrong!";
                lr.style.backgroundColor ="red";
                if(user < ran){
                    lh.innerHTML = "last guess was too low";
                }else if(user > ran){
                    lh.innerHTML = "last guess waqs too high";
                }
            }
            count ++;
            guessField.value = "";
            guessField.focus();
        }
        
        guessSubmit.addEventListener("click", checkguess);
        
        function setGameOver(){
            guessField.disabled = true;
            guessSubmit.disabled = true;
            resetButton.style.display = "inline";
            resetButton.addEventListener("click",resetGame);
        }
        function resetGame(){
            count =1;
            var resetpar = document.querySelectorAll(".resultpara");
            for(var i=0;i<resetpar.length;i++){
                resetpar[i].textContent = "";
            }
            resetButton.style.display="none";
            
            guessField.disabled=false;
            guessSubmit.disabled=false;
            guessField.value = "";
            guessField.focus();
            lr.style.backgroundColor="white";
            ran = Math.floor(Math.random()*99)+1;
        }