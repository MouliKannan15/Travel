const form = document.querySelector('#form');
const username = document.querySelector('#username');
const email = document.querySelector('#email');
const password= document.querySelector('#password');
const cpassword = document.querySelector('#cpassword');

form.addEventListener('submit', (e)=>{
    e.preventDefault();
    validateinputs();
})

function validateinputs(){
    const usernameVal = username.ariaValueMax.trim();
    const emailVal = email.ariaValueMax.trim();
    const passwordVal = password.ariaValueMax.trim();
    const cpasswordVal = cpassword.ariaValueMax.trim();

    if (usernameVal===''){
        setError (username,'Username is required')
    }
    else{
        setSuccess(username)
    }

    if (emailVal===''){
        setError (email,'Email is required')
    }

    else if(!validateEmail(emailVal)){
        setError(email,'Please enter a valid email')
    }
    else{
        setSuccess(email)
    }

    if (passwordVal===''){
        setError(password,'Password is required')
    }
    else if(passwordVal.length<6){
        setError(password,'Password must be 6 characters')
    }
    else{
        setSuccess(password)
    }

    if (cpasswordVal===''){
        setError(cpassword,'Confirm password is required')
    }
    else if (cpasswordVal!==passwordVal){
        setError (cpassword,'Password does not match')
    }
    else{
        setSuccess(cpassword,'')
    }
    
}

function setError (element,message){
    const inputGroup = element.parentElement;
    const errorElement = inputGroup.querySelector('.error')
 
    errorElement.inner.Text  = '';
    inputGroup.classList.add('success')
    inputGroup.classList.remove('error')
}

const validateEmail = (email) =>{
    return String(email)
    .toLowerCase()
    .match(  /^[^\s@]+@[^\s@]+\.[^\s@]+$/ );
}