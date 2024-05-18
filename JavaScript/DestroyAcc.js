function DeleteAcc() {
    var screen = document.getElementById('warn');

    

    if(screen.style.display == "none"){
        screen.style.display ="block";
    }

}

function Back(){
    var screen = document.getElementById('warn');

    

    if(screen.style.display == "block"){
        screen.style.display ="none";
    }
}
function setLang(){
    var lang = document.getElementById('inputGroupSelect04').value; 
 
     if(lang == "1"){
         console.log(lang);
     }else if(lang == "2") {
         console.log(lang);
     }else if(lang=="3") {
         console.log(lang);
     }
 
 
 
 }