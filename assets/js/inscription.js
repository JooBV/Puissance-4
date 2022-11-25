function Check()
{
    //variable get element 
    var password = document.getElementById("mdp");
    var msg = document.getElementById("msg");
    var str = document.getElementById("strength");
    var bar1 = document.getElementById("barre1");
    var bar2 = document.getElementById("barre2");
    var bar3 = document.getElementById("barre3");

    password.addEventListener('input', () => {
        if(password.value.length > 0){
            msg.style.display = "block";
        }else{
            msg.style.display = "none";
        }

        if(password.value.length < 4){
            str.innerHTML = "faible"
            bar1.style.backgroundColor="red";
            bar2.style.backgroundColor="transparent";
            bar3.style.backgroundColor="transparent";
        }
        else if(password.value.length >= 4 && password.value.length <8){
            str.innerHTML = "moyen"
            bar1.style.backgroundColor="yellow";
            bar2.style.backgroundColor="yellow";
            bar3.style.backgroundColor="transparent";
        }
        else if(password.value.length >= 8){
            str.innerHTML = "fort"
            bar1.style.backgroundColor="green";
            bar2.style.backgroundColor="green";
            bar3.style.backgroundColor="green";
        }



    })

    
}

Check()