let menu=document.querySelector('#menu-btn');
let navbar=document.querySelector('.navbar');
menu.onclick=()=>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}
let login=document.querySelector('#login-btn');
let cont=document.querySelector('.login-form-container');
login.onclick=()=>{
    cont.classList.toggle('active');
}
let login1=document.querySelector('#close-login-form');
let cont1=document.querySelector('.login-form-container');
login1.onclick=()=>{
    cont1.classList.remove('active');
}