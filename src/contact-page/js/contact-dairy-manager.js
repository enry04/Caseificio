import FetchUtil from "../../common/js/fetch-util.js";

class ContactDairyManager {
    constructor(parentElement) {
        this.rootElement = parentElement;
        this.elements = {};
    }

    init() {
        this.initElements();
        this.initEventsListener();
    }

    initElements() {
        this.elements = {
            dairySelect: this.rootElement.querySelector("select"),
            message: this.rootElement.querySelector(".first-textarea"),
            form: this.rootElement.querySelector(".first-form"),
            infoText: document.querySelector(".info-text"),
        }
    }

    initEventsListener() {
        this.elements.form.addEventListener("submit", (event) => {
            event.preventDefault();
            const messageData = {
                email: 'Consorzio@gmail.com',
                message: this.elements.message.value,
                receiver: this.elements.dairySelect.value,
            }
            FetchUtil.postData("./php/insert-message.php", messageData).then((response) => {
                if (response.status == "success") {
                    this.elements.infoText.textContent = 'Messaggio inviato con successo!';
                    this.elements.infoText.classList.toggle("hide-info", false);
                    this.elements.infoText.classList.toggle("show-info", true);
                    setTimeout(() => {
                        this.elements.infoText.classList.toggle("hide-info", true);
                        this.elements.infoText.classList.toggle("show-info", false);
                    }, 2500)
                } else {
                    console.log(response.data);
                }
            })
        });
    }
}

export default ContactDairyManager;