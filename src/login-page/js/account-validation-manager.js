import FetchUtil from "../../common/js/fetch-util.js";

class AccountValidationManager {
    constructor(parentElement) {
        this.rootElement = parentElement;
        this.elements = {};
    }

    init() {
        this.initElements();
        this.initEventListeners();
    }

    initElements() {
        this.elements = {
            username: this.rootElement.querySelector(".username-text"),
            password: this.rootElement.querySelector(".password-text"),
            form: this.rootElement.querySelector("form"),
            error: this.rootElement.querySelector(".error-info"),
        }
    }

    initEventListeners() {
        this.elements.form.addEventListener("submit", (event) => {
            event.preventDefault();
            const formData = {
                username: this.elements.username.value,
                password: this.elements.password.value
            }
            FetchUtil.postData("./php/check-user.php", formData).then((response) => {
                if (response.status == "success") {
                    this.elements.form.reset();
                    location.href = "";

                } else {
                    this.elements.error.textContent = "Credenziali errate";
                }
            })
        });
    }
}

export default AccountValidationManager; 