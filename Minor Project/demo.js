function registration() {
    // Hide the existing #login element
    document.querySelector('#login').style.display = 'none';
    document.querySelector('#registration').style.display = 'block';
}

function login() {
    document.querySelector('#registration').style.display = 'none'
    document.querySelector('#login').style.display = 'block'
}
/*
var x = document.getElementById("login");
var y = document.getElementById("Register");
var z = document.getElementById("btn");

function Register(){
    x.style.left="-400px";
    y.style.left="50px";
    z.style.left="110px";
}
function login(){
    x.style.left="50px";
    y.style.left="450px";
    z.style.left="0";
}
*/