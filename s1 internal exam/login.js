const mail = document.getElementById("email");
const btn = document.getElementById("btn");
const pwd = document.getElementById("pwd");

const emailError = document.getElementById("emailError");
const pwdError = document.getElementById("pwdError");



btn.addEventListener("click", function () {
    let flag = false

    emailError.textContent = "";
    pwdError.textContent = "";
    
    if (!mail.value.match(/[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[a-zA-Z0-9]+/g)) {
        emailError.textContent = "Email should be in the format 'example@mail.com'.";
        flag = true;
    }

    if(!pwd.value) {
        pwdError.textContent = "Please enter your password.";
        flag = true;
    }

    if (flag == true) {
        alert("Login Failed.");
    }
    else {
        window.location.replace("../reg/registration.html");
    }
})
