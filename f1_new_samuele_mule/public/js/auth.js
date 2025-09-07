const login = document.querySelector("form[name = 'login']");
if(login)
    login.onsubmit = handler_login;

function handler_login(event) {
    console.log(event);
    console.log(login.email.value.length);

    if (login.email.value.length == 0) {
        alert("il campo email non può essere vuoto");
        return false;
    }
    if (login.password.value.length == 0) {
        alert("il campo password non può essere vuoto");
        return false;
    }
    return true;
}

const register = document.querySelector("form[name = 'register']");
if(register) 
    register.onsubmit = handler_register;

function handler_register() {
    
    const passwordRegex = /^(?=.*[A-Z])(?=.*\d).{8,}$/;
    console.log(passwordRegex.test(register.password.value), register.password.value)

    if (register.email.value.length == 0) {
        alert("il campo email non può essere vuoto");
        return false;
    }

    if (register.name.value.length == 0) {
        alert("il campo name non può essere vuoto");
        return false;
    }

    if (!passwordRegex.test(register.password.value)) {
        alert("il campo password deve contenere almeno 8 caratteri, una maiuscola ed un numero");
        return false;
    }
     if(register.password.value !== register.password_confirmation.value){
        alert("Conferma password non corretta");
        return false;
    }
    return true;
}