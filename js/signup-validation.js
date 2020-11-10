var username_verified = 0;
var email_verified = 0;
var password_verified =0;
var confirm_password_verified = 0;

//USERNAME VALIDATION
var element = document.getElementById('username');
element.addEventListener('keyup', function(e){
    var username =  this.value;
    var regex = /[\W]/;
    if(regex.test(username) || username.length < 4){
        this.style.borderColor = 'red';
        document.querySelector('.invalid-username').style.display = 'block';
        username_verified = 0;
    }
    else{
        this.style.borderColor = 'initial';
        document.querySelector('.invalid-username').style.display = 'none';
        username_verified = 1;
    }
})

//EMAIL VALIDATION
function looksLikeMail(str) {
    var lastAtPos = str.lastIndexOf('@');
    var lastDotPos = str.lastIndexOf('.');
    return (lastAtPos < lastDotPos && lastAtPos > 0 && str.indexOf('@@') == -1 && lastDotPos > 2 && (str.length - lastDotPos) > 2);
}
var element = document.getElementById('email');
element.addEventListener('keyup',function(e){
    var email = element.value;
    if(!looksLikeMail(email)){
        this.style.borderColor = 'red';
        document.querySelector('.invalid-email').style.display = 'block';
        email_verified = 0;
    }
    else{
        this.style.borderColor = 'initial';
        document.querySelector('.invalid-email').style.display = 'none';
        email_verified = 1;
    }
});

//PASSWORD VALIDATION
document.getElementById('password').addEventListener('keyup', function(e){
    var password = this.value;

    var must_not_contain = /[^a-zA-Z0-9_#@$%^&*()+=\-\[\]\'\";,.\/{}|:`<>?~\\\\]/; //anything other than the listed
    var must_contain_symbol = /[#@$%^&*()+=\-\[\]\'\";,.\/{}|:<>?_~\\\\]/;
    var must_contain_digit = /[0-9]/;
    var must_contain_uppercase = /[A-Z]/;
    var must_contain_lowercase = /[a-z]/;

    if(password.length < 4
        || must_contain_symbol.test(password) == 0
        || must_contain_digit.test(password) == 0
        || must_contain_lowercase.test(password) == 0
        || must_contain_uppercase.test(password) == 0
        || must_not_contain.test(password)){
        this.style.borderColor = 'red';
        document.querySelector('.invalid-password').style.display = 'block';
        password_verified = 0;
    }
    else{
        this.style.borderColor = 'initial';
        document.querySelector('.invalid-password').style.display = 'none';
        password_verified = 1;
    }
})

//CONFIRM PASSWORD VALIDATION
document.querySelector('#confirm-password').addEventListener('keyup', function(e){
    var password = document.querySelector('#password').value;
    var confirm_password = this.value;
    if(password != confirm_password){
        this.style.borderColor = 'red';
        document.querySelector('.invalid-confirm-password').style.display = 'block';
        confirm_password_verified = 0;
    }
    else{
        this.style.borderColor = 'initial';
        document.querySelector('.invalid-confirm-password').style.display = 'none';
        confirm_password_verified = 1;
    }
})

//SUBMIT BUTTON FUNCTIONALIITY
var submit_button = document.querySelector('#submit-button');
submit_button.addEventListener('click', function(e){
    e.preventDefault();

    if(username_verified == 1 && email_verified == 1 && password_verified == 1 && confirm_password_verified == 1){
        var signup_error = document.querySelector('#signup-error');
        signup_error.innerHTML = '';
        signup_error.style.display = 'none';
        document.querySelector('#form').requestSubmit(submit_button);
    }
    else{
        var signup_error = document.querySelector('#signup-error');
        signup_error.innerHTML = 'Form not filled properly';
        signup_error.style.display = 'block';
    }
})