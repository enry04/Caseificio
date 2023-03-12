
const checkBox = document.querySelector(".option-btn");
const popUp = document.querySelector(".popUp-menu-container");
const text = document.querySelector(".popUp-block");
checkBox.addEventListener("change", () => {
    if (checkBox.checked) {
        popUp.classList.toggle("hide", false);
        text.classList.toggle("active-page", true);
    } else {
        popUp.classList.toggle("hide", true);
        text.classList.toggle("active-page", false);
    }
});
