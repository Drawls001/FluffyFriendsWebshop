function SetSeePassword() {
    var btn = document.getElementById('button-addon2');
    var password = document.getElementById('password');
    var password2 = document.getElementById('password2');


    if(password.type === "password" || password2.type === "password"){
        password.type = "text";
        password2.type = "text";
    }else{
        password.type = "password";
        password2.type = "password";
    }
}

function SetLogSeePassword(){
    var btn = document.getElementById('button-addon2');
    var password = document.getElementById('password');
 
    if(password.type === "password"){
        password.type = "text";
    }else{
        password.type = "password";
    }
}