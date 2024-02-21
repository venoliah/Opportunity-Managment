//open login page onclick
const loginBtn = document.getElementById('loginBtn');

loginBtn.addEventListener('click', function() {
    window.location.href = 'login.html'; 
});

//open registration page onclick
const registerBtn = document.getElementById('registerBtn');

registerBtn.addEventListener('click',function(){
    window.location.href = 'registration.html'; 
});

//open loginpage onclick registration
const registeruser = document.getElementById('registeruser');

registeruser.addEventListener('click',function(){
    window.location.href = 'login.html'; 
});

//open homepage onclick login
const loginuser = document.getElementById('loginuser');

loginuser.addEventListener('click',function(){
    window.location.href = 'homepage.html'; 
});

