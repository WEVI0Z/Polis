const wrapper = document.querySelector(".alert");
const button = wrapper.querySelector(".alert__close");

button.addEventListener("click", evt => {
    evt.preventDefault();

    wrapper.hidden = true;
});