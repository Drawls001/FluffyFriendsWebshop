function futas() {
    var warning = document.getElementById('warning');
    setTimeout(function() {
        warning.style.display = "none";
    }, 5000); // 5 másodperc várakozás
  }
  


  
function getHelp(){
    var alert = document.getElementById('getAlert');
    var _div = document.getElementById('Help_Div');
    var email = document.getElementById('email');
    var message = document.getElementById('exampleFormControlTextarea1');
    var warning = document.getElementById('warning');
    var topic = document.getElementById('topic');
    var result = document.getElementById('Results');
    var em = document.getElementById('emial1');
    var top = document.getElementById('topic1');
    var mess = document.getElementById('problem1');


    if(email.value.length === 0 && 
        message.value.length === 0 && 
       topic.value.length === 0){

        warning.style.display = "block";
        futas();
        
    }else {
        warning.style.display = "none";
        alert.style.display = "block";
        _div.style.display="none";
        result.style.display="block";

        em.innerText = email.value;
        top.innerText = topic.value;
        mess.innerText = message.value;

    }  
}


//Clear
function getClear(){
    var alert = document.getElementById('getAlert');
    var _div = document.getElementById('Help_Div');
    var email = document.getElementById('email');
    var message = document.getElementById('exampleFormControlTextarea1');
    var topic = document.getElementById('topic');   
    var clearButton = document.getElementById('button-addon2');
    var clear = "";


    topic.value = "";
    email.value = "";
    message.value = "";


}


  
  