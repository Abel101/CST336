 <script> 
           var ran =5+6;
           console.log(ran);
           
           ran =Math.floor(Math.random()*99)+1;
           console.log(ran);
           document.getElementById('guess').innerHTML=ran;
        var guesss = document.querySelector('#guess');
        var lr=document.querySelector('#ls');
        var lh = document.querySelector('#lh');
        var submit = document.querySelector('.guesssubmit');
        var field = document.querySelector('.guessfield');
        
        var count = 1;
        var reset = document.querySelector('#reset');
        function checkguess(){
            var user = Number(field.var);
            if(count==1){
                guesss.innerHTML= "pre guess:"; 
            }
            guesss.innerHTML+= user+' ';
            if(user==ran){
                lr.innerHTML ="Congratulations ! You got it right!";
                lr.style.backgroundColor="green";
                lh.innerHTML='';
                setGameOver();
            }else if(count == 7){
                lr.innerHTML= "Sorry you lost";
                setGameOver();
            }else{
                lr.innerHTML = "Wrong";
                lr.style.backgroundColor ="red";
                if(user < ran){
                    lh.innerHTML = "last guess was too low";
                }else if(user > ran){
                    lh.innerHTML = "last guess waqs too high";
                }
            }
            count ++;
            field.var = " ";
            field.focus();
        }
        submit.addEventListener("click",checkguess)
        function setGameOver(){
            field.disabled = true;
            submit.disabled = true;
            reset.style.display = "inline";
            reset.addEventListener("click",resetGame);
        }
        function resetGame(){
            count =1;
            var resetpar = document.querySelectorAll(".resultpara");
            for(var i=0;i<resetpar.length;i++){
                resetpar[i].textContent=" ";
            }
            reset.style.display="none";
            field.disabled=false;
            submit.disabled=false;
            field.var=" ";
            field.focus();
            lr.style.backgroundColor="white";
            ran = Math.floor(Math.random()*99)+1;
        }
        </script>