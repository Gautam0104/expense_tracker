const signUpButton=document.getElementById('signUpButton');
const signInButton=document.getElementById('signInButton');
const signInForm=document.getElementById('signIn');
const signUpForm=document.getElementById('signup');
const registerButton = document.getElementById('register');

registerButton.addEventListener('click',function(){

})

signUpButton.addEventListener('click',function(){

    signInForm.style.display="none";
    signUpForm.style.display="block";
})

signInButton.addEventListener('click', function(){
    signInForm.style.display="block";
    signUpForm.style.display="none";
})



