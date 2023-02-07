import "../../css/user/login.css";
import "../../css/app/form.css";

function controlPassword() {
    const button = document.querySelector(".form__show-pass");
    const passwordLabel = document.querySelector(".form__label.password");
    const passwordField = passwordLabel.querySelector(".password");
    console.log(passwordField);

    button.addEventListener("click", (evt) => {
        evt.preventDefault();
        const targetClass =  passwordField.type === "text" ? "password" : "text";
        const removedClass = passwordField.type === "password" ? "password" : "text";

        passwordField.type = targetClass;
        
        passwordLabel.classList.add(targetClass);
        passwordLabel.classList.remove(removedClass);
    })
}

controlPassword();