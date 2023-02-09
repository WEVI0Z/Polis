export function controlPassword(form) {
    const button = form.querySelector(".form__show-pass");
    const passwordLabel = form.querySelector(".form__label.password");
    const passwordField = passwordLabel.querySelector(".password");

    button.addEventListener("click", (evt) => {
        evt.preventDefault();
        const targetClass =  passwordField.type === "text" ? "password" : "text";
        const removedClass = passwordField.type === "password" ? "password" : "text";

        passwordField.type = targetClass;
        
        passwordLabel.classList.add(targetClass);
        passwordLabel.classList.remove(removedClass);
    })
}