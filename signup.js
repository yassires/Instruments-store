
const username = document.getElementById("name");
const email = document.getElementById("email");
const password = document.getElementById("password");
const passwordConfirmed = document.getElementById("confirm_password");
const form = document.getElementById("signup");
const errorusername = document.getElementById("errorUsername");
const errorEmail = document.getElementById("errorEmail");
const errorPassword = document.getElementById("errorPassword1");
const errorPasswordConfirmed = document.getElementById("errorPassword2");

form.addEventListener("submit", (e) => {
    var index = 0;
    if (username.value === "" || username.value == null) {
        index++;
        username.classList.add("is-invalid");
        errorusername.innerHTML = "Username is required to create your account.";
    } else {
        username.classList.remove("is-invalid")
        username.classList.add("is-valid");
        errorusername.innerHTML = "Looks Good !";
    }
     
    if (email.value === "" || email.value == null) {
        index++;
        email.classList.add("is-invalid");
        errorEmail.innerHTML = "Adress email is required to create your account.";
    } else {
        email.classList.remove("is-invalid")
        email.classList.add("is-valid");
        errorEmail.innerHTML = "Looks Good !";
    }

    if (password.value === "" || password.value == null) {
        index++;
        password.classList.add("is-invalid");
        errorPassword.innerHTML = "Enter a valid password !!";
    } else {
        password.classList.remove("is-invalid")
        password.classList.add("is-valid");
        errorPassword.innerHTML = "Looks Good !";
    }
    if ((passwordConfirmed.value === "" || passwordConfirmed.value == null) || passwordConfirmed.value !== password.value) {
        index++;
        passwordConfirmed.classList.add("is-invalid");
        errorPasswordConfirmed.innerHTML = "Passwords doesn't match !!";
    } else {
        passwordConfirmed.classList.remove("is-invalid")
        passwordConfirmed.classList.add("is-valid");
        errorPasswordConfirmed.innerHTML = "Looks Good !";
    }
    if (index > 0) {
        e.preventDefault();
    }

});