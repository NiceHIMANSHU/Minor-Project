function auth(){
    var email = document.getElementById("email").value;
    var password=document.getElementById("password").value;
    var user=document.getElementById("user").value;
    if(email=="himanshu@gmail.com","arjun@gmail.com","ritik@gmail.com" && password=="Himanshu123","Arjun123","Ritik123" && user=="Heman"/*,"Allu","Tiktik"*/){
        window.location.assign("index.html");
        alert("login successfully");
    }
    else{
        alert("Invalid Information");
        return;
    }
}
function n(){
    var email = document.getElementById("email").value;
    var password=document.getElementById("password").value;
    var user=document.getElementById("user").value;
    if(email=="himanshu@gmail.com","arjun@gmail.com","ritik@gmail.com" && password=="Himanshu123","Arjun123","Ritik123" && user=="Heman"/*,"Allu","Tiktik"*/){
        window.location.assign("login.html");
        alert("login successfully");
    }
    else{
        alert("Invalid Information");
        return;
    }
}
function registration() {
    // Hide the existing #login element
    document.querySelector('#login').style.display = 'none';
    document.querySelector('#registration').style.display = 'block';
}

function login() {
    document.querySelector('#registration').style.display = 'none'
    document.querySelector('#login').style.display = 'block'
}