const body = document.querySelector('body');
const navContainer = document.querySelector(".nav-container");
const showBtn = document.querySelector(".menu-btn");
const hideBtn = document.querySelector(".close-btn");
let isClosed = true;

showBtn.addEventListener("click", () => {
    if (isClosed) {
        body.classList.toggle("show-nav-body", true);
        navContainer.classList.toggle("show-nav", true);
        navContainer.classList.toggle("hide-nav", false);
        showBtn.classList.toggle("show-nav-menu", true);
        isClosed = false;
    } else {
        body.classList.toggle("show-nav-body", false);
        navContainer.classList.toggle("show-nav", false);
        navContainer.classList.toggle("hide-nav", true);
        showBtn.classList.toggle("show-nav-menu", false);
        isClosed = true;
    }
});

hideBtn.addEventListener("click", () => {
    body.classList.toggle("show-nav-body", false);
    navContainer.classList.toggle("show-nav", false);
    navContainer.classList.toggle("hide-nav", true);
    showBtn.classList.toggle("show-nav-menu", false);
    isClosed = true;
});