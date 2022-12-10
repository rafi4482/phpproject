const form=document.getElementById('form');
const username=document.getElementById('name');
const mobile=document.getElementById('mobile');
const email=document.getElementById('email');
const password=document.getElementById('password');
const cpassword=document.getElementById('cpassword');

function showError(input,message){
    const formControl=input.parentElement;
    formControl.className='form-control error';
    const small=formControl.querySelector('small');
    small.innerText=message;
}
function showSuccess(input){
    const formControl=input.parentElement;
    formControl.className='form-control success';
}
function isValidEmail(email){
   
     const re= /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
     return re.test(String(email).toLowerCase());
    
}
function checkLength(input,min,max){
    if(input.value.length<min){
        showError(input,'Password must be at least 3 characters')
    }
    else
     showSuccess(input);
}
function checkMatchPassword(input1,input2){
    if(input1.value!=input2.value){
        showError(input1,' Passwords does not matched')
    }
}

form.addEventListener('submit',function(e){
    e.preventDefault();
    if(username.value==''){
        showError(username,'Username is required');
    }
    else{
        showSuccess(username);
        
    }
    if(mobile.value==''){
        showError(mobile,'Mobile is required');
    }
    else{
        showSuccess(mobile);
        
    }

    if(email.value==''){
        showError(email,'Emailis required');
    }
    else if(!isValidEmail(email.value)){
        showError(email,'Email is not valid');
    }
        else{
        showSuccess(email);
        
    }

    if(password.value==''){
        showError(password,'Password required');
    }
    else {
        checkLength(password,3,12);
    }
    if(cpassword.value==''){
        showError(cpassword,'Password required');
    }
    else {
        checkLength(cpassword,3,12);
        checkMatchPassword(password,cpassword);
    }
    
})
